<div class="conteudo">
    <h1>Fale Conosco</h1>
</div>


<?php
// fale_conosco.php

// Configuration
$nome_empresa = "BLESLA";
$email_empresa = "BLESLA@sempre.ly";
$telefone_empresa = "(11) 1234-56789";

// Form submission handler
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    // Send email using PHPMailer or your preferred email library
    // ...

    // Display success message
    $mensagem_sucesso = "Mensagem enviada com sucesso!";
} else {
    $mensagem_sucesso = "";
}

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale Conosco - <?= $nome_empresa ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <main>
        <section class="pagina">
            <h1>Fale Conosco</h1>
            <p>Entre em contato conosco para obter mais informações ou fazer uma sugestão.</p>
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required><br><br>
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required><br><br>
                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" required></textarea><br><br>
                <input type="submit" value="Enviar">
            </form>
            <?php if (!empty($mensagem_sucesso)) { ?>
                <p><?= $mensagem_sucesso ?></p>
            <?php } ?>
        </section>
    </main>
    <footer>
        <p>&copy; <?= date("Y") ?> <?= $nome_empresa ?></p>
    </footer>
</body>
</html>