<?php

require_once 'conexao.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_quarto = $_POST["id"];
    $ocupacao_maxima = isset($_POST["ocup"]) ? $_POST["ocup"] : '';
    $descricao = isset($_POST["desc"]) ? $_POST["desc"] : '';
    $tipo_quarto = isset($_POST["tipo"]) ? $_POST["tipo"] : '';
    $valor = isset($_POST["val"]) ? $_POST["val"] : '';

    $sql = "UPDATE quartos SET ";

    $update_fields = array();

    if (!empty($ocupacao_maxima)) {
        $update_fields[] = "ocupacao_maxima = '$ocupacao_maxima'";
    }

    if (!empty($descricao)) {
        $update_fields[] = "descricao = '$descricao'";
    }

    if (!empty($tipo_quarto)) {
        $update_fields[] = "tipo_quarto = '$tipo_quarto'";
    }

    if (!empty($valor)) {
        $update_fields[] = "valor = '$valor'";
    }

    $sql .= implode(", ", $update_fields);

    $sql .= " WHERE id_quarto = $id_quarto";

    if (mysqli_query($conn, $sql)) {
        echo "Quarto atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar quarto: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}


?>
