<?php

namespace  models;

use core\database\DBQuery;
use core\utils\Sanitize;
use core\database\Where;


class Mensagem {
    
    private $idMensagem;
    private $idUsuario;
    private $emailMsg;
    private $mensagem;
    
    
    private $dbquery;
    
    function __construct(){
        $tableName  = "hostdeprojetos_sennaconfeitaria.mensagem";
        $fieldsName = "idMensagem, idUsuario, emailMsg, mensagem";
        $primaryKeys  = "idMensagem";
        $this->dbquery = new DBQuery($tableName, $fieldsName, $primaryKeys);
    }
    
    public function toArray(){
        return array(
            $this->getIdMensagem(),
            $this->getIdUsuario(),
            $this->getEmailMsg(),
            $this->getMensagem()
        );
    }
    
    public function toString(){
        return("\n\t\t\t\t". implode(", ",$this->toArray()));
    }
    
    
    
    function listAll(){
        return( $this->dbquery->select());
        
    }
    public function save() {
        if($this->getIdMensagem() == 0){
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
    
    
    public function listMensagens($where = null) : array {
        $mensagens = array();
        $rSet = null;
        if ( $where == null){
            $rSet = $this->dbquery->select();
        }else{
            $rSet = $this->dbquery->selectFiltered($where);
        }
        
        if ($rSet) {
            foreach ($rSet as $linha) {
                $idMensagem      = $linha['idMensagem'];
                $idUsuario           = $linha['idUsuario'];
                $emailMsg           = $linha['emailMsg'];
                $mensagem           = $linha['mensagem'];
                
                $mensagens[] = new Mensagem($idMensagem, $idUsuario, $emailMsg, $mensagem);                }
        } else {
            $mensagens[] = array();
            echo  "{'msg':'Nenhuma mensagem encontrado.\n'}";
        }
        return( $mensagens );
    }
    
    
    public function delete() {
        if($this->getIdMensagem() != 0){
            return( $this->dbquery->delete($this->toArray()));
        }
    }
    
    function populate( $idMensagem, $idUsuario, $emailMsg, $mensagem) {
        
        
        $this->setIdMensagem( $idMensagem );
        $this->setIdUsuario( $idUsuario );
        $this->setEmailMsg( $emailMsg );
        $this->setMensagem( $mensagem );
    }
    
    public function setIdMensagem( $idMensagem ){
        $this->idMensagem = $idMensagem;
    }
    
    public function getIdMensagem(){
        return( $this->idMensagem );
    }
    
    public function setIdUsuario( $idUsuario ){
        $this->idUsuario = $idUsuario;
    }
    
    public function getIdUsuario(){
        return( $this->idUsuario );
    }
    
    public function setEmailMsg( $emailMsg ){
        $this->emailMsg = $emailMsg;
    }
    
    public function getEmailMsg(){
        return( $this->emailMsg );
    }
    
    public function setMensagem( $mensagem ){
        $this->mensagem = $mensagem;
    }
    
    public function getMensagem(){
        return( $this->mensagem );
    }
    
}


?>