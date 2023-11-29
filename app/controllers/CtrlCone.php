
<?php
use models\Cone;
use core\utils\ControllerHandler;


error_reporting(0); // error_reporting(E_ALL);



$idCone      = $_REQUEST[1];
$nomeUserCone      = $_REQUEST[2];
$comentarioUserCone      = $_REQUEST[3];

$action = $_REQUEST[4];

switch ($action) {
    case 'insert':
        if ( isset($idCone) && isset($nomeUserCone) && isset($comentarioUserCone)){
            $cone=  new Cone();
            $cone->populate($idCone, $nomeUserCone, $comentarioUserCone);
            $cone->save();
            echo json_encode(array("saved" => true, "message" => "Comentário adicionado com Sucesso!"));
            
        }else{
            echo json_encode(array("saved" => false, "message" => "Comentário não adicionado!"));
            
        }
        break;
    case 'update':
        if (isset($idCone) && isset($nomeUserCone) && isset($comentarioUserCone)){
            $cone=  new Cone();
            $cone->populate($idCone, $nomeUserCone, $comentarioUserCone);
            $cone->save();
            echo json_encode(array("saved" => true, "message" => "Comentário atualizado com Sucesso!"));
            
        }else{
            echo json_encode(array("saved" => false, "message" => "Comentário não atualizado!"));
            
        }
        break;
    case 'delete':
        if ( isset($idCone) && isset($nomeUserCone) && isset($comentarioUserCone)){
            $cone=  new Cone();
            $cone->populate($idCone, $nomeUserCone, $comentarioUserCone);
            $cone->delete();
            echo json_encode(array("saved" => true, "message" => "Comentário excluído com Sucesso!"));
        }else{
            echo json_encode(array("saved" => false, "message" => "Comentário não excluido!"));
            
        }
        break;
}
?>