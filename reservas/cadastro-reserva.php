<?php
require_once 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_quarto = mysqli_real_escape_string($conn, $_POST['id_quarto']);
    $id_cliente = mysqli_real_escape_string($conn, $_POST['id_cliente']);
    $check_in = mysqli_real_escape_string($conn, $_POST['check-in']);
    $check_out = mysqli_real_escape_string($conn, $_POST['check-out']);
    $ocupantes = intval($_POST['ocupantes']);
    $forma_pagamento = mysqli_real_escape_string($conn, $_POST['pagamento']);
    $valor_total = mysqli_real_escape_string($conn, $_POST['valor_total']);

    if (isset($_POST['ocupantes']) && $ocupantes !== '') {
        if ($ocupantes < 1 || $ocupantes > 4) {
            echo "Erro ao cadastrar a reserva: Quantidade de ocupantes inválida.";
            exit;
        }
    } else {
        echo "Erro ao cadastrar a reserva: Quantidade de ocupantes não especificada.";
        exit;
    }

    if ($forma_pagamento == 'Dinheiro físico') {
        $local_pagamento = mysqli_real_escape_string($conn, $_POST['local-pagamento']);
        $forma_pagamento = 'Dinheiro físico - ' . $local_pagamento;
    }

    $sql = "INSERT INTO reservas (id_quarto, id_cliente, data_entrada, data_saida, quantidade_ocupantes, forma_de_pagamento, valor_total)
            VALUES ('$id_quarto', '$id_cliente', '$check_in', '$check_out', $ocupantes, '$forma_pagamento', '$valor_total')";

    if (mysqli_query($conn, $sql)) {
        echo "Reserva cadastrada com sucesso! :)";
    } else {
        echo "Erro ao cadastrar a reserva: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "Erro ao cadastrar a reserva: Método de requisição inválido.";
}
?>


