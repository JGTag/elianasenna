<?php

namespace models;

use core\database\DBQuery;
use core\utils\Sanitize;
use core\database\Where;


class Feedback {
    
    private $idFeedback;
    private $idUsuario;
    private $idProduto;
    private $comentario;
    
    
    private $dbquery;
    
    function __construct(){
        $tableName  = "hostdeprojetos_sennaconfeitaria.feedback";
        $fieldsName = "idFeedback, idUsuario, idProduto, comentario";
        $primaryKeys  = "idFeedback";
        $this->dbquery = new DBQuery($tableName, $fieldsName, $primaryKeys);
    }
    
    public function toArray(){
        return array(
            $this->getIdFeedback(),
            $this->getIdUsuario(),
            $this->getIdProduto(),
            $this->getComentario()
        );
    }
    
    public function toString(){
        return("\n\t\t\t\t". implode(", ",$this->toArray()));
    }
    
    
    
    function listAll(){
        return( $this->dbquery->select());
        
    }
    public function save() {
        if($this->getIdFeedback() == 0){
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
    
    
    public function listFeedbacks($where = null) : array {
        $feedback = array();
        $rSet = null;
        if ( $where == null){
            $rSet = $this->dbquery->select();
        }else{
            $rSet = $this->dbquery->selectFiltered($where);
        }
        
        if ($rSet) {
            foreach ($rSet as $linha) {
                $idFeedback      = $linha['idFeedback'];
                $idUsuario           = $linha['idUsuario'];
                $idProduto           = $linha['idProduto'];
                $comentario           = $linha['comentario'];
                
                $feedback[] = new Feedback($idFeedback, $idUsuario, $idProduto, $comentario);                }
        } else {
            $feedback[] = array();
            echo  "{'msg':'Nenhum feedback encontrado.\n'}";
        }
        return( $feedback );
    }
    
    
    public function delete() {
        if($this->getIdFeedback() != 0){
            return( $this->dbquery->delete($this->toArray()));
        }
    }
    
    function populate( $idFeedback, $idUsuario, $idProduto, $comentario) {
        
        
        $this->setIdFeedback( $idFeedback );
        $this->setIdUsuario( $idUsuario );
        $this->setIdProduto( $idProduto );
        $this->setComentario( $comentario );
    }
    
    public function setIdFeedback( $idFeedback ){
        $this->idFeedback = $idFeedback;
    }
    
    public function getIdFeedback(){
        return( $this->idFeedback );
    }
    
    public function setIdUsuario( $idUsuario ){
        $this->idUsuario = $idUsuario;
    }
    
    public function getIdUsuario(){
        return( $this->idUsuario );
    }
    
    public function setIdProduto( $idProduto ){
        $this->idProduto = $idProduto;
    }
    
    public function getIdProduto(){
        return( $this->idProduto );
    }
    
    public function setComentario( $comentario ){
        $this->comentario = $comentario;
    }
    
    public function getComentario(){
        return( $this->comentario );
    }
    
}


?>