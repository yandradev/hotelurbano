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

    if ($result) {
        if ($result->num_rows > 0) {
            $sql = "SELECT senha, quartos.id_quarto FROM clientes INNER JOIN reservas ON clientes.id_cliente = reservas.id_cliente INNER JOIN quartos ON reservas.id_quarto = quartos.id_quarto WHERE clientes.id_cliente = $id_cliente AND reservas.id_reserva = $id_reserva";
            $result = $conn->query($sql);

            if ($result) {
                if ($result->num_rows == 1) {
                    $row = $result->fetch_assoc();
                    $senhaBanco = $row['senha'];
                    $id_quarto = $row['id_quarto'];

                    if ($senha == $senhaBanco) {
                        $quartosRestritos = array(5, 6);
                        if (in_array($id_quarto, $quartosRestritos)) {
                            echo '<script>alert("Não é permitido cancelamento. Quarto não reembolsável."); window.location.href = "http://localhost/hotelurbano/deletar-reserva.php";</script>';
                            exit;
                        }

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
                } else {
                    echo '<script>alert("Reserva não encontrada"); window.location.href = "http://localhost/hotelurbano/user-deletar.php";</script>';
                    exit();
                }
            } else {
                echo "Erro na consulta SQL: " . mysqli_error($conn);
            }
        } else {
            echo '<script>alert("Reserva não encontrada"); window.location.href = "http://localhost/hotelurbano/user-deletar.php";</script>';
            exit();
        }
    } else {
        echo "Erro na consulta SQL: " . mysqli_error($conn);
    }
}
?>
























?>