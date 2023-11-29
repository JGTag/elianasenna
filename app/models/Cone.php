<?php

namespace  models;

use core\database\DBQuery;
use core\utils\Sanitize;
use core\database\Where;


class Cone {
    
    private $idCone;
    private $nomeUserCone;
    private $comentarioUserCone;
    
    private $dbquery;
    
    function __construct(){
        $tableName  = "hostdeprojetos_sennaconfeitaria.cone";
        $fieldsName = "idCone, nomeUserCone, comentarioUserCone";
        $primaryKeys  = "idCone";
        $this->dbquery = new DBQuery($tableName, $fieldsName, $primaryKeys);
    }
    
    public function toArray(){
        return array(
            $this->getIdCone(),
            $this->getNomeUserCone(),
            $this->getComentarioUserCone(),
        );
    }
    
    public function toString(){
        return("\n\t\t\t\t". implode(", ",$this->toArray()));
    }
    
    
    function listAll(){
        return( $this->dbquery->select());
        
    }
    public function save() {
        if($this->getIdCone () == 0){
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
    
    
    public function listCones($where = null) : array {
        $pedido = array();
        $rSet = null;
        if ( $where == null){
            $rSet = $this->dbquery->select();
        }else{
            $rSet = $this->dbquery->selectFiltered($where);
        }
        
        if ($rSet) {
            foreach ($rSet as $linha) {
                $idCone       = $linha['idCone'];
                $nomeUserCone           = $linha['nomeUserCone'];
                $comentarioUserCone           = $linha['comentarioUserCone'];
                
                $pedido[] = new Pedido($idCone , $nomeUserCone, $comentarioUserCone);                
            }
        } else {
            $pedido[] = array();
            echo  "{'msg':'Nenhum comentário encontrado.\n'}";
        }
        return( $pedido );
    }
    
    
    public function delete() {
        if($this->getIdCone () != 0){
            return( $this->dbquery->delete($this->toArray()));
        }
    }
    
    function populate( $idCone, $nomeUserCone, $comentarioUserCone) {
        
        
        $this->setIdCone ( $idCone );
        $this->setNomeUserCone( $nomeUserCone );
        $this->setComentarioUserCone( $comentarioUserCone );
    }

	public function setIdCone ( $idCone  ){
		 $this->idCone  = $idCone ;
	}

	public function getIdCone (){
		  return( $this->idCone  );
	}

	public function setNomeUserCone( $nomeUserCone ){
		 $this->nomeUserCone = $nomeUserCone;
	}

	public function getNomeUserCone(){
		  return( $this->nomeUserCone );
	}


    public function getComentarioUserCone()
    {
        return $this->comentarioUserCone;
    }

    public function setComentarioUserCone($comentarioUserCone)
    {
        $this->comentarioUserCone = $comentarioUserCone;

        return $this;
    }
}


?>