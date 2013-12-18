<?php
class admin_controller extends base_controller {

    public function __construct() {
        parent::__construct();
    } 

    public function index() {
            $this->template->content = View::instance('v_admin');
            $this->template->title   = "Admin Panel";

        # Render template
            echo $this->template;
    }
}#end of class
?>