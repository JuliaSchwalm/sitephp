<!DOCTYPE html>
<html>
<head>
	<title>enviar alterações</title>
	<meta charset="utf-8">
</head>
<body>


	<?php

	include "../conexao.php";


	$matricula = $_POST['matricula'];
	$nome = $_POST['nome'];
	$curso = $_POST['curso'];
	$cidade = $_POST['cidade'];
	$idade = $_POST['idade'];

    $query = $conexao->prepare("UPDATE cadastro_aluno SET nome = '$nome', curso = '$curso', cidade = '$cidade',idade = '$idade' WHERE matricula = '$matricula'");


    $query->execute();
 	


 	if($query){
		echo'<script>alert ("Cadastro alterado com sucesso!") </script>';
        $url = "consulta_aluno.php";
        header("refresh:0; url= {$url}");
		}else{
			echo "o cadastro não foi alterado!";
		}
		
	?>


</body>
</html>