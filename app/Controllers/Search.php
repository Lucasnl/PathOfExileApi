<?php namespace App\Controllers;


 class Search extends BaseController {
      
    public $dados;
    var $api;
    






  public function SearchAccount(){
    



    if(isset($_GET['nome'])){
    $accountName = $_GET ['nome'];

    $data['data'] = json_decode(@file_get_contents("https://www.pathofexile.com/character-window/get-characters?accountName=".$accountName));

//echo '<pre>' ; print_R(($data['data']));echo '<pre>' ; 
 
  

if ($data['data']==true) {

    echo view('index',$data);
}

else echo '<script type="text/javascript">
alert("Conta Não Encontrada ou Perfil Está Privado");
window.location.href = "/exileApi";
</script>';





}
  }


public function Ajax () {

    $accountName = $_GET ['nome'];

    $data['data'] = json_decode(@file_get_contents("https://www.pathofexile.com/character-window/get-characters?accountName=".$accountName));

    
  

    echo view('searchAjax',$data);

}
}
