
<?php
use models\Mensagem;
use core\utils\ControllerHandler;


error_reporting(0); // error_reporting(E_ALL);



$idMensagem      = $_REQUEST[1];
$idUsuario    = $_REQUEST[2];
$emailMsg          = $_REQUEST[3];
$mensagem          = $_REQUEST[4];

$action = $_REQUEST[5];

switch ($action) {
    case 'insert':
        if (isset($emailMsg) && isset($mensagem)){
            $mensagens=  new Mensagem();
            $mensagens->populate($idMensagem, $idUsuario, $emailMsg, $mensagem);
            $mensagens->save();
            echo json_encode(array("saved" => true, "message" => "Mensagem cadastrado com Sucesso!"));
            
        }else{
            echo json_encode(array("saved" => false, "message" => "Mensagem não cadastrado!"));
            
        }
        break;
    case 'update':
        if (  isset($emailMsg) && isset($mensagem)){
            $mensagens=  new Mensagem();
            $mensagens->populate($idMensagem, $idUsuario, $emailMsg, $mensagem);
            $mensagens->save();
            echo json_encode(array("saved" => true, "message" => "Mensagem atualizado com Sucesso!"));
            
        }else{
            echo json_encode(array("saved" => false, "message" => "UsMensagemuario não atualizado!"));
            
        }
        break;
    case 'delete':
        if ( isset($idMensagem) && isset($idUsuario) && isset($emailMsg) && isset($mensagem)){
            $mensagens=  new Mensagem();
            $mensagens->populate($idMensagem, $idUsuario, $emailMsg, $mensagem);
            $mensagens->delete();
            echo json_encode(array("saved" => true, "message" => "Mensagem excluído com Sucesso!"));
        }else{
            echo json_encode(array("saved" => false, "message" => "Mensagem não excluido!"));
            
        }
        break;
}
?>