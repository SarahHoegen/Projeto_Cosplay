<?php



        require_once '../models/CrudUsuario.php';
        //Ação principal - LISTAR TODAS AS CATEGORIAS
        if(isset($_GET['acao'])){
            $acao=$_GET['acao'];
        }else{
            $acao='index';
        }
        switch ($acao){


            case 'index':
                echo "VOCE ESCOLHEU INDEX";
                $crud=new CrudUsuario();
                $categorias=$crud->getUsuarios();
                echo ('<pre>');
                //exibir
                include '../views/templates/cabecalho.php';
                include '../views/index.php';
                include '../views/templates/rodape.php';
                break;


            case 'inserir':
                if(!isset($_POST['cadastrar'])) {
                    include '../views/templates/cabecalho.php';
                    include '../views/inserir.php';
                    include '../views/templates/rodape.php';
                }else{
                    //gravar dados digitados no BD
                    $nome = $_POST['nome'];
                    $descricao = $_POST['descricao'];
                    $novo_usu = new Usuario($email, $nome, $senha,$celular,$apelido,$data_nasc);
                    $crud = new CrudUsuario();
                    $crud->insertUsuario();
                    header('Location: usuarios.php');
                }
                break;


            case 'exibir':
                $id= $_GET['id'];
                $crud=new CrudUsuario();
                $categoria=$crud->getUsuario($id);
                var_dump($categoria);
                include '../views/categorias/exibir.php';
                break;


            case 'alterar':
                if(!isset($_POST['gravar'])) {
                    include '../views/templates/cabecalho.php';
                    include '../views/inserir.php';
                    include '../views/templates/rodape.php';
                }else{
                    //gravar dados digitados no BD
                    $nome = $_POST['nome'];
                    $descricao = $_POST['descricao'];
                    $novo_usu = new Usuario($email, $nome, $senha,$celular,$apelido,$data_nasc);
                    $crud = new CrudUsuario();
                    $crud->insertUsuario($novo_usu);
                    header('Location: categorias.php');
                }
                break;


            default:
                echo"Acao inválida";
        }