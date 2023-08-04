
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/consulta.css">
    <title>Listagem</title>
</head>
<body>
    <div class="container">
        <h2>Listagem de Alunos</h2>
        <?php

        require_once '../conexao.php';
        try {
            // Consulta para obter todos os dados da tabela
            $query = $conexao->query("SELECT * FROM cadastro_aluno");

            // Exibir os resultados
            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                echo '<div class="row">';
                echo '<label>Matrícula:</label><span>' . $row['matricula'] . '</span><br>';
                echo '<label>Nome:</label><span>' . $row['nome'] . '</span><br>';
                echo '<label>Curso:</label><span>' . $row['curso'] . '</span><br>';
                echo '<label>Cidade:</label><span>' . $row['cidade'] . '</span><br>';
                echo '<label>Idade:</label><span>' . $row['idade'] . '</span><br>';
                echo '</div>';
                
                echo '<div class="actions">';
                echo '<a href="alterar_aluno.php?id=' . $row['matricula'] . '">Editar</a>';
                echo ' |  ';
                echo '<a href="deletar_aluno.php?id=' . $row['matricula'] . '">Excluir</a>';
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
