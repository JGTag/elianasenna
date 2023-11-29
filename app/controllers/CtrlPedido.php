
<?php
use models\Pedido;
use core\utils\ControllerHandler;


error_reporting(0); // error_reporting(E_ALL);



$idPedido      = $_REQUEST[1];
$nomeCliente    = $_REQUEST[2];
$idProduto         = $_REQUEST[3];
$valorTotal          = $_REQUEST[4];
$valorInicial          = $_REQUEST[5];
$valorFinal          = $_REQUEST[6];
$dataEntrega          = $_REQUEST[7];
$status          = $_REQUEST[8];

$action = $_REQUEST[9];

switch ($action) {
    case 'insert':
        if ( isset($idPedido) && isset($nomeCliente) && isset($idProduto) && isset($valorTotal) && isset($valorInicial) && isset($valorFinal) && isset($dataEntrega) && isset($status)){
            $pedido=  new Pedido();
            $pedido->populate($idPedido, $nomeCliente, $idProduto, $valorTotal, $valorInicial, $valorFinal, $dataEntrega, $status);
            $pedido->save();
            echo json_encode(array("saved" => true, "message" => "Pedido cadastrado com Sucesso!"));
            
        }else{
            echo json_encode(array("saved" => false, "message" => "Pedido não cadastrado!"));
            
        }
        break;
    case 'update':
        if (isset($nomeCliente) && isset($valorTotal) && isset($valorInicial) && isset($valorFinal) && isset($dataEntrega) && isset($status)){
            $pedido=  new Pedido();
            $pedido->populate($idPedido, $nomeCliente, $idProduto, $valorTotal, $valorInicial, $valorFinal, $dataEntrega, $status);
            $pedido->save();
            echo json_encode(array("saved" => true, "message" => "Pedido atualizado com Sucesso!"));
            
        }else{
            echo json_encode(array("saved" => false, "message" => "Pedido não atualizado!"));
            
        }
        break;
    case 'delete':
        if ( isset($idPedido) && isset($nomeCliente) && isset($idProduto) && isset($valorTotal) && isset($valorInicial) && isset($valorFinal) && isset($dataEntrega) && isset($status)){
            $pedido=  new Pedido();
            $pedido->populate($idPedido, $nomeCliente, $idProduto, $valorTotal, $valorInicial, $valorFinal, $dataEntrega, $status);
            $pedido->delete();
            echo json_encode(array("saved" => true, "message" => "Pedido excluído com Sucesso!"));
        }else{
            echo json_encode(array("saved" => false, "message" => "Pedido não excluido!"));
            
        }
        break;
}
?>