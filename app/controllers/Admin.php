<?php

class Admin extends Controller {

    public function __construct() {
        parent::__construct();
    }
    public function login() {
        $this->load->view("admin/LoginForm");
    }
    public function runLogin() {
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        //veritabanı işlemleri başarılı.
        
        Session :: init();
        
        Session ::set("login", true);
        Session::set("username", $username);
        
        header("Location:". SITE_URL ."/panel");
    }
    
    public function logout() {
        Session::init();
        Session::destroy();
        
        header("Location:". SITE_URL ."/admin/login");
        
    }
}
