<?php

namespace  models;

use core\database\DBQuery;
use core\utils\Sanitize;
use core\database\Where;


class Usuario {
    
    private $idUsuario;
    private $nomeUsuario;
    private $email;
    private $senha;

    
    private $dbquery;
    
    function __construct(){
        $tableName  = "hostdeprojetos_sennaconfeitaria.usuario";
        $fieldsName = "idUsuario, nomeUsuario, email, senha";
        $primaryKeys  = "idUsuario";
        $this->dbquery = new DBQuery($tableName, $fieldsName, $primaryKeys);
    }
    
    public function toArray(){
        return array(
            $this->getIdUsuario(),
            $this->getNomeUsuario(),
            $this->getEmail(),
            $this->getSenha()
        );
    }
    
    public function toJson()
    {
        return (json_encode($this->toArray()));
    }
    
    
    public function toString(){
        return("\n\t\t\t\t". implode(", ",$this->toArray()));
    }
    
    
    
    function listAll(){
        return( $this->dbquery->select());
        
    }
    public function save() {
        if($this->getIdUsuario() == 0){
            $this->configurarSenha($this->getSenha());
            return( $this->dbquery->insert($this->toArray()));
        }else{
            return( $this->dbquery->update($this->toArray()));
        }
    }
    
    public function configurarSenha($senha)
    {
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }
    
    public function verificarSenha($senha)
    {
        return password_verify($senha, $this->senha);
    }
    
    
    
    public static function authenticateUser($email, $senha)
    {
        $usuario = new Usuario();
        $result = $usuario->listByField('email', $email); // Utiliza um novo método listByField
        
        if (!empty($result)) {
            $userData = $result[0];
            $hashedPassword = isset($userData['senha']) ? $userData['senha'] : '';
            
            error_log('Email digitado: ' . $email);
            error_log('Senha digitada: ' . $senha);
            error_log('Hash armazenado: ' . $hashedPassword);
            
            if (!empty($hashedPassword) && $usuario->verificarSenha($senha)) {
                return true; // Autenticação bem-sucedida
            } else {
                error_log('A senha fornecida não coincide com o hash armazenado.');
            }
        } else {
            error_log('Usuário não encontrado para o e-mail fornecido.');
        }
        
        return false; // Autenticação falhou
    }
    
    public function listByField($field, $value)
    {
        $where = (new Where())->addCondition('AND', $field, '=', $value);
        $result = $this->dbquery->selectWhere($where);
        
        if (!empty($result)) {
            $userData = $result[0];
            $this->populate($userData['idUsuario'], $userData['nomeUsuario'], $userData['email'], $userData['senha']);
        }
        
        return $result;
    }
    
    public function list($where) {
        if ( $where == ""){
            $rSet = $this->dbquery->select();
        }else{
            $rSet = $this->dbquery->selectFiltered($where);
        }
        return( $rSet );
    }
    
    
    public function listUsuarios($where = null) : array {
        $usuario = array();
        $rSet = null;
        if ( $where == null){
            $rSet = $this->dbquery->select();
        }else{
            $rSet = $this->dbquery->selectFiltered($where);
        }
        
        if ($rSet) {
            foreach ($rSet as $linha) {
                $idUsuario      = $linha['idUsuario'];
                $nomeUsuario           = $linha['nomeUsuario'];
                $email           = $linha['email'];
                $senha           = $linha['senha'];
                
                $usuario[] = new Usuario($idUsuario, $nomeUsuario, $email, $senha);                }
        } else {
            $usuario[] = array();
            echo  "{'msg':'Nenhum usuario encontrado.\n'}";
        }
        return( $usuario );
    }
    
    
    public function delete() {
        if($this->getIdUsuario() != 0){
            return( $this->dbquery->delete($this->toArray()));
        }
    }
    
    function populate( $idUsuario, $nomeUsuario, $email, $senha) {
        
        
        $this->setIdUsuario( $idUsuario );
        $this->setNomeUsuario( $nomeUsuario );
        $this->setEmail( $email );
        $this->setSenha( $senha );
    }

	public function setIdUsuario( $idUsuario ){
		 $this->idUsuario = $idUsuario;
	}

	public function getIdUsuario(){
		  return( $this->idUsuario );
	}

	public function setNomeUsuario( $nomeUsuario ){
		 $this->nomeUsuario = $nomeUsuario;
	}

	public function getNomeUsuario(){
		  return( $this->nomeUsuario );
	}

	public function setEmail( $email ){
		 $this->email = $email;
	}

	public function getEmail(){
		  return( $this->email );
	}

	public function setSenha( $senha ){
		 $this->senha = $senha;
	}

	public function getSenha(){
		  return( $this->senha );
	}

}


?>