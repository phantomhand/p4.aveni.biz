<?php
class films_controller extends base_controller {

    public function __construct() {
        parent::__construct();
    }

    public function add() {
        # Setup view
        $this->template->content = View::instance('v_films_add');
        $this->template->title   = "New Film";
        
        # Pass in template-specific CSS files
	    $this->template->client_files_head = '<link rel="stylesheet" href="/css/bootstrap.css" type="text/css">
	    	<link rel="stylesheet" href="/css/signin.css" type="text/css">';

        # Render template
        echo $this->template;
    }

    public function p_add() {
        # Insert
        # Note we didn't have to sanitize any of the $_POST data because we're using the insert method which does it for us
        DB::instance(DB_NAME)->insert('films', $_POST);
        
        # Redirect to same page (to refresh)
	    Router::redirect("/films".$_POST["unique_id"]);      
    }
    
    public function p_delete() {
        # Delete this post
	    $where_condition = "WHERE unique_id =".$_POST["unique_id"];
		DB::instance(DB_NAME)->delete('films', $where_condition);
        
        # Redirect to same page (to refresh)
	    Router::redirect("/films");      
    }   
    
	public function index() {	
	    # Set up the View
	    $this->template->content = View::instance('v_films_index');
	    $this->template->title   = "Films";
	
	    # Build the query
	    $q = 'SELECT
	    	films.unique_id, 
            films.title,
            films.alt_title,
            films.director_1,
            films.director_2,
            films.director_3,
            films.director_4,
            films.producer_1,
            films.producer_2,
            films.color,
            films.running_time_1,
            films.running_time_2,
            films.year_released,
            films.description,
            films.inst_price,
            films.home_price,
            films.image
        FROM films
        ORDER BY films.title ASC';
	
	    # Run the query
	    $films = DB::instance(DB_NAME)->select_rows($q);
	
	    # Pass data to the View
	    $this->template->content->films = $films;
	
	    # Render the View
	    echo $this->template;
	}
	
		public function users() {
	
	    # Set up the View
	    $this->template->content = View::instance("v_films_users");
	    $this->template->title   = "Users";
	
	    # Build the query to get all the users
	    $q = "SELECT *
	        FROM users
	        ORDER by last_name";
	
	    # Execute the query to get all the users. 
	    # Store the result array in the variable $users
	    $users = DB::instance(DB_NAME)->select_rows($q);
	
	    # Build the query to figure out what connections does this user already have? 
	    # I.e. who are they following
	    $q = "SELECT * 
	        FROM users_users
	        WHERE user_id = ".$this->user->user_id;
	
	    # Execute this query with the select_array method
	    # select_array will return our results in an array and use the "users_id_followed" field as the index.
	    # This will come in handy when we get to the view
	    # Store our results (an array) in the variable $connections
	    $connections = DB::instance(DB_NAME)->select_array($q, 'user_id_followed');
	
	    # Pass data (users and connections) to the view
	    $this->template->content->users       = $users;
	    $this->template->content->connections = $connections;
	
	    # Render the view
	    echo $this->template;
	}
	
		public function follow($user_id_followed) {
	
	    # Prepare the data array to be inserted
	    $data = Array(
	        "created" => Time::now(),
	        "user_id" => $this->user->user_id,
	        "user_id_followed" => $user_id_followed
	        );
	
	    # Do the insert
	    DB::instance(DB_NAME)->insert('users_users', $data);
	
	    # Send them back
	    Router::redirect("/posts/users");
	
	}
	
		public function unfollow($user_id_followed) {
	
	    # Delete this connection
	    $where_condition = 'WHERE user_id = '.$this->user->user_id.' AND user_id_followed = '.$user_id_followed;
	    DB::instance(DB_NAME)->delete('users_users', $where_condition);
	
	    # Send them back
	    Router::redirect("/posts/users");
	
	}
}