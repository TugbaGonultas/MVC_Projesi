<?php
class Index extends Controller {

    public function __construct() {
        parent::__construct();
    }
    public function anasayfa() {
        $this->load->view("anasayfa");
        
    }
    public function isimListele(){
       $index_model = $this->load->model("index_model");
       $data["isimListele"] = $index_model->isimListele();
    
       $this->load->view("isimListele",$data);
    }

}
?>

