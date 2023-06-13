<?php
require_once("conexao.php");
session_start();

if (isset($_COOKIE['id_cliente'])) {
    $id_cliente = $_COOKIE['id_cliente'];
} else {
    header("Location: http://localhost/hotelurbano/entrada/login.php");
    exit;
}

if (isset($_POST['id_reserva'])) {
    $id_reserva = $_POST['id_reserva'];

    $sql_reserva = "SELECT data_entrada, data_saida, valor_total, forma_de_pagamento FROM reservas WHERE id_cliente = $id_cliente AND id_reserva = $id_reserva";
    $resultado_reserva = mysqli_query($conn, $sql_reserva);
    $dados_reserva = mysqli_fetch_assoc($resultado_reserva);

    if ($dados_reserva) {
        $data_entrada = $dados_reserva['data_entrada'];
        $data_saida = $dados_reserva['data_saida'];
        $valor_total = $dados_reserva['valor_total'];
        $forma_de_pagamento = $dados_reserva['forma_de_pagamento'];
    } else {
        echo "Reserva não encontrada.";
        exit;
    }
} else {
    echo "ID da reserva não especificado.";
    exit;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Comprovante de Reserva</title>
    <meta charset="utf-8">
    <style>
       * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
       }
       body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
           
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333333;
        }

        .section {
            margin-bottom: 20px;
            padding: 20px;
            background-color: #fafafa;
            border-radius: 5px;
        }

        .section-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333333;
        }

        .section-content p {
            margin-bottom: 10px;
            color: #555555;
        }

        .comprovante-footer {
            text-align: center;
            margin-top: 20px;
        }

        .comprovante-footer p {
            color: #888888;
        }

        section {
        width: 50rem;
        height: 5vh;
        margin-top: -2.6%;
        position: relative;
       right: 2.6%;
        background: linear-gradient(90deg, rgba(243, 108, 92, 1) 0%, rgba(72, 98, 183, 1) 47%, rgba(76, 187, 163, 1) 94%);
    }

    h2 {
        text-align: center;
        padding: 5px 5px 5px;
        margin-top: 1%;
        font-weight: bold;
    }

    </style>
</head>
<body>
   
    <div class="container">
   
    <section></section>
        <h2>Comprovante de reserva</h2>

        <div class="section">
         <?php
         
         $sql_cliente = "SELECT * FROM clientes WHERE id_cliente = $id_cliente";
$resultado_cliente = $conn->query($sql_cliente);

if ($resultado_cliente && $resultado_cliente->num_rows > 0) {
    $row_cliente = $resultado_cliente->fetch_assoc();
    ?>
            <div class="section-title">Informações da reserva</div>
            <div class="section-content">
            <p><strong>Nome completo: <?php echo $row_cliente["nome_completo"]; ?></strong></p>
            <p><strong>CPF: <?php echo $row_cliente["cpf"]; ?></strong></p>
            <p><strong>Número da Reserva:</strong> <?php echo $id_reserva; ?></p>
                <p><strong>Data de Entrada:</strong> <?php echo $data_entrada; ?></p>
                <p><strong>Data de Saída:</strong> <?php echo $data_saida; ?></p>
                <p><strong>Valor Total:</strong> R$ <?php echo $valor_total; ?></p>
                <p><strong>Forma de Pagamento:</strong> <?php echo $forma_de_pagamento; ?></p>
            </div>
        </div>

       

        <div class="comprovante-footer">
            <p>Obrigado pela preferência!</p>
        </div>
        <footer style="font-size: 9px; text-align: center; font-style: italic; font-weight: bolder; margin-top: 4%;"> &copy; Informática 2021-2023</footer>
    </div>
    <?php
} else {
    echo "<p>Impossível realizar a ação.</p>";
}
mysqli_close($conn);
?>
</body>
</html>

