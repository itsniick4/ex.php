<?php
$alunos = [
    ["nome" => "Ana", "idade" => 18, "nota" => 8.5],
    ["nome" => "Bruno", "idade" => 20, "nota" => 7.0],
    ["nome" => "Carlos", "idade" => 19, "nota" => 9.2],
    ["nome" => "Daniela", "idade" => 21, "nota" => 6.8],
    ["nome" => "Eduardo", "idade" => 22, "nota" => 5.9],
    ["nome" => "Fernanda", "idade" => 18, "nota" => 7.8],
    ["nome" => "Gabriel", "idade" => 20, "nota" => 8.1],
    ["nome" => "Helena", "idade" => 19, "nota" => 9.0],
    ["nome" => "Igor", "idade" => 23, "nota" => 6.4],
    ["nome" => "Juliana", "idade" => 21, "nota" => 7.5],
    ["nome" => "Lucas", "idade" => 20, "nota" => 8.9],
    ["nome" => "Mariana", "idade" => 18, "nota" => 9.4],
];


usort($alunos, function($a, $b) {
    return $b['nota'] <=> $a['nota'];
});

$somaNotas = 0;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício III - Tabela de Alunos</title>
    <style>
        table { width: 50%; border-collapse: collapse; margin-top: 20px; font-family: sans-serif; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
        .reprovado { color: white; background-color: #e74c3c; } /* Cor vermelha para notas < 7 */
    </style>
</head>
<body>

    <h1>-------Lista de Alunos--------</h1>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Nota Final</th>
                <th>Status</th>
            </tr>
        </thead>
        
        <tbody>
            <?php foreach ($alunos as $aluno): ?>
                <?php 
                    $somaNotas += $aluno['nota']; 
                    $status = $aluno['nota'] >= 7 ? "Aprovado" : "Reprovado";
                    $classe = $aluno['nota'] < 7 ? "reprovado" : "";
                ?>
                <tr class="<?= $classe ?>">
                    <td><?= $aluno['nome'] ?></td>
                    <td><?= $aluno['idade'] ?></td>
                    <td><?= number_format($aluno['nota'], 1) ?></td>
                    <td><?= $status ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?php 
        $media = $somaNotas / count($alunos); 
    ?>
    <p><strong>Média Geral da Turma:</strong> <?= number_format($media, 2) ?></p>

</body>
</html>