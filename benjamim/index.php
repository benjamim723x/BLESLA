<?php

require_once "topo.php";

?>

<?php

if (isset($_GET['p'])){
    $p = $_GET['p'];



    switch($p){
        case 1:
            require_once "meio.php";
            break;
        case 2:
            require_once "servicos.php";
            break;
        case 3:
            require_once "preco.php";
            break;
        case 5:
            require_once "fale.php";
            break;
        case 6:
             require_once "produtos.php";
            break;
        case 7:
            require_once "cadastro.php";
            break;
        case 8:
            require_once "entrar.php";
            break;
    }
}
else{
    require_once "meio.php";
}

?>

<?php

require_once "rodape.php";

?>