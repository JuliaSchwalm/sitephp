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

    $id = $_GET['id'];

    $query = $conexao->query("SELECT * FROM cadastro_usuario WHERE id = $id");

    $user = $query->fetch(PDO::FETCH_ASSOC);

    $id = $user['id'];
    $usuario = $user['usuario'];
    $senha = $user['senha'];

    ?>
    <form action="env_alterar_usuario.php" method="post">
    <fieldset>
    <legend>Editar dados:</legend>
    <label> Usuario: <input type="text" name="usuario" value="<?php echo $usuario; ?>" /></label><br>
    <label>  Senha: <input type="password" name="senha" value="<?php echo $senha; ?>"/></label><br>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <button>Enviar</button><br>
    </fieldset>
</form>

    
</body>
</html>