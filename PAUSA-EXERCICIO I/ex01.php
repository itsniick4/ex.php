<?php

$carrinho = [

    ["id" => 1, "nome" => "SSD 512GB", "preco" => 280.00, "quantidade" => 1],
    ["id" => 2, "nome" => "Memória RAM 8GB", "preco" => 150.00, "quantidade" => 2],
    ["id" => 3, "nome" => "Cabo HDMI 2.0", "preco" => 25.00, "quantidade" => 4],
    ["id" => 4, "nome" => "Mouse Gamer", "preco" => 120.00, "quantidade" => 1],
    ["id" => 5, "nome" => "Teclado Mecânico", "preco" => 350.00, "quantidade" => 1],
    ["id" => 6, "nome" => "Fonte 600W", "preco" => 420.00, "quantidade" => 1],
    ["id" => 7, "nome" => "HD Externo 1TB", "preco" => 390.00, "quantidade" => 1],
    ["id" => 8, "nome" => "Headset USB", "preco" => 180.00, "quantidade" => 2],
];

$totalGeral = 0;
$totalItens = 0;

echo "<h2>Resumo do Pedido:</h2>";

foreach ($carrinho as $produto) {
    $subtotal = $produto['preco'] * $produto['quantidade'];
    $totalGeral += $subtotal;
    $totalItens += $produto['quantidade'];

    echo "<p><strong>" . $produto['nome'] . "</strong><br>";
    echo "Quantidade: " . $produto['quantidade'] . "<br>";
    echo "Subtotal: R$ " . number_format($subtotal, 2, ',', '.') . "</p>";
}

// Cálculo do desconto de 10% como no exemplo
$desconto = $totalGeral * 0.10;
$totalFinal = $totalGeral - $desconto;

echo "<hr>";
echo "<p>Subtotal da Compra: R$ " . number_format($totalGeral, 2, ',', '.') . "<br>";
echo "Desconto Aplicado (10%): R$ " . number_format($desconto, 2, ',', '.') . "<br>";
echo "<strong>Total Final a Pagar: R$ " . number_format($totalFinal, 2, ',', '.') . "</strong></p>";





?>
