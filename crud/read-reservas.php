<?php

require_once("conexao.php");


$sql = "SELECT * FROM reservas";
$resultado = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>

<head>
	<title>Lista de Reservas</title>
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
		left: 37%;

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
	<h2>Lista de Reservas</h2>
	</div>
	<section></section>
	<div class="container">
	<table border="1">
		<tr>
			<th>ID RESERVA</th>
            <th>ID QUARTO</th>
            <th>ID CLIENTE</th>
			<th>Data de entrada</th>
			<th>Data de saída</th>
            <th>Valor total</th>
			<th>Quantidade de ocupantes</th>
            <th>Forma de pagamento efetuada</th>
		</tr>
		<?php

		while ($dados = mysqli_fetch_assoc($resultado)) {
		?>
			<tr>
				<td><?php echo $dados["id_reserva"] ?? '' ; ?></td>
				<td><?php echo $dados["id_quarto"] ?? ''; ?></td>
				<td><?php echo $dados["id_cliente"] ?? ''; ?></td>
                <td><?php echo $dados["data_entrada"]; ?></td>
				<td><?php echo $dados["data_saida"] ?? ''; ?></td>
				<td><?php echo $dados["valor_total"]; ?></td>
                <td><?php echo $dados["quantidade_ocupantes"] ?? ''; ?></td>
                <td><?php echo $dados["forma_de_pagamento"]; ?></td>  
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