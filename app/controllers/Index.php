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
    public function yeniMakale() {
        $this->load->view("yeniMakale");
        
    }
    public function makaleKaydet() {
        $baslik = $_POST['baslik'];
        $icerik = $_POST['icerik'];
        $etiket = $_POST['etiket'];
         $index_model = $this->load->model("index_model");
         $data =  array(
            "baslik" => $baslik,
            "icerik" => $icerik,
            "etiket" => $etiket
            
        );
         $result = $index_model->makaleKaydet($data);
        if ($result == 1){
            $data["mesaj"] = array(
                "mesaj"=>"Kayıt işlemi tamam"
            );       
            
        }else{
            $data["mesaj"] = array(
                "mesaj"=>"Kayıt işlemi yapılırken bir hata oluştu"
            );
           
        }
           $this->load->view("yeniMakale",$data);
    }

}
?>

