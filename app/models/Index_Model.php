<?php

class Index_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function isimListele() {
        $sql = "select * from test";
      
        return $this->db->select($sql);
        
         
    }

}
