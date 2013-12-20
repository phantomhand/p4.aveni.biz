<?php
class users_controller extends base_controller {

    public function __construct() {
        parent::__construct();
    } 

    public function index() {
        echo "This is the index page";
    }

    public function signup($error = NULL) {
        # Setup view
        $this->template->content = View::instance('v_users_signup');
        $this->template->title   = "DER | Sign Up";
        
       	# Pass in template-specific CSS files
	    $this->template->client_files_head = '<link rel="stylesheet" href="/css/bootstrap.css" type="text/css">
	    									  <link rel="stylesheet" href="/css/signin.css" type="text/css">';
        
       	# Pass data to the view
	    $this->template->content->error = $error; 
        		
		# Render template
        echo $this->template;    
	}
	 
    public function p_signup() {      	   		    
 	    # More data we want stored with the user
	    $_POST['created']  = Time::now();
	    $_POST['modified'] = Time::now();
	    
	    # Check for existing user by email
	    $exists = $this->userObj->confirm_unique_email($_POST['email']);
	    
	    # If user exists, show a prompt to login
	    if ($exists == false){
	    Router::redirect("/users/signup/exists");
	    }
	    	    
		# Encrypt the password  
	    $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);            
	
	    # Create an encrypted token via their email address and a random string
	    $_POST['token'] = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string());
	    
	    # Insert this user into the database
	    $user_id = DB::instance(DB_NAME)->insert('users', $_POST);
	    
	    # Set new user to follow his or herself by default
	    $data = Array('user_id' => $user_id,
                'user_id_followed' => $user_id,
                'created' => Time::now(),
                );
                
        $selffollow = DB::instance(DB_NAME)->insert("users_users", $data);
	    	
	    # Redirect to the login page
	    Router::redirect("/users/login"); 	        
    }

    public function login($error = NULL) {
	    # Set up the view
	    $this->template->content = View::instance("v_users_login");
	    $this->template->title   = "DER | Log In";
	    
	    # Pass in template-specific CSS files
	    $this->template->client_files_head = '<link rel="stylesheet" href="/css/bootstrap.css" type="text/css">
	    									  <link rel="stylesheet" href="/css/signin.css" type="text/css">';
	    
	    # Pass in template-specific JS files									  
	    $this->template->client_files_head .= '<script type="text/javascript" src="/bootstrap/js/alert.js"></script>';
		
	    # Pass data to the view
	    $this->template->content->error = $error;
	
	    # Render the view
	    echo $this->template;
	 }       
	 
	 public function p_login() {        
	    # Sanitize the user entered data to prevent any funny-business (re: SQL Injection Attacks)
	    $_POST = DB::instance(DB_NAME)->sanitize($_POST);
	
	    # Hash submitted password so we can compare it against one in the db
	    $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);
	
	    # Search the db for this email and password
	    # Retrieve the token if it's available
	    $q = "SELECT token 
	        FROM users 
	        WHERE email = '".$_POST['email']."' 
	        AND password = '".$_POST['password']."'";
	
	    $token = DB::instance(DB_NAME)->select_field($q);
	
	    # Login failed
	    if(!$token) {
	        # Note the addition of the parameter "error"
	        Router::redirect("/users/login/error");
	    }
	    
	    # Login passed
	    else {
	        setcookie("token", $token, strtotime('+2 weeks'), '/');
	        Router::redirect("/");
	    } //end else

	}
	
    public function logout() {
        # Generate and save a new token for next login
	    $new_token = sha1(TOKEN_SALT.$this->user->email.Utils::generate_random_string());
	
	    # Create the data array we'll use with the update method
	    # In this case, we're only updating one field, so our array only has one entry
	    $data = Array("token" => $new_token);
	
	    # Do the update
	    DB::instance(DB_NAME)->update("users", $data, "WHERE token = '".$this->user->token."'");
	
	    # Delete their token cookie by setting it to a date in the past - effectively logging them out
	    setcookie("token", "", strtotime('-1 year'), '/');
	
	    # Send them back to the main index.
	    Router::redirect("/");
    }

    public function profile($user_name = NULL) {     	  
    	# Set up the View
    	$this->template->content = View::instance('v_users_profile');
    	$this->template->title = "Profile";
    	
    	$client_files_head = Array(
    	'/css/bootstrap.css', 
    	'css/main.css');
    	
    	$this->template->client_files_head = Utils::load_client_files($client_files_head);
		
		# Pass the data to the View
		$this->template->content->user_name = $user_name;
		
		
		# If user is blank, they're not logged in; redirect them to the login page
	    if(!$this->user) {
	        Router::redirect('/users/login');
	    }
	
	    # If they weren't redirected away, continue:
	
	    # Setup view
	    $this->template->content = View::instance('v_users_profile');
	    $this->template->title   = "Documentary Educational Resources | ".$this->user->first_name."".last_name;
	
	    # Render template
	    echo $this->template;
	}	
	
	public function add_image(){               
        # Upload image, set $filename variable to file name
        $filename = Upload::upload($_FILES, "/uploads/avatars/", array("jpg", "JPG", "jpeg", "JPEG", "png", "PNG", "gif", "GIF"), 
        'avatar-'.$this->user->user_id);
   		     
        # Associate this image with this user
        $_FILES['user_id']  = $this->user->user_id;
        
        # Update $filename to include file path to render full URL
        $filename = "/uploads/avatars/$filename";
        
        # Pass filename to database 
        $data = Array("image"=>$filename);
              
        $q = "WHERE user_id = ".$this->user->user_id;

        # Instantiate
        DB::instance(DB_NAME)->update('users', $data, $q);
        
        $this->template->content = View::instance("v_posts_index");
        
        # Pass the data to the View
		$this->template->user->image;
		      
        # Refresh profile
        Router::redirect('/users/profile');
 	}
 	
 	public function id($user_id) {				
		# Link films to view by database id
		$this->template->content = View::instance('v_users_id');
		
		# Build the query
		$q = 'SELECT *
		   FROM users
		   WHERE user_id =' . $user_id;
	
		# Run the query
	    $user = DB::instance(DB_NAME)->select_row($q);
	
	    # Pass data to the View
	    $this->template->content->user = $user;
	    
	    # Use the DB title as the page title 
		$this->template->title   = "DER | ". $user['first_name']." ".$user['last_name'];
	
	    # Render the View
	    echo $this->template;
	}
 	
 	/*
	public function p_add_bio() {
        # Associate this post with this user
        $_POST['user_id']  = $this->user->user_id;
        
        $q = "WHERE user_id = ".$this->user->user_id;

        # Update
        DB::instance(DB_NAME)->update('users', $_POST, $q);
        
        # Redirect to same page (to refresh)
	    Router::redirect("/users/profile");       
    }
*/


} # end of the class