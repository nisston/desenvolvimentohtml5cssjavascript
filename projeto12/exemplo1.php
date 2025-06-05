<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exemplo PHP com Condicional e Repetição</title>
</head>
<body>

<h2>Formulário de Cadastro</h2>

<form method="post">
    Nome: <input type="text" name="nome"><br>
    Idade: <input type="number" name="idade"><br>
    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    echo "<h3>Olá, $nome!</h3>";

    // Estrutura condicional
    if ($idade >= 18) {
        echo "<p>Você é maior de idade.</p>";
    } else {
        echo "<p>Você é menor de idade.</p>";
    }

    echo "<h3>Lista de Números:</h3>";
    echo "<ul>";

    // Estrutura de repetição
    for ($i = 1; $i <= 5; $i++) {
        echo "<li>Número $i</li>";
    }

    echo "</ul>";
}
?>

</body>
</html>
