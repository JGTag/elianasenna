<?php

namespace  models;

use core\database\DBQuery;
use core\utils\Sanitize;
use core\database\Where;


class Produto {
    
    private $idProduto;
    private $nomeProduto;
    private $descricao;
    private $preco;
    private $ativo;

    
    private $dbquery;
    
    function __construct(){
        $tableName  = "hostdeprojetos_sennaconfeitaria.produto";
        $fieldsName = "idProduto, nomeProduto, descricao, preco, ativo";
        $primaryKeys  = "idProduto";
        $this->dbquery = new DBQuery($tableName, $fieldsName, $primaryKeys);
    }
    
    public function toArray(){
        return array(
            $this->getIdProduto(),
            $this->getNomeProduto(),
            $this->getDescricao(),
            $this->getPreco(),
            $this->getAtivo()
        );
    }
    
    public function toString(){
        return("\n\t\t\t\t". implode(", ",$this->toArray()));
    }
    
    
    function listAll(){
        return( $this->dbquery->select());
        
    }
    public function save() {
        if($this->getIdProduto () == 0){
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
    
    
    public function listProdutos($where = null) : array {
        $produto = array();
        $rSet = null;
        if ( $where == null){
            $rSet = $this->dbquery->select();
        }else{
            $rSet = $this->dbquery->selectFiltered($where);
        }
        
        if ($rSet) {
            foreach ($rSet as $linha) {
                $idProduto       = $linha['idProduto'];
                $nomeProduto           = $linha['nomeProduto'];
                $descricao           = $linha['descricao'];
                $preco           = $linha['preco'];
                $ativo           = $linha['ativo'];
                
                $produto[] = new Produto($idProduto , $nomeProduto, $descricao, $preco, $ativo);                }
        } else {
            $produto[] = array();
            echo  "{'msg':'Nenhum produto encontrado.\n'}";
        }
        return( $produto );
    }
    
    
    public function delete() {
        if($this->getIdProduto () != 0){
            return( $this->dbquery->delete($this->toArray()));
        }
    }
    
    function populate( $idProduto , $nomeProduto, $descricao, $preco, $ativo) {
        
        
        $this->setIdProduto ( $idProduto );
        $this->setNomeProduto( $nomeProduto );
        $this->setDescricao( $descricao );
        $this->setPreco( $preco );
        $this->setAtivo( $ativo );
    }

	public function setIdProduto ( $idProduto  ){
		 $this->idProduto  = $idProduto ;
	}

	public function getIdProduto (){
		  return( $this->idProduto  );
	}

	public function setNomeProduto( $nomeProduto ){
		 $this->nomeProduto = $nomeProduto;
	}

	public function getNomeProduto(){
		  return( $this->nomeProduto );
	}

	public function setDescricao( $descricao ){
		 $this->descricao = $descricao;
	}

	public function getDescricao(){
		  return( $this->descricao );
	}

	public function setPreco( $preco ){
		 $this->preco = $preco;
	}

	public function getPreco(){
		  return( $this->preco );
	}
	
	public function setAtivo( $ativo ){
	    $this->ativo = $ativo;
	}
	
	public function getAtivo(){
	    return( $this->ativo );
	}

}


?>