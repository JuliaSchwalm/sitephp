<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
       <link rel="stylesheet" href="../css/consulta.css">
    <title>Consulta de dados</title>
</head>
<body>
        <div class="container">
        <h2>Listagem de Alunos</h2>
<?php
require_once '../conexao.php';

    session_start();
    $_SESSION['mat'] = $_POST["matricula"];
    $query = $conexao->query("SELECT * FROM cadastro_aluno");

     while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    if ($_SESSION['mat'] == $row['matricula'] ){
            echo '<div class="row">';
                echo '<label>Matrícula:</label><span>' . $row['matricula'] . '</span><br>';
                echo '<label>Nome:</label><span>' . $row['nome'] . '</span><br>';
                echo '<label>Curso:</label><span>' . $row['curso'] . '</span><br>';
                echo '<label>Cidade:</label><span>' . $row['cidade'] . '</span><br>';
                echo '<label>Idade:</label><span>' . $row['idade'] . '</span><br>';
                echo '</div>';
                 session_destroy();
                break; 
               
     } 
    }
    
// Verificar se a matrícula não foi encontrada
if (!isset($row) || $_SESSION['mat'] != $row['matricula']) {
    echo '<script>alert("Matrícula não cadastrada")</script>';
    $url = "matricula.html";
    header("refresh:0; url={$url}");
}
?>
</div>
</body>
</html>

