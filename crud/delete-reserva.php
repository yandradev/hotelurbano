<?php
require_once 'conexao.php';

if (isset($_GET['id_reserva'])) {
    $id_reserva = $_GET['id_reserva'];

    $sql = "SELECT * FROM reservas WHERE id_reserva = $id_reserva";
    $result = $conn->query($sql);

    if ($result) {
        if ($result->num_rows == 1) {
            $sql = "DELETE FROM reservas WHERE id_reserva = $id_reserva";

            if ($conn->query($sql) === true) {
                echo '<script>alert("Reserva deletada com sucesso"); window.location.href = "http://localhost/hotelurbano/crud/read-reservas.php";</script>';
                exit();
            } else {
                echo "Erro ao deletar a reserva: " . mysqli_error($conn);
            }
        } else {
            echo '<script>alert("Reserva não encontrada"); window.location.href = "http://localhost/hotelurbano/crud/deletar-reservas.php";</script>';
            exit();
        }
    } else {
        echo "Erro na consulta SQL: " . mysqli_error($conn);
    }
}

$conn->close();
?>
