<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 13/04/18
 * Time: 10:06
 */

class Usuario
{

    private $nome;
    private $email;
    private $senha;
    private $celular;
    private $apelido;
    private $data_nasc;
    private $id_usuario;



    public function __construct($email, $nome, $senha,$celular,$apelido,$data_nasc,$id_usuario){
        $this->email=$email;
        $this->nome=$nome;
        $this->senha=$senha;
        $this->celular=$celular;
        $this->apelido=$apelido;
        $this->data_nasc=$data_nasc;
        $this->id_usuario=$id_usuario;

    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * @param mixed $celular
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;
    }

    /**
     * @return mixed
     */
    public function getApelido()
    {
        return $this->apelido;
    }

    /**
     * @param mixed $apelido
     */
    public function setApelido($apelido)
    {
        $this->apelido = $apelido;
    }

    /**
     * @return mixed
     */
    public function getDataNasc()
    {
        return $this->data_nasc;
    }

    /**
     * @param mixed $data_nasc
     */
    public function setDataNasc($data_nasc)
    {
        $this->data_nasc = $data_nasc;
    }
    /**
     * @return mixed
     */

    public function getid($id_usuario)
    {
        return $this->$id_usuario;
    }

    /**
     * @param mixed $data_nasc
     */
    public function setid($id_usuario)
    {
        $this->id_usuario=$id_usuario;
    }
    /**
     * @return mixed
     */








}