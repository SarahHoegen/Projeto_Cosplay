<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 13/04/18
 * Time: 10:14
 */
//

require_once 'DBConnection.php';
require_once 'Usuario.php';

class CrudUsuario
{
    private $conexao;

    //getUsuarios() --retorna uma lista d eobjetos de todas os usuarios
    public function getUsuarios()
    {
        //conexao
        $this->conexao = DBConnection::getConexao();


        $sql = 'select * from usuarios';

        $resultado = $this->conexao->query($sql);

        $usuarios = $resultado->fetchAll(PDO::FETCH_ASSOC);

        $listaUsuarios = [];

        foreach ($usuarios as $usuario) {
            $listaUsuarios[] = new Usuario($usuario['email'], $usuario['nome'], $usuario['senha'], $usuario['apelido'], $usuario['celular'], $usuario['id_usuario'], $usuario['data_nasc']);


        }
        return $listaUsuarios;///select
        //retornar lista de obj
    }

    //getusuario(sarihoef@gmail) --retorna o objeto do usuario correspondente


    public function getUsuario(int $id)
    {
        //CONEXAO AO BD USANDO BDCONNECTION
        $this->conexao = DBConnection::getConexao();

        //SELECT - TRAZ TODOS OS DADOS DE CATEGORIA
        $sql = "select * from usuarios where id_usuario =" . $id;
        $resultado = $this->conexao->query($sql);
        //resultset do BD
        $usuario = $resultado->fetch(PDO::FETCH_ASSOC);


        $lista_usuario = new Usuario($usuario['email'], $usuario['nome'], $usuario['senha'], $usuario['apelido'], $usuario['celular'], $usuario['id_usuario'], $usuario['data_nasc']);

        return $lista_usuario;

    }


    public function insertUsuario(Usuario $usu) //cadastrar usuario
    {


        $this->conexao = DBConnection::getConexao();


//        $nome= $_POST['nome'];
//        $email= $_POST['email'];
//        $senha= $_POST['senha'];
//        $celular= $_POST['celular'];
//        $apelido= $_POST['apelido'];
//        $data_nasc= $_POST['data_nasc'];
//
///
        $dados[] = $usu->getNome();
        $dados[] = $usu->getApelido();
        $dados[] = $usu->getCelular();
        $dados[] = $usu->getData();
        $dados[] = $usu->getEmail();
        $dados[] = $usu->getSenha();


        $sql = "INSERT INTO usuarios (nome,email,senha,celular,apelido,data_nasc) VALUES ('$dados[0]' , '$dados[1]' , '$dados[2]' , '$dados[3]' , '$dados[4]' , '$dados[5]') ";


        $this->conexao->exec($sql);


    }

    public function updateCategoria(Usuario $usu)
    {

        $this->conexao = DBConnection::getConexao();
        $id_usuario = $usu->getId();
        $nome = $usu->getNome();
        $email = $usu->getEmail();
        $senha = $usu->getSenha();
        $celular = $usu->getCelular();
        $apelido = $usu->getApelido();
        $data_nasc = $usu->getData();

        $sql = "update categoria set nome= '$nome',email='$email',senha='$senha',celular='$celular',apelido='$apelido',data_nasc=$data_nasc where id_usuario =$id_usuario";
        try {
            $res = $this->conexao->exec($sql);
            return $res;
        } catch (PDOException $erro) {
            return $erro->getMessage();

        }


    }


    public function deleteUsuario($id_categoria)
    {

        $this->conexao = DBConnection::getConexao();
        $sql = "delete from usuarios where id_usuario=" . $id_usuario;
        echo $sql;
        try {
            $res = $this->conexao->exec($sql);
            return $res;
        } catch (PDOException $erro) {
            return $erro->getMessage();

        }
    }
}
////$novacat= new Categoria(null,'alpaca','são fofas');
//$crud = new CrudUsuario();
////$crud->insertCategoria($novacat);
//$crud->deleteUsuario(9);
//

