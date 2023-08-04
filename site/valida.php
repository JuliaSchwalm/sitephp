
<?php
require_once 'conexao.php';

    session_start();
    //usuario passado por parametro no login.html
    $_SESSION['user'] = $_POST["nome"];
    $_SESSION['password'] = $_POST["senha"];
    //consulta o banco de dados usuario
    $query = $conexao->query("SELECT * FROM cadastro_usuario");

    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    //se o usuario digita no cadastro estiver no banco vai para a pagina
    if ($_SESSION['user'] == $row['usuario'] && $_SESSION['password'] == $row['senha']){
        if ($_SESSION['user'] == 'admin'){
        header("Location: index.php");
    } else {
       header("Location: ../site/usuario/matricula.html");
    }
    } else {
        echo'<script>alert ("usuário não cadastrado") </script>';
        $url = "login.html";
        header("refresh:0; url= {$url}");
    }

    }
  
?>
