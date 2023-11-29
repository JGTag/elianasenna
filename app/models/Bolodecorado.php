<?php

namespace  models;

use core\database\DBQuery;
use core\utils\Sanitize;
use core\database\Where;


class Bolodecorado {
    
    private $idBoloDecorado;
    private $nomeUserBolo;
    private $comentarioUserBolo;

    
    private $dbquery;
    
    function __construct(){
        $tableName  = "hostdeprojetos_sennaconfeitaria.bolodecorado";
        $fieldsName = "idBoloDecorado, nomeUserBolo, comentarioUserBolo";
        $primaryKeys  = "idBoloDecorado";
        $this->dbquery = new DBQuery($tableName, $fieldsName, $primaryKeys);
    }
    
    public function toArray(){
        return array(
            $this->getIdBoloDecorado(),
            $this->getNomeUserBolo(),
            $this->getComentarioUserBolo()
        );
    }
    
    public function toString(){
        return("\n\t\t\t\t". implode(", ",$this->toArray()));
    }
    
    
    
    function listAll(){
        return( $this->dbquery->select());
        
    }
    public function save() {
        if($this->getIdBoloDecorado() == 0){
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
    
    
    public function listBolodecorados($where = null) : array {
        $bolodecorado = array();
        $rSet = null;
        if ( $where == null){
            $rSet = $this->dbquery->select();
        }else{
            $rSet = $this->dbquery->selectFiltered($where);
        }
        
        if ($rSet) {
            foreach ($rSet as $linha) {
                $idBoloDecorado      = $linha['idBoloDecorado'];
                $nomeUserBolo           = $linha['nomeUserBolo'];
                $comentarioUserBolo           = $linha['comentarioUserBolo'];
                
                $bolodecorado[] = new Bolodecorado($idBoloDecorado, $nomeUserBolo, $comentarioUserBolo);                }
        } else {
            $bolodecorado[] = array();
            echo  "{'msg':'Nenhum bolo decorado encontrado.\n'}";
        }
        return( $bolodecorado );
    }
    
    
    public function delete() {
        if($this->getIdBoloDecorado() != 0){
            return( $this->dbquery->delete($this->toArray()));
        }
    }
    
    function populate( $idBoloDecorado, $nomeUserBolo, $comentarioUserBolo) {
        
        
        $this->setIdBoloDecorado	( $idBoloDecorado );
        $this->setNomeUserBolo( $nomeUserBolo );
        $this->setComentarioUserBolo( $comentarioUserBolo );
    }

	public function setIdBoloDecorado	( $idUsuario ){
		 $this->idUsuario = $idUsuario;
	}

	public function getIdBoloDecorado(){
		  return( $this->idUsuario );
	}

	public function setNomeUserBolo( $nomeUsuario ){
		 $this->nomeUsuario = $nomeUsuario;
	}

	public function getNomeUserBolo(){
		  return( $this->nomeUsuario );
	}

	public function setComentarioUserBolo( $email ){
		 $this->email = $email;
	}

	public function getComentarioUserBolo(){
		  return( $this->email );
	}


}


?>