<?php

namespace  models;

use core\database\DBQuery;
use core\utils\Sanitize;
use core\database\Where;


class Pedido {
    
    private $idPedido;
    private $nomeCliente;
    private $idProduto;
    private $valorTotal;
    private $valorInicial;
    private $valorFinal;
    private $dataEntrega;
    private $status;

    
    private $dbquery;
    
    function __construct(){
        $tableName  = "hostdeprojetos_sennaconfeitaria.pedidos";
        $fieldsName = "idPedido, nomeCliente, idProduto, valorTotal, valorInicial, valorFinal, dataEntrega, status";
        $primaryKeys  = "idPedido";
        $this->dbquery = new DBQuery($tableName, $fieldsName, $primaryKeys);
    }
    
    public function toArray(){
        return array(
            $this->getIdPedido(),
            $this->getNomeCliente(),
            $this->getIdProduto(),
            $this->getValorTotal(),
            $this->getValorInicial(),
            $this->getValorFinal(),
            $this->getDataEntrega(),
            $this->getStatus()
        );
    }
    
    public function toString(){
        return("\n\t\t\t\t". implode(", ",$this->toArray()));
    }
    
    
    function listAll(){
        return( $this->dbquery->select());
        
    }
    public function save() {
        if($this->getIdPedido () == 0){
            return( $this->dbquery->insert($this->toArray()));
        }else{
            return( $this->dbquery->update($this->toArray()));
        }
    }
    
    public function list($where) {
        if ( $where == ""){
            $rSet = $this->dbquery->select();
        }else{
            $rSet = $this->dbquery->selectFiltered($where);
        }
        return( $rSet );
    }
    
    
    public function listPedidos($where = null) : array {
        $pedido = array();
        $rSet = null;
        if ( $where == null){
            $rSet = $this->dbquery->select();
        }else{
            $rSet = $this->dbquery->selectFiltered($where);
        }
        
        if ($rSet) {
            foreach ($rSet as $linha) {
                $idPedido       = $linha['idPedido'];
                $nomeCliente           = $linha['nomeCliente'];
                $idProduto           = $linha['idProduto'];
                $valorTotal           = $linha['valorTotal'];
                $valorInicial           = $linha['valorInicial'];
                $valorFinal           = $linha['valorFinal'];
                $dataEntrega           = $linha['dataEntrega'];
                $status           = $linha['status'];
                
                $pedido[] = new Pedido($idPedido , $nomeCliente, $idProduto, $valorTotal, $valorInicial, $valorFinal, $dataEntrega, $status);                
            }
        } else {
            $pedido[] = array();
            echo  "{'msg':'Nenhum pedido encontrado.\n'}";
        }
        return( $pedido );
    }
    
    
    public function delete() {
        if($this->getIdPedido () != 0){
            return( $this->dbquery->delete($this->toArray()));
        }
    }
    
    function populate( $idPedido, $nomeCliente, $idProduto, $valorTotal, $valorInicial, $valorFinal, $dataEntrega, $status) {
        
        
        $this->setIdPedido ( $idPedido );
        $this->setNomeCliente( $nomeCliente );
        $this->setIdProduto( $idProduto );
        $this->setValorTotal( $valorTotal );
        $this->setValorInicial( $valorInicial );
        $this->setValorFinal( $valorFinal );
        $this->setDataEntrega( $dataEntrega );
        $this->setStatus( $status );
    }

	public function setIdPedido ( $idPedido  ){
		 $this->idPedido  = $idPedido ;
	}

	public function getIdPedido (){
		  return( $this->idPedido  );
	}

	public function setNomeCliente( $nomeCliente ){
		 $this->nomeCliente = $nomeCliente;
	}

	public function getNomeCliente(){
		  return( $this->nomeCliente );
	}

	public function setIdProduto( $idProduto ){
		 $this->idProduto = $idProduto;
	}

	public function getIdProduto(){
		  return( $this->idProduto );
	}

	public function setValorTotal( $valorTotal ){
		 $this->valorTotal = $valorTotal;
	}

	public function getValorTotal(){
		  return( $this->valorTotal );
	}
	
	public function setValorInicial( $valorInicial ){
	    $this->valorInicial = $valorInicial;
	}
	
	public function getValorInicial(){
	    return( $this->valorInicial );
	}

    public function setValorFinal( $valorFinal ){
	    $this->valorFinal = $valorFinal;
	}
	
	public function getvalorFinal(){
	    return( $this->valorFinal );
	}

    public function setDataEntrega( $dataEntrega ){
	    $this->dataEntrega = $dataEntrega;
	}
	
	public function getDataEntrega(){
	    return( $this->dataEntrega );
	}

    public function setStatus( $status ){
	    $this->status = $status;
	}
	
	public function getStatus(){
	    return( $this->status );
	}

}


?>