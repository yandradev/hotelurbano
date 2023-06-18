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
    $regimeAlimentar = mysqli_real_escape_string($conn, $_POST['regime_alimentar']);


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

    $sql = "INSERT INTO reservas (id_quarto, id_cliente, data_entrada, data_saida, quantidade_ocupantes, forma_de_pagamento, valor_total, regime_alimentacao)
    VALUES ('$id_quarto', '$id_cliente', '$check_in', '$check_out', $ocupantes, '$forma_pagamento', '$valor_total', '$regimeAlimentar')";


    if (mysqli_query($conn, $sql)) {
        echo '<script>';
    echo 'if (confirm("Reserva cadastrada com sucesso! Deseja verificar o status da reserva? :)")) {';
    echo 'window.location.href = "http://localhost/hotelurbano/status.php";'; 
    echo '} else {';
    echo 'window.location.href = "http://localhost/hotelurbano/perfil-user.php";'; 
    echo '}';
    echo '</script>';
    } else {
        echo "Erro ao cadastrar a reserva: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "Erro ao cadastrar a reserva: Método de requisição inválido.";
}
?>


