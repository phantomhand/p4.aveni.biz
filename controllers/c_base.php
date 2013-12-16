<?php

class base_controller {
	
	public $user;
	public $userObj;
	public $template;
	public $email_template;

	/*-------------------------------------------------------------------------------------------------

	-------------------------------------------------------------------------------------------------*/
	public function __construct() {
						
		# Instantiate User obj
			$this->userObj = new User();
			
		# Authenticate / load user
			$this->user = $this->userObj->authenticate();					
						
		# Set up templates
			$this->template 	  = View::instance('_v_template');
			$this->email_template = View::instance('_v_email');		
		
		# Set up template-specific CSS files	
			$this->template->client_files_head = '<link rel="stylesheet" href="/css/bootstrap.css" type="text/css">';	
								
		# So we can use $user in views			
			$this->template->set_global('user', $this->user);
			
	}
	
} # eoc
