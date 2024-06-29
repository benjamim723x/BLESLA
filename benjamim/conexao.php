<?php
    $servidor= "localhost";
    $usuario = "root";
    $senha = "";
    $base = "gestao";

    $con = mysqli_connect($servidor, $usuario, $senha, $base);

    if (!$con){
        echo "Erro ao conectar ao banco";
    }
    // else{
    //     echo "Conectou ao banco";
    // }
?>
