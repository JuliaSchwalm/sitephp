

		<?php
		include "../conexao.php";


		$matricula = $_GET['id'];

		$query = $conexao->prepare("DELETE  FROM cadastro_aluno where matricula = $matricula");
        $query->execute();
		

		if($query){
			echo'<script>alert ("Cadastro excluído com sucesso!") </script>';
			$url = "consulta_aluno.php";
			header("refresh:0; url= {$url}");
		}else{
			echo "o cadastro não foi excluido!";
		}

		?>

		<a href="consulta.php">VOLTAR</a>

