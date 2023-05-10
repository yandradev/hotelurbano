<?php

require_once 'conexao.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_admin = $_POST["id"];
    $email = isset($_POST["email"]) ? $_POST["email"] : '';
    $senha = isset($_POST["senha"]) ? $_POST["senha"] : '';

    $sql = "UPDATE administrador SET ";

    $update_fields = array();

    if (!empty($email)) {
        $update_fields[] = "email = '$email'";
    }

    if (!empty($senha)) {
        $update_fields[] = "senha = '$senha'";
    }


    $sql .= implode(", ", $update_fields);

    $sql .= " WHERE id = $id_admin";

    if (mysqli_query($conn, $sql)) {
        echo "Administrador atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar administrador: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}


?>
