<?php
require_once '../conexao.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os dados do formulário
    $nome = $_POST["nome"];
    $curso = $_POST["curso"];
    $cidade = $_POST["cidade"];
    $idade = $_POST["idade"];

    // Inserir os dados no banco de dados
    try {
        $query = $conexao->prepare("INSERT INTO cadastro_aluno (nome, curso, cidade, idade) VALUES (?, ?, ?, ?)");
        $query->execute([$nome, $curso, $cidade, $idade]);
        echo'<script>alert ("Dados inseridos com sucesso!") </script>';
        $url = "../index.php";
        header("refresh:0; url= {$url}");
     
    } catch (PDOException $e) {
        echo "Erro ao inserir dados: " . $e->getMessage();
    }
    
} else {
    header("Location: inserir_aluno.php?erro=2");
}
?>

