<div class="conteudo">
    <h1>Serviços</h1>
</div>

<?php
// servicos.php

// Configuration
$nome_empresa = "BLESLA";
$descricao_empresa = "A BLESLA é uma empresa especializada em serviços para veículos elétricos.";

// Services array
$servicos = array(
    array("nome" => "Manutenção Preventiva", "descricao" => "Manutenção regular para garantir o desempenho e segurança do seu veículo."),
    array("nome" => "Reparo de Baterias", "descricao" => "Reparo e substituição de baterias para garantir a autonomia do seu veículo."),
    array("nome" => "Instalação de Carregadores", "descricao" => "Instalação de carregadores de veículos elétricos para sua casa ou empresa."),
    array("nome" => "Ajustes e Customizações", "descricao" => "Ajustes e customizações para melhorar o desempenho e aparência do seu veículo."),
    array("nome" => "Inspeção e Diagnóstico", "descricao" => "Inspeção e diagnóstico para identificar problemas e realizar reparos necessários.")
);

?>

<!-- HTML Content -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços - <?= $nome_empresa ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
        <section class="pagina">
            <h1>Serviços</h1>
            <p><?= $descricao_empresa ?></p>
            <ul class="servicos">
                <?php foreach ($servicos as $servico) { ?>
                    <li>
                        <h2><?= $servico["nome"] ?></h2>
                        <p><?= $servico["descricao"] ?></p>
                    </li>
                <?php } ?>
            </ul>
        </section>
    </main>
    <footer>
        <p>&copy; <?= date("Y") ?> <?= $nome_empresa ?></p>
    </footer>
</body>
</html>