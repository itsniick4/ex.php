<?php

$estadosBrasil = [
    'AC' => 'Acre',
    'AL' => 'Alagoas',
    'AP' => 'Amapá',
    'AM' => 'Amazonas',
    'BA' => 'Bahia',
    'CE' => 'Ceará',
    'DF' => 'Distrito Federal',
    'ES' => 'Espírito Santo',
    'GO' => 'Goiás',
    'MA' => 'Maranhão',
    'MT' => 'Mato Grosso',
    'MS' => 'Mato Grosso do Sul',
    'MG' => 'Minas Gerais',
    'PA' => 'Pará',
    'PB' => 'Paraíba',
    'PR' => 'Paraná',
    'PE' => 'Pernambuco',
    'PI' => 'Piauí',
    'RJ' => 'Rio de Janeiro',
    'RN' => 'Rio Grande do Norte',
    'RS' => 'Rio Grande do Sul',
    'RO' => 'Rondônia',
    'RR' => 'Roraima',
    'SC' => 'Santa Catarina',
    'SP' => 'São Paulo',
    'SE' => 'Sergipe',
    'TO' => 'Tocantins'


];

?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício II - Select Dinâmico</title>
</head>
<body>

    <label for="estados">Selecione um Estado:</label>
    <select name="estados">
    <option value="">-- Escolha --</option>
    <?php foreach ($estadosBrasil as $sigla => $nome): ?>
        <option value="<?php echo $sigla; ?>"><?php echo $nome; ?></option>
    <?php endforeach; ?>
</select>

</body>
</html>

