<?php

namespace  models;

use core\database\DBQuery;
use core\utils\Sanitize;
use core\database\Where;


class Brigadeiro {
    
    private $idBrigadeiro;
    private $nomeUserBrigadeiro;
    private $comentarioUserBrigadeiro;
    
    private $dbquery;
    
    function __construct(){
        $tableName  = "hostdeprojetos_sennaconfeitaria.brigadeiro";
        $fieldsName = "idBrigadeiro, nomeUserBrigadeiro, comentarioUserBrigadeiro";
        $primaryKeys  = "idBrigadeiro";
        $this->dbquery = new DBQuery($tableName, $fieldsName, $primaryKeys);
    }
    
    public function toArray(){
        return array(
            $this->getIdBrigadeiro(),
            $this->getNomeUserBrigadeiro(),
            $this->getComentarioUserBrigadeiro(),
        );
    }
    
    public function toString(){
        return("\n\t\t\t\t". implode(", ",$this->toArray()));
    }
    
    
    function listAll(){
        return( $this->dbquery->select());
        
    }
    public function save() {
        if($this->getIdBrigadeiro () == 0){
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
    
    
    public function listBrigadeiros($where = null) : array {
        $brigadeiro = array();
        $rSet = null;
        if ( $where == null){
            $rSet = $this->dbquery->select();
        }else{
            $rSet = $this->dbquery->selectFiltered($where);
        }
        
        if ($rSet) {
            foreach ($rSet as $linha) {
                $idBrigadeiro       = $linha['idBrigadeiro'];
                $nomeUserBrigadeiro           = $linha['nomeUserBrigadeiro'];
                $comentarioUserBrigadeiro           = $linha['comentarioUserBrigadeiro'];
                
                $brigadeiro[] = new Brigadeiro($idBrigadeiro , $nomeUserBrigadeiro, $comentarioUserBrigadeiro);                
            }
        } else {
            $brigadeiro[] = array();
            echo  "{'msg':'Nenhum brigadeiro encontrado.\n'}";
        }
        return( $brigadeiro );
    }
    
    
    public function delete() {
        if($this->getIdBrigadeiro () != 0){
            return( $this->dbquery->delete($this->toArray()));
        }
    }
    
    function populate( $idBrigadeiro, $nomeUserBrigadeiro, $comentarioUserBrigadeiro) {
        
        
        $this->setIdBrigadeiro ( $idBrigadeiro );
        $this->setNomeUserBrigadeiro( $nomeUserBrigadeiro );
        $this->setComentarioUserBrigadeiro( $comentarioUserBrigadeiro );
    }

	public function setIdBrigadeiro ( $idBrigadeiro  ){
		 $this->idBrigadeiro  = $idBrigadeiro ;
	}

	public function getIdBrigadeiro (){
		  return( $this->idBrigadeiro  );
	}

	public function setNomeUserBrigadeiro( $nomeUserBrigadeiro ){
		 $this->nomeUserBrigadeiro = $nomeUserBrigadeiro;
	}

	public function getNomeUserBrigadeiro(){
		  return( $this->nomeUserBrigadeiro );
	}


    public function getComentarioUserBrigadeiro()
    {
        return $this->comentarioUserBrigadeiro;
    }

    public function setComentarioUserBrigadeiro($comentarioUserBrigadeiro)
    {
        $this->comentarioUserBrigadeiro = $comentarioUserBrigadeiro;

        return $this;
    }
}


?>