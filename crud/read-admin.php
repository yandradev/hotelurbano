<?php

require_once("conexao.php");


$sql = "SELECT * FROM administrador";
$resultado = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>

<head>
	<title>Lista de Administradores</title>
	<meta charset="utf-8">
</head>

<body>
	<h2>Lista de Administradores</h2>
	<table border="1">
		<tr>

			<th>ID</th>
			<th>Email</th>
			<th>Senha</th>


		</tr>
		<?php

		while ($dados = mysqli_fetch_assoc($resultado)) {
		?>
			<tr>
				<td><?php echo $dados["id"]; ?></td>
				<td><?php echo $dados["email"] ?? ''; ?></td>
				<td><?php echo $dados["senha"] ?? ''; ?></td>
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