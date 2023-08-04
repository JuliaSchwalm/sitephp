<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel = "stylesheet" href = "style.css">
</head>

<body>
    <div style="margin: 20px;">
    <form action = "../site/aluno/inserir_aluno.php" method = "post">
    <fieldset>
        <legend>Cadastro Aluno:</legend>
        <label>Nome:<br><input type="text" name="nome" required maxlength="20" /></label><br>
        <label>Curso:<br><input type="text" name="curso" required maxlength="20" /></label><br>
        <label>Cidade:<br><input type="text" name="cidade" required maxlength="20" /></label><br>
        <label>Idade:<br><input type="number" name="idade" required maxlength="20" /></label><br><br>
        <button>Enviar</button><br>

    </fieldset>
   
</form>

<form action = "../site/aluno/consulta_aluno.php" method = "post" style="margin-top: 20px;">
<br><button>Consultar dados aluno</button><br>


    </form>

</div>

<div style="margin: 20px; ">
    <form action = "../site/usuario/inserir_usuario.php" method = "post">
    <fieldset>
        <legend>Cadastro Usuário:</legend>
        <label>Usuário:<br><input type="text" name="usuario" required maxlength="20" /></label><br>
        <label>Senha:<br><input type="password" name="senha" required maxlength="20" /></label><br>
        <button>Enviar</button><br>

    </fieldset>
   
</form>
<form action = "../site/usuario/consulta_usuario.php" method = "post" style="margin-top: 20px;">
<br><button>Consultar dados usuários</button><br>
    </form>
</div>
</body>
</html>