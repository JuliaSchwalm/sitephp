
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/consulta.css">
    <title>Listagem</title>
</head>
<body>
    <div class="container">
        <h2>Listagem de Usuários</h2>

        <?php
        require_once '../conexao.php';

        try {
            $query = $conexao->query("SELECT * FROM cadastro_usuario");

            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                echo '<div class="row">';
                echo '<label>Id:</label><span>' . $row['id'] . '</span><br>';
                echo '<label>Usuário:</label><span>' . $row['usuario'] . '</span><br>';
                echo '<label>Senha:</label><span>' . $row['senha'] . '</span><br>';
                echo '</div>';
                
                echo '<div class="actions">';
                echo '<a href="alterar_usuario.php?id='. $row['id'] . '">Editar</a>';
                echo ' |  ';
                echo '<a href="deletar_usuario.php?id='. $row['id'] . '">Excluir</a>';
                echo '</div>';
            }
        } catch (PDOException $e) {
            echo "Erro ao consultar dados: " . $e->getMessage();
        }

        ?>
        <br> <a href="../index.php">Voltar</a>
    </div>
</body>
</html>
