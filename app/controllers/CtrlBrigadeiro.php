
<?php
use models\Brigadeiro;
use core\utils\ControllerHandler;


error_reporting(0); // error_reporting(E_ALL);



$idBrigadeiro      = $_REQUEST[1];
$nomeUserBrigadeiro      = $_REQUEST[2];
$comentarioUserBrigadeiro      = $_REQUEST[3];

$action = $_REQUEST[4];

switch ($action) {
    case 'insert':
        if ( isset($idBrigadeiro) && isset($nomeUserBrigadeiro) && isset($comentarioUserBrigadeiro)){
            $brigadeiro=  new Brigadeiro();
            $brigadeiro->populate($idBrigadeiro, $nomeUserBrigadeiro, $comentarioUserBrigadeiro);
            $brigadeiro->save();
            echo json_encode(array("saved" => true, "message" => "Comentário adicionado com Sucesso!"));
            
        }else{
            echo json_encode(array("saved" => false, "message" => "Comentário não adicionado!"));
            
        }
        break;
    case 'update':
        if (isset($idBrigadeiro) && isset($nomeUserBrigadeiro) && isset($comentarioUserBrigadeiro)){
            $brigadeiro=  new Brigadeiro();
            $brigadeiro->populate($idBrigadeiro, $nomeUserBrigadeiro, $comentarioUserBrigadeiro);
            $brigadeiro->save();
            echo json_encode(array("saved" => true, "message" => "Comentário atualizado com Sucesso!"));
            
        }else{
            echo json_encode(array("saved" => false, "message" => "Comentário não atualizado!"));
            
        }
        break;
    case 'delete':
        if ( isset($idBrigadeiro) && isset($nomeUserBrigadeiro) && isset($comentarioUserBrigadeiro)){
            $brigadeiro=  new Brigadeiro();
            $brigadeiro->populate($idBrigadeiro, $nomeUserBrigadeiro, $comentarioUserBrigadeiro);
            $brigadeiro->delete();
            echo json_encode(array("saved" => true, "message" => "Comentário excluído com Sucesso!"));
        }else{
            echo json_encode(array("saved" => false, "message" => "Comentário não excluido!"));
            
        }
        break;
}
?>