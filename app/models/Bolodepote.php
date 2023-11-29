<?php

namespace  models;

use core\database\DBQuery;
use core\utils\Sanitize;
use core\database\Where;


class Bolodepote {
    
    private $idBoloPote;
    private $nomeUserPote;
    private $comentarioUserPote;

    
    private $dbquery;
    
    function __construct(){
        $tableName  = "hostdeprojetos_sennaconfeitaria.bolodepote";
        $fieldsName = "idBoloPote, nomeUserPote, comentarioUserPote";
        $primaryKeys  = "idBoloPote";
        $this->dbquery = new DBQuery($tableName, $fieldsName, $primaryKeys);
    }
    
    public function toArray(){
        return array(
            $this->getIdBoloPote(),
            $this->getNomeUserPote(),
            $this->getComentarioUserPote()
        );
    }
    
    public function toString(){
        return("\n\t\t\t\t". implode(", ",$this->toArray()));
    }
    
    
    
    function listAll(){
        return( $this->dbquery->select());
        
    }
    public function save() {
        if($this->getIdBoloPote() == 0){
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
    
    
    public function listBolodepotes($where = null) : array {
        $bolodepote = array();
        $rSet = null;
        if ( $where == null){
            $rSet = $this->dbquery->select();
        }else{
            $rSet = $this->dbquery->selectFiltered($where);
        }
        
        if ($rSet) {
            foreach ($rSet as $linha) {
                $idBoloPote      = $linha['idBoloPote'];
                $nomeUserPote           = $linha['nomeUserPote'];
                $comentarioUserPote           = $linha['comentarioUserPote'];
                
                $bolodepote[] = new Bolodepote($idBoloPote, $nomeUserPote, $comentarioUserPote);                }
        } else {
            $bolodepote[] = array();
            echo  "{'msg':'Nenhum bolo de pote encontrado.\n'}";
        }
        return( $bolodepote );
    }
    
    
    public function delete() {
        if($this->getIdBoloPote() != 0){
            return( $this->dbquery->delete($this->toArray()));
        }
    }
    
    function populate( $idBoloPote, $nomeUserPote, $comentarioUserPote) {
        
        
        $this->setIdBoloPote	( $idBoloPote );
        $this->setNomeUserPote( $nomeUserPote );
        $this->setComentarioUserPote( $comentarioUserPote );
    }

	public function setIdBoloPote	( $idUsuario ){
		 $this->idUsuario = $idUsuario;
	}

	public function getIdBoloPote(){
		  return( $this->idUsuario );
	}

	public function setNomeUserPote( $nomeUsuario ){
		 $this->nomeUsuario = $nomeUsuario;
	}

	public function getNomeUserPote(){
		  return( $this->nomeUsuario );
	}

	public function setComentarioUserPote( $email ){
		 $this->email = $email;
	}

	public function getComentarioUserPote(){
		  return( $this->email );
	}


}


?>