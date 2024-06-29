<?php
    require_once 'conexao.php';

    if(isset($_POST['cadastrar'])){
        $nome = $_POST['nome'];
        $login = $_POST['login'];
        $nivel = $_POST['nivel'];
        $senha1 = $_POST['senha1'];
        $senha = md5($senha1); // senha criptografada

        //montar o sql para inserir informações
        $sql = "insert into USUARIOS (nomeCompleto, usuario, nivel, senha, dataAlteracao) values ";
        $sql .= "('$nome', '$login', $nivel, '$senha', now())";
        $resultado = mysqli_query($con, $sql);

        if ($resultado){
            echo 'Registro Cadastrado com sucesso';
        }
        else{
            echo 'Erro ao cadastrar: '.mysqli_error();
        }
        
    }