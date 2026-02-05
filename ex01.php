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

echo "--- Resumo do Carrinho ---\n";



//Momento honestidade. Foreach feito pela IA <3.
foreach ($carrinho as $produto) {
    $subtotal = $produto['preco'] * $produto['quantidade'];
    $totalGeral += $subtotal;
    $totalItens += $produto['quantidade'];

    echo "Produto: " . $produto['nome'] . " | Qtd: " . $produto['quantidade'] . " | Subtotal: R$ " . number_format($subtotal, 2, ',', '.') . "\n";
}

echo "--------------------------\n";
echo "Total de itens no carrinho: " . $totalItens . "\n";
echo "Valor Total a pagar: R$ " . number_format($totalGeral, 2, ',', '.') . "\n";








?>