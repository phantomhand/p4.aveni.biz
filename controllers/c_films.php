<?php
class films_controller extends base_controller {

    public function __construct() {
        parent::__construct();
    }

    public function add() {
        # Setup view
        $this->template->content = View::instance('v_films_add');
        $this->template->title   = "Add New Film";
        
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



	public function id($unique_id) {				
		# Link films to view by database id
		$this->template->content = View::instance('v_films_id');
		
		# Build the query
		$q = 'SELECT *
		   FROM films
		   WHERE unique_id =' . $unique_id;
	
		# Run the query
	    $film = DB::instance(DB_NAME)->select_row($q);
	
	    # Pass data to the View
	    $this->template->content->film = $film;
	
		# Use the DB title as the page title 
		$this->template->title   = "DER Film | ". $film['title'];
		
	    # Render the View
	    echo $this->template;
	}

} # end of the class