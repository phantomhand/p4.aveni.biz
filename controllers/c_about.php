<?php
class about_controller extends base_controller {

    public function __construct() {
        parent::__construct();
    } 

    public function index() {
            $this->template->content = View::instance('v_about');
            $this->template->title   = "DER | About";

        # Render template
            echo $this->template;
    }
}#end of class
?>