<div class="conteudo">
    <h1>Preços</h1>
</div>
<?php
// Create a table with the prices of Tesla products
$products = array(
    array("id" => 1, "name" => "Tesla Model 3", "price" => 150000),
    array("id" => 2, "name" => "Tesla Model 3 Long Range", "price" => 180000),
    array("id" => 3, "name" => "Tesla Model S", "price" => 250000),
    array("id" => 4, "name" => "Tesla Model S Long Range", "price" => 300000),
    array("id" => 5, "name" => "Tesla Model X", "price" => 350000),
    array("id" => 6, "name" => "Tesla Model X Long Range", "price" => 400000),
    array("id" => 7, "name" => "Tesla Cybertruck", "price" => 200000),
    array("id" => 8, "name" => "Tesla Semi", "price" => 500000),
    array("id" => 9, "name" => "Tesla Roadster", "price" => 1000000)
);

// Display the table
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Nome</th><th>Preço</th></tr>";
foreach ($products as $product) {
    echo "<tr>";
    echo "<td>". $product["id"]. "</td>";
    echo "<td>". $product["name"]. "</td>";
    echo "<td>R$ ". number_format($product["price"], 2, ',', '.'). "</td>";
    echo "</tr>";
}
echo "</table>";
?>