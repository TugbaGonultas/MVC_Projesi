<?php

class Model {
    protected  $db = array();
    public function __construct() {
        $dsn ='mysql:host=localhost;dbname=test';
        $user = 'root';
        $password = '';
        $this->db = new Database($dsn, $user, $password);
    }

}