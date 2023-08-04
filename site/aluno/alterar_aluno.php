<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href = "../style.css">
    <title>Alterar dados</title>
</head>
<body>
    <?php
require_once '../conexao.php';

    $matricula = $_GET['id'];

    $query = $conexao->query("SELECT * FROM cadastro_aluno WHERE matricula = $matricula");

    $usuario = $query->fetch(PDO::FETCH_ASSOC);

    $matricula = $usuario['matricula'];
    $nome = $usuario['nome'];
    $curso = $usuario['curso'];
    $cidade = $usuario['cidade'];
    $idade = $usuario['idade'];

    ?>
    <form action="env_alterar_aluno.php" method="post">
    <fieldset>
    <legend>Editar dados:</legend>
    <label> Nome: <input type="text" name="nome" value="<?php echo $nome; ?>" /></label><br>
    <label>   Curso: <input type="text" name="curso" value="<?php echo $curso; ?>"/></label><br>
    <label>   Cidade: <input type="text" name="cidade" value="<?php echo $cidade; ?>" /></label><br>
    <label>   Idade: <input type="number" name="idade" value="<?php echo $idade; ?>" /></label><br>
    <input type="hidden" name="matricula" value="<?php echo $matricula; ?>">
    <button>Enviar</button><br>
    </fieldset>
</form>






    
</body>
</html>