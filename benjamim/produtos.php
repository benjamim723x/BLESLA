<?php
// produtos.php

// Configuration
$nome_empresa = "BLESLA";
$descricao_empresa = "A BLESLA é uma empresa especializada em produtos para veículos elétricos.";

// Products array
$produtos = array(
    array("nome" => "Carregador Rápido", "imagem" => "https://via.placeholder.com/300x200", "preco" => rand(100, 500)),
    array("nome" => "Bateria de Reposição", "imagem" => "https://via.placeholder.com/300x200", "preco" => rand(500, 1000)),
    array("nome" => "Kit de Acessórios", "imagem" => "https://via.placeholder.com/300x200", "preco" => rand(50, 200)),
    array("nome" => "Pneu de Inverno", "imagem" => "https://via.placeholder.com/300x200", "preco" => rand(200, 500)),
    array("nome" => "Sistema de Navegação", "imagem" => "https://via.placeholder.com/300x200", "preco" => rand(500, 1000)),
    array("nome" => "Capa de Proteção", "imagem" => "https://via.placeholder.com/300x200", "preco" => rand(20, 50)),
    array("nome" => "Kit de Ferramentas", "imagem" => "https://via.placeholder.com/300x200", "preco" => rand(50, 200)),
    array("nome" => "Sensor de Estacionamento", "imagem" => "https://via.placeholder.com/300x200", "preco" => rand(100, 300)),
);

?>

<!-- HTML Content -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - <?= $nome_empresa ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
        <section class="pagina">
            <h1>Produtos</h1>
            <p><?= $descricao_empresa ?></p>
            <div class="produtos">
                <?php foreach ($produtos as $produto) { ?>
                    <div class="produto">
                        <img src="<?= $produto["imagem"] ?>" alt="<?= $produto["nome"] ?>">
                        <h2><?= $produto["nome"] ?></h2>
                        <p>Preço: R$ <?= number_format($produto["preco"], 2, ",", ".") ?></p>
                    </div>
                <?php } ?>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; <?= date("Y") ?> <?= $nome_empresa ?></p>
    </footer>
</body>
</html>