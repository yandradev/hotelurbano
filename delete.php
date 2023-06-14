<?php
require_once 'conexao.php';

session_start();
if (isset($_COOKIE['id_cliente'])) {
    $id_cliente = $_COOKIE['id_cliente'];

} else {
    header("Location: http://localhost/hotelurbano/entrada/login.php");
    exit();
}
if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $id = $id_cliente;
    $result = mysqli_query($conn, "SELECT * FROM clientes WHERE id_cliente = $id");

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $emailBanco = $row['email'];
        $senhaBanco = $row['senha'];

        if ($email == $emailBanco && $senha == $senhaBanco) {
           
            $sql = "DELETE FROM clientes WHERE id_cliente = $id";
            $sql = "DELETE FROM reservas WHERE id_cliente = $id";
            if (mysqli_query($conn, $sql)) {
                echo '<script>alert("Perfil deletado com sucesso"); window.location.href = "http://localhost/hotelurbano/";</script>';
            } else {
                echo "Erro ao deletar perfil: " . mysqli_error($conn);
            }
        } else {
            echo '<script>alert("Email ou senha incorretos");window.location.href = "http://localhost/hotelurbano/user-deletar.php";</script>' ;
        }
    }

}

?>


