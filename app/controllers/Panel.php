<?php

class Panel extends Controller{
    public function __construct() {
        parent::__construct();
        
        Session::init();
        if(Session::get("login") == false){
            Session::destroy();
            header("Location: ". SITE_URL ."/admin/login");
        }
       
        
    }
}
