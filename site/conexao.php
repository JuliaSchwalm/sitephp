<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'escola';

    try{
        $conexao = new PDO('mysql:host=localhost; dbname=escola', $usuario, $senha);   
        $conexao ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
    }
    catch(PDOException $e){
        echo 'ERRO: ' . $e->getMessage();
    }

?>