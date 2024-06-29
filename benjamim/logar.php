<?php
require_once 'conexao.php';
if (isset($_POST['logar'])) {
    $usuario = $_POST['user'];
    $senha = $_POST['pass'];
    $senha1 = md5($senha);
    $sql = "select * from usuarios where usuario = '$usuario' and senha = '$senha1'";

    $resultado = mysqli_query($con, $sql);
    
    if (mysqli_num_rows($resultado) == 1) {
        echo 'entrei';
        header('location:pagina2.php');
    } else {
        echo 'Usuario ou senha incorretos';
    }
}
