
<?php
use models\Produto;
use core\utils\ControllerHandler;


error_reporting(0); // error_reporting(E_ALL);



$idProduto       = $_REQUEST[1];
$nomeProduto    = $_REQUEST[2];
$descricao          = $_REQUEST[3];
$preco          = $_REQUEST[4];
$ativo          = $_REQUEST[5];

$action = $_REQUEST[6];

switch ($action) {
    case 'insert':
        if ( isset($nomeProduto) && isset($descricao) && isset($preco) && isset($ativo)){
            $produto=  new Produto();
            $produto->populate($idProduto, $nomeProduto, $descricao, $preco, $ativo);
            $produto->save();
            echo json_encode(array("saved" => true, "message" => "Produto cadastrado com Sucesso!"));
            
        }else{
            echo json_encode(array("saved" => false, "message" => "Produto não cadastrado!"));
            
        }
        break;
    case 'update':
        if ( isset($nomeProduto) && isset($descricao) && isset($preco) && isset($ativo)){
            $produto=  new Produto();
            $produto->populate($idProduto, $nomeProduto, $descricao, $preco, $ativo);
            $produto->save();
            echo json_encode(array("saved" => true, "message" => "Produto atualizado com Sucesso!"));
            
        }else{
            echo json_encode(array("saved" => false, "message" => "Produto não atualizado!"));
            
        }
        break;
    case 'delete':
        if ( isset($idProduto ) && isset($nomeProduto) && isset($descricao) && isset($preco) && isset($ativo)){
            $produto=  new Produto();
            $produto->populate($idProduto, $nomeProduto, $descricao, $preco, $ativo);
            $produto->delete();
            echo json_encode(array("saved" => true, "message" => "Produto excluído com Sucesso!"));
        }else{
            echo json_encode(array("saved" => false, "message" => "Produto não excluido!"));
            
        }
        break;
}
?>