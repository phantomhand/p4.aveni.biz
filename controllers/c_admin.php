<?php
class admin_controller extends base_controller {

    public function __construct() {
        parent::__construct();
    } 

    public function index() {
    	# Make sure user has admin access.
        if($this->user->access_level != 3) {
            # If not, redirect them to the home page
	    	Router::redirect("/");
        }
        
        $this->template->content = View::instance('v_admin');
        $this->template->title   = "Admin Panel";

        # Render template
            echo $this->template;
    }
}#end of class
?>