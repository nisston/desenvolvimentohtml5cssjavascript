<!DOCTYPE html>
<html>
<head>
    <title>Novo Usuário</title>
    <link rel="stylesheet" href="./css/style.css">
    <!-- Font Awesome para ícones (se desejar usar ícones aqui também) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <h1>Cadastro de Usuário</h1>

    <form action="inserir.php" method="POST">
        <label>
            Nome:
            <input type="text" name="nome" required>
        </label>
        <label>
            Email:
            <input type="email" name="email" required>
        </label>
        <button type="submit"><i class="fas fa-save"></i> Salvar</button>
    </form>

    <br>
    <a href="index.php" class="voltar"><i class="fas fa-arrow-left"></i> Voltar para a lista</a>
</body>
</html>
