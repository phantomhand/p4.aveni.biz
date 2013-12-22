<?php

class index_controller extends base_controller {
	
	/*-------------------------------------------------------------------------------------------------

	-------------------------------------------------------------------------------------------------*/
	public function __construct() {
		parent::__construct();
	} 
		
	/*-------------------------------------------------------------------------------------------------
	Accessed via http://localhost/index/index/
	-------------------------------------------------------------------------------------------------*/
	public function index() {
		
		# Any method that loads a view will commonly start with this
		# First, set the content of the template with a view file
			$this->template->content = View::instance('v_index_index');
			
		# Now set the <title> tag
			$this->template->title = "Documentary Educational Resources | Quality Non-Fiction, Documentary, and Ethnographic Films from Around the World";
	
		# CSS/JS includes
			/*
			$client_files_head = Array("");
	    	$this->template->client_files_head = Utils::load_client_files($client_files);
	    	
	    	$client_files_body = Array("");
	    	$this->template->client_files_body = Utils::load_client_files($client_files_body);
			*/ 
			
		# Build the query
	    $q = 'SELECT
			films.unique_id, 
			films.title,
			films.alt_title,
			films.director_1,
			films.director_2,
			films.producer_1,
			films.producer_2,
			films.color,
			films.running_time_1,
			films.running_time_2,
			films.year_released,
			films.image
				FROM films
				ORDER BY films.title ASC';
	
	    # Run the query
	    $films = DB::instance(DB_NAME)->select_rows($q);
	
	    # Pass data to the View
	    $this->template->content->films = $films;  
    	
    	# Pass in template-specific CSS files
   		$this->template->client_files_head = '<link rel="stylesheet" href="/css/bootstrap.css" type="text/css">
   											  <link rel="stylesheet" href="/css/jumbotron.css" type="text/css">';
	      					     		
		# Render the view
			echo $this->template;

	} # End of method
	
} # End of class
