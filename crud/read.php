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



<body>
	<h2>Lista de Quartos</h2>
	<table border="1">
		<tr>

			<th>ID</th>
			<th>Ocupação Máxima</th>
			<th>Descrição</th>
			<th>Tipo do Quarto</th>
			<th>Valor</th>

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
				<?php echo $dados["valor"] ?? ''; ?>
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