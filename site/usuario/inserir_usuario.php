<?php
require_once '../conexao.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os dados do formulário
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    // Inserir os dados no banco de dados
    try {
        $query = $conexao->prepare("INSERT INTO cadastro_usuario (usuario, senha) VALUES (?, ?)");
        $query->execute([$usuario, $senha]);
        echo'<script>alert ("Dados inseridos com sucesso!") </script>';
        $url = "../index.php";
        header("refresh:0; url= {$url}");
     
    } catch (PDOException $e) {
        echo "Erro ao inserir dados: " . $e->getMessage();
    }
    
} else {
    header("Location: inserir_usuario.php?erro=2");
}
?>

