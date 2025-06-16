<?php include 'conexao.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Usuários</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/script.js"></script>
    <!-- Font Awesome para ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body>
    <h1>Lista de Usuários</h1>

    <a href="novo.php" class="btn-novo"><i class="fas fa-user-plus"></i>Novo Usuário</a>

    <table>
        <tr><th>Nome</th><th>Email</th><th>Ações</th></tr>
        <?php
        $sql = "SELECT * FROM usuarios";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['nome']}</td>
                    <td>{$row['email']}</td>
                    <td>
                        <a href='editar.php?id={$row['id']}' title='Editar'><i class='fas fa-edit'></i></a>
                        <a href='excluir.php?id={$row['id']}' onclick='return confirmarExclusao()' title='Excluir'><i class='fas fa-trash-alt'></i></a>
                    </td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>
