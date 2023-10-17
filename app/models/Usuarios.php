<?php
namespace models;

use core\database\DBQuery;
use core\database\Where;

class Usuario{
    
    private $idUsuario;
    private $email;
    private $senha;
    private $idNivelUsuario;
    private $nome;
    private $cpf;
    private $endereco;
    private $bairro;
    private $cidade;
    private $uf;
    private $cep;
    private $telefone;
    private $foto;
    private $ativo;
    
    
    private $dbquery = null;
    
    function __construct() {
        $tableName   = "lojinha.usuarios";
        $fieldsNames = "idUsuario,email,senha,idNivelUsuario,nome,cpf,endereco,bairro,cidade,uf,cep,telefone,foto,ativo";
        $primaryKeys = "idUsuario";
        $this->dbquery = new DBQuery($tableName, $fieldsNames, $primaryKeys);
    }
    
    function toArray() {
        return(
            array(
                $this->getIdUsuario(),
                $this->getEmail(),
                $this->getSenha(),
                $this->getIdNivelUsuario(),
                $this->getNome(),
                $this->getCpf(),
                $this->getEndereco(),
                $this->getBairro(),
                $this->getCidade(),
                $this->getUf(),
                $this->getCep(),
                $this->getTelefone(),
                $this->getFoto(),
                $this->getAtivo()
            )
            );
    }
    
    function listAll(){
        return( $this->dbquery->select());
        
    }
    
    function save() {
        if($this->getIdUsuario() > 0 ){
            $this->dbquery->update($this->toArray());
        }else{
            $this->dbquery->insert($this->toArray());
        }
    }
    function delete() {
        if($this->getIdUsuario() > 0 ){
            $this->dbquery->delete($this->toArray());
        }
    }
    
    function checkLogin($email, $senha) {
        $where = new Where();
        $where->addCondition("AND", "email", "=", $email);
        $where->addCondition("AND", "senha", "=", $senha);
        $rSet =  $this->dbquery->selectWhere($where);
        if ( $rSet->rowCount() == 1 ){
            return (true);
        }else{
            return (false);
        }
    }
    
    
    function populate($idUsuario, $email, $senha, $idNivelUsuario, $nome, $cpf, $endereco, $bairro, $cidade, $uf, $cep, $telefone, $foto, $ativo) {
        $this->setIdUsuario($idUsuario);
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->setIdNivelUsuario($idNivelUsuario);
        $this->setNome($nome);
        $this->setCpf($cpf);
        $this->setEndereco($endereco);
        $this->setBairro($bairro);
        $this->setCidade($cidade);
        $this->setUf($uf);
        $this->setCep($cep);
        $this->setTelefone($telefone);
        $this->setFoto($foto);
        $this->setAtivo($ativo);
    }
    
    public function getIdUsuario(){
        return $this->idUsuario;
    }
    
    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
        return $this;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function setEmail($email){
        $this->email = $email;
        return $this;
    }
    
    public function getSenha(){
        return $this->senha;
    }
    
    public function setSenha($senha){
        $this->senha = $senha;
        return $this;
    }
    
    public function getIdNivelUsuario(){
        return $this->idNivelUsuario;
    }
    
    public function setIdNivelUsuario($idNivelUsuario){
        $this->idNivelUsuario = $idNivelUsuario;
        return $this;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }
    
    public function getCpf(){
        return $this->cpf;
    }
    
    public function setCpf($cpf){
        $this->cpf = $cpf;
        return $this;
    }
    
    public function getEndereco(){
        return $this->endereco;
    }
    
    public function setEndereco($endereco){
        $this->endereco = $endereco;
        return $this;
    }
    
    public function getBairro(){
        return $this->bairro;
    }
    
    public function setBairro($bairro){
        $this->bairro = $bairro;
        return $this;
    }
    
    public function getCidade(){
        return $this->cidade;
    }
    
    public function setCidade($cidade){
        $this->cidade = $cidade;
        return $this;
    }
    
    public function getUf(){
        return $this->uf;
    }
    
    public function setUf($uf){
        $this->uf = $uf;
        return $this;
    }
    
    public function getCep(){
        return $this->cep;
    }
    
    public function setCep($cep){
        $this->cep = $cep;
        return $this;
    }
    
    public function getTelefone(){
        return $this->telefone;
    }
    
    public function setTelefone($telefone){
        $this->telefone = $telefone;
        return $this;
    }
    
    public function getFoto(){
        return $this->foto;
    }
    
    public function setFoto($foto){
        $this->foto = $foto;
        return $this;
    }
    
    public function getAtivo(){
        return $this->ativo;
    }
    
    public function setAtivo($ativo){
        $this->ativo = $ativo;
        return $this;
    }
    
}

