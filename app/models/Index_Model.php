<?php

class Index_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function isimListele() {
        $sql = "select * from test";
      
        return $this->db->select($sql);
        
         
    }
    public function makaleKaydet($data){
        return $this->db->insert("makaleler", $data);
    }
    
//    public function guncelle() {
////            $data = array(
////                "baslik"=>"Güncel Başlık",
////                "icerik"=>"Güncel İçerik",
////                "etiket"=>"Güncel Etiket"
////            );
//      return $this->db->delete("makaleler", "id=4");
//        
//    }
    
    public function makaleListele() {
        $sql = "SELECT *FROM makaleler";
        return $this->db->select($sql);
        
    }


}
