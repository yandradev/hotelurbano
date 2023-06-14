<?php

require_once 'conexao.php';

session_start();

if (isset($_COOKIE['id_cliente'])) {
    $id_cliente = $_COOKIE['id_cliente'];
} else {
    header("Location: http://localhost/hotelurbano/entrada/login.php");
    exit();
}


if (isset($_POST['id_reserva']) && isset($_POST['senha'])) {
    $id_reserva = $_POST['id_reserva'];
    $senha = $_POST['senha'];

 
    $sql = "SELECT * FROM reservas WHERE id_reserva = $id_reserva AND id_cliente = $id_cliente";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
     
        $sql = "SELECT senha FROM clientes WHERE id_cliente = $id_cliente";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $senhaBanco = $row['senha'];

            if ($senha == $senhaBanco) {
               
                $sql = "DELETE FROM reservas WHERE id_reserva = $id_reserva AND id_cliente = $id_cliente";

                if ($conn->query($sql) === true) {
                    echo '<script>alert("Reserva deletada com sucesso"); window.location.href = "http://localhost/hotelurbano/status.php";</script>';
                    exit();
                } else {
                    echo "Erro ao deletar a reserva: " . mysqli_error($conn);
                }
            } else {
                echo '<script>alert("Senha incorreta"); window.location.href = "http://localhost/hotelurbano/user-deletar.php";</script>';
                exit();
            }
        }
    } else {
        echo '<script>alert("Reserva não encontrada"); window.location.href = "http://localhost/hotelurbano/user-deletar.php";</script>';
        exit();
    }
}
?>

























?>