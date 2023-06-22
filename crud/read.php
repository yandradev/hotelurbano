<?php

require_once("conexao.php");


$sql = "SELECT * FROM quartos";
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
	table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        border: 1px solid grey;
        padding: 12px;
        text-align: center;
    }

    th {
        background-color: rgb(220, 225, 229);
        color: black;
        font-weight: bold;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tr:hover {
        background-color: #f5f5f5;
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
		left: 39%;

	}

table {
	border-radius: 10px;
	
}
</style>


<body>
	<div class="title">
		<h2>Lista de Quartos</h2>
	</div>
	<section></section>
	<br>
	<table border="1">
		<tr>

			<th>ID</th>
			<th>Ocupação Máxima</th>
			<th>Descrição</th>
			<th>Tipo do Quarto</th>
			<th>Valor Café da Manhã</th>
			<th>Valor Meia Pensão</th>
			<th>Valor Pensão Completa</th>
			<th>Limites de Reservas</th>
			<th>Imagem principal</th>


		</tr>
		<?php

		while ($dados = mysqli_fetch_assoc($resultado)) {
		?>
			<tr>
				<td>
					<?php echo $dados["id_quarto"]; ?>
				</td>
				<td>
					<?php echo $dados["ocupacao_maxima"] ?? ''; ?>
				</td>
				<td>
					<?php echo $dados["descricao"] ?? ''; ?>
				</td>
				<td>
					<?php echo $dados["tipo_quarto"] ?? ''; ?>
				</td>
				<td>
					<?php echo $dados["valor_cafe"] ?? ''; ?>
				</td>
				<td>
					<?php echo $dados["valor_meia"] ?? ''; ?>
				</td>
				<td>
					<?php echo $dados["valor_completa"] ?? ''; ?>
				</td>
				<td>
					<?php echo $dados["limite_reservas"] ?? ''; ?>
				</td>
				<td>
    <?php
    if (!empty($dados["imagem"])) {
        $imageData = base64_encode($dados["imagem"]);
        echo '<img src="data:image/jpeg;base64,' . $imageData . '" width="100" height="100" />';
    }
    ?>
</td>

			</tr>
		<?php
		}
		?>
	</table>
</body>

</html>

<?php
// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>