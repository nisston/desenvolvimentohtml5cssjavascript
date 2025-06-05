<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tabuada com GET</title>
</head>
<body>

<h2>Calculadora de Tabuada</h2>

<form method="get">
    Informe um número: <input type="number" name="numero"><br>
    <input type="submit" value="Calcular">
</form>

<?php
if (isset($_GET["numero"])) {
    $numero = $_GET["numero"];

    // Estrutura condicional
    if ($numero > 0) {
        echo "<h3>Tabuada do $numero</h3>";
        echo "<ul>";

        // Estrutura de repetição
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<li>$numero x $i = $resultado</li>";
        }

        echo "</ul>";
    } else {
        echo "<p>Por favor, informe um número positivo.</p>";
    }
}
?>

</body>
</html>
