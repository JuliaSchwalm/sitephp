


	<?php

	include "../conexao.php";

	$id = $_POST['id'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];


    $query = $conexao->prepare("UPDATE cadastro_usuario SET id = '$id', usuario = '$usuario', senha = '$senha' WHERE id = '$id'");


    $query->execute();
 	


 	if($query){
		echo'<script>alert ("Cadastro alterado com sucesso!") </script>';
        $url = "consulta_usuario.php";
        header("refresh:0; url= {$url}");
		}else{
			echo "o cadastro não foi alterado!";
		}
		
	?>
