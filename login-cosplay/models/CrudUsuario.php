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
    public function getUsuario()
    {
        //conexao
        $this->conexao = DBConnection::getConexao();


        $sql = 'select * from usuario';

        $resultado = $this->conexao->query($sql);

        $usuarios = $resultado->fetchAll(PDO::FETCH_ASSOC);

        $listaCategorias = [];

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
        $sql = "select * from usuario where id_usuario =" . $id;
        $resultado = $this->conexao->query($sql);
        //resultset do BD
        $categoria = $resultado->fetch(PDO::FETCH_ASSOC);


        $listaUsuarios[] = new Usuario($usuario['email'], $usuario['nome'], $usuario['senha'], $usuario['apelido'], $usuario['celular'], $usuario['id_usuario'], $usuario['data_nasc']);

        return $listaUsuarios;

    }


    public function insertUsuario() //cadastrar usuario
    {


        $this->conexao = DBConnection::getConexao();


        $nome= $_POST['nome'];
        $email= $_POST['email'];
        $senha= $_POST['senha'];
        $celular= $_POST['celular'];
        $apelido= $_POST['apelido'];
        $data_nasc= $_POST['data_nasc'];


        $sql="INSERT INTO usuarios (nome,email,senha,celular,apelido,data_nasc) VALUES ('$nome' , '$email' , '$senha' , '$celular' , '$apelido' , '$data_nasc') ";


//        $dados[] = $id_usuario->getNome();
//        $dados[] = $id_usuario->getApelido();
//        $dados[] = $id_usuario->getCelular();
//        $dados[] = $id_usuario->getDataNasc();
//        $dados[] = $id_usuario->getEmail();
//        $dados[] = $id_usuario->getSenha();
//        $sql = "insert into usuarios (nome,email,senha,apelido,celular,data_nasc) values ('')";
        $this->conexao->exec($sql);


    }

//
//    public function updateUsuario(Usuario $id_usuario)
//    {
//
//        $this->conexao = DBConnection::getConexao();
//        $nome = $id->getNome();
//        $email= $email->getEmail();
//
//
//        $sql = "update usuario set nome= '$nome',email='$email',senha='$senha',apelido='$apelido',celular='$celular',data_nasc='$data_nasc' where id_usuario='$id_usuario'";
//        $this->conexao->exec($sql);
//
//
//    }


    public function deleteUsuario($id_usuario) //excluir conta
    {

        $this->conexao = DBConnection::getConexao();
        $sql = "delete from usuario where id_usuario=" . $id_usuario;
        $this->conexao->exec($sql);

    }
}

////$novacat= new Categoria(null,'alpaca','são fofas');
//$crud = new CrudUsuario();
////$crud->insertCategoria($novacat);
//$crud->deleteUsuario(9);
//

}