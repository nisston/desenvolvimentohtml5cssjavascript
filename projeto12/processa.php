<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>

<?php
if (isset($_GET["nome"]) && isset($_GET["idade"])) {
    $nome = $_GET["nome"];
    $idade = $_GET["idade"];

    echo "<h3>Olá, $nome!</h3>";

    // Estrutura condicional
    if ($idade >= 18) {
        echo "<p>Você é maior de idade.</p>";
    } else {
        echo "<p>Você é menor de idade.</p>";
    }

    echo "<h3>Números de 1 a 5:</h3>";
    echo "<ul>";

    // Estrutura de repetição
    for ($i = 1; $i <= 5; $i++) {
        echo "<li>Número $i</li>";
    }

    echo "</ul>";
} else {
    echo "<p>Dados incompletos. Por favor, volte e preencha o formulário.</p>";
}
?>

</body>
</html>
