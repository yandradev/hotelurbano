<?php

require_once("conexao.php");


$sql = "SELECT * FROM clientes";
$resultado = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>

<head>
	<title>Lista de Quartos</title>
	<meta charset="utf-8">
</head>
<style>
	@import url('https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Raleway:wght@300&display=swap');

	* {
		padding: 0;
		margin: 0;
		box-sizing: border-box;
	}


	section {
		width: 100%;
		height: 10vh;
		background: linear-gradient(90deg, rgba(243, 108, 92, 1) 0%, rgba(72, 98, 183, 1) 47%, rgba(76, 187, 163, 1) 94%);

	}

	.title h2 {

		margin-top: 1%;
		position: absolute;
		color: white;
		text-shadow: 3px 3px 3px black;
		font-size: 35px;
		letter-spacing: 1px;
		text-transform: uppercase;
		font-family: 'DM Serif Display', serif;
		font-weight: bold;
		left: 36%;

	}

table {
	border-radius: 10px;
	
}
.container {
	display: flex;
	justify-content: center;
	margin-top: 2%;
}
</style>


<body>
	<div class="title">
		<h2>Lista de Clientes</h2>
	</div>
	<section></section>
	<br>
	<div class="container">
	<table border="1">
	
	<tr>

			<th>ID</th>
			<th>Nome completo</th>
			<th>CPF</th>
			<th>Email</th>
			<th>Senha</th>
			<th>Rua</th>
			<th>Número da casa</th>
            <th>Cidade</th>
			<th>Bairro</th>
	<th>CEP</th>
			
		</tr>

		<?php

		while ($dados = mysqli_fetch_assoc($resultado)) {
		?>
			<tr>
				<td>
					<?php echo $dados["id_cliente"]; ?>
				</td>
				<td>
					<?php echo $dados["nome_completo"] ?? ''; ?>
				</td>
				<td>
					<?php echo $dados["cpf"] ?? ''; ?>
				</td>
				<td>
					<?php echo $dados["email"] ?? ''; ?>
				</td>
				<td>
					<?php echo $dados["senha"] ?? ''; ?>
				</td>
				<td>
					<?php echo $dados["rua"] ?? ''; ?>
				</td>
				<td>
					<?php echo $dados["numero_casa"] ?? ''; ?>
				</td>
                <td>
					<?php echo $dados["cidade"] ?? ''; ?>
				</td>
                <td>
					<?php echo $dados["bairro"] ?? ''; ?>
				</td>
                <td>
					<?php echo $dados["cep"] ?? ''; ?>
				</td>

			</tr>
		
		<?php
		}
		?>
	</table>
	</div>
</body>

</html>

<?php

mysqli_close($conn);
?>