

		<?php
		include "../conexao.php";


		$id = $_GET['id'];

		$query = $conexao->prepare("DELETE  FROM cadastro_usuario where id = $id");
        $query->execute();
		

		if($query){
			echo'<script>alert ("Usuário excluído com sucesso!") </script>';
			$url = "consulta_usuario.php";
			header("refresh:0; url= {$url}");
		}else{
			echo "o cadastro não foi excluido!";
		}

		?>

		<a href="consulta_usuario.php">VOLTAR</a>

