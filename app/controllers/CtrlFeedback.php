
<?php
use models\Feedback;
use core\utils\ControllerHandler;


error_reporting(0); // error_reporting(E_ALL);



$idFeedback      = $_REQUEST[1];
$idUsuario    = $_REQUEST[2];
$idProduto         = $_REQUEST[3];
$comentario          = $_REQUEST[4];

$action = $_REQUEST[5];

switch ($action) {
    case 'insert':
        if ( isset($idUsuario) && isset($idProduto) && isset($comentario)){
            $feedback=  new Feedback();
            $feedback->populate($idFeedback, $idUsuario, $idProduto, $comentario);
            $feedback->save();
            echo json_encode(array("saved" => true, "message" => "Feedback cadastrado com Sucesso!"));
            
        }else{
            echo json_encode(array("saved" => false, "message" => "Feedback não cadastrado!"));
            
        }
        break;
    case 'update':
        if ( isset($comentario)){
            $feedback=  new Feedback();
            $feedback->populate($idFeedback, $idUsuario, $idProduto, $comentario);
            $feedback->save();
            echo json_encode(array("saved" => true, "message" => "Feedback atualizado com Sucesso!"));
            
        }else{
            echo json_encode(array("saved" => false, "message" => "Feedback não atualizado!"));
            
        }
        break;
    case 'delete':
        if ( isset($idFeedback) && isset($idUsuario) && isset($idProduto) && isset($comentario)){
            $feedback=  new Feedback();
            $feedback->populate($idFeedback, $idUsuario, $idProduto, $comentario);
            $feedback->delete();
            echo json_encode(array("saved" => true, "message" => "Feedback excluído com Sucesso!"));
        }else{
            echo json_encode(array("saved" => false, "message" => "Feedback não excluido!"));
            
        }
        break;
}
?>