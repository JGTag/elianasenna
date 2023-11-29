
<?php
use models\Bolodecorado;
use core\utils\ControllerHandler;


error_reporting(0); // error_reporting(E_ALL);



$idBoloDecorado     = $_REQUEST[1];
$nomeUserBolo    = $_REQUEST[2];
$comentarioUserBolo          = $_REQUEST[3];

$action = $_REQUEST[4];

switch ($action) {
    case 'insert':
        if ( isset($nomeUserBolo) && isset($comentarioUserBolo)){
            $bolodecorado=  new Bolodecorado();
            $bolodecorado->populate($idBoloDecorado, $nomeUserBolo, $comentarioUserBolo);
            $bolodecorado->save();
            echo json_encode(array("saved" => true, "message" => "Bolo decorado cadastrado com Sucesso!"));
            
        }else{
            echo json_encode(array("saved" => false, "message" => "Bolo decorado não cadastrado!"));
            
        }
        break;
    case 'update':
        if ( isset($nomeUserBolo) && isset($comentarioUserBolo) ){
            $bolodecorado=  new Bolodecorado();
            $bolodecorado->populate($idBoloDecorado, $nomeUserBolo, $comentarioUserBolo);
            $bolodecorado->save();
            echo json_encode(array("saved" => true, "message" => "Bolo decorado atualizado com Sucesso!"));
            
        }else{
            echo json_encode(array("saved" => false, "message" => "Bolo decorado não atualizado!"));
            
        }
        break;
    case 'delete':
        if ( isset($idBoloDecorado) && isset($nomeUserBolo) && isset($comentarioUserBolo)){
            $bolodecorado=  new Bolodecorado();
            $bolodecorado->populate($idBoloDecorado, $nomeUserBolo, $comentarioUserBolo, $senha);
            $bolodecorado->delete();
            echo json_encode(array("saved" => true, "message" => "Bolo decorado excluído com Sucesso!"));
        }else{
            echo json_encode(array("saved" => false, "message" => "Bolo decorado não excluido!"));
            
        }
        break;
}
?>