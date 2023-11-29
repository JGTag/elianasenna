
<?php
use models\Bolodepote;
use core\utils\ControllerHandler;


error_reporting(0); // error_reporting(E_ALL);



$idBoloPote     = $_REQUEST[1];
$nomeUserPote    = $_REQUEST[2];
$comentarioUserPote          = $_REQUEST[3];

$action = $_REQUEST[4];

switch ($action) {
    case 'insert':
        if ( isset($nomeUserPote) && isset($comentarioUserPote)){
            $bolodepote=  new Bolodepote();
            $bolodepote->populate($idBoloPote, $nomeUserPote, $comentarioUserPote);
            $bolodepote->save();
            echo json_encode(array("saved" => true, "message" => "Bolo de pote cadastrado com Sucesso!"));
            
        }else{
            echo json_encode(array("saved" => false, "message" => "Bolo de pote não cadastrado!"));
            
        }
        break;
    case 'update':
        if ( isset($nomeUserPote) && isset($comentarioUserPote) ){
            $bolodepote=  new Bolodepote();
            $bolodepote->populate($idBoloPote, $nomeUserPote, $comentarioUserPote);
            $bolodepote->save();
            echo json_encode(array("saved" => true, "message" => "Bolo de pote atualizado com Sucesso!"));
            
        }else{
            echo json_encode(array("saved" => false, "message" => "Bolo de pote não atualizado!"));
            
        }
        break;
    case 'delete':
        if ( isset($idBoloPote) && isset($nomeUserPote) && isset($comentarioUserPote)){
            $bolodepote=  new Bolodepote();
            $bolodepote->populate($idBoloPote, $nomeUserPote, $comentarioUserPote, $senha);
            $bolodepote->delete();
            echo json_encode(array("saved" => true, "message" => "Bolo de pote excluído com Sucesso!"));
        }else{
            echo json_encode(array("saved" => false, "message" => "Bolo de pote não excluido!"));
            
        }
        break;
}
?>