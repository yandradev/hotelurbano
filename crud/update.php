<?php

require_once 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_quarto = $_POST["id"];
    $ocupacao_maxima = isset($_POST["ocup"]) ? $_POST["ocup"] : '';
    $descricao = isset($_POST["desc"]) ? $_POST["desc"] : '';
    $tipo_quarto = isset($_POST["tipo"]) ? $_POST["tipo"] : '';
    $valor_cafe = isset($_POST["val_cafe"]) ? $_POST["val_cafe"] : '';
    $valor_meia = isset($_POST["val_meia"]) ? $_POST["val_meia"] : '';
    $valor_completa = isset($_POST["val_completa"]) ? $_POST["val_completa"] : '';
    $limite = isset($_POST["limite_reservas"]) ? $_POST["limite_reservas"] : '';

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

    if (!empty($valor_cafe)) {
        $update_fields[] = "valor_cafe = '$valor_cafe'";
    }
    if (!empty($valor_meia)) {
        $update_fields[] = "valor_meia = '$valor_meia'";
    }
    if (!empty($valor_completa)) {
        $update_fields[] = "valor_completa = '$valor_completa'";
    }
    if (!empty($limite)) {
        $update_fields[] = "limite_reservas = '$limite'";
    }


    if (count($update_fields) > 0) {
        $sql = "UPDATE quartos SET ";
        $sql .= implode(", ", $update_fields);
        $sql .= " WHERE id_quarto = $id_quarto";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Quarto atualizado com sucesso!'); window.location.href = 'http://localhost/hotelurbano/crud/read.php';</script>";
            exit; 
        } else {
            echo "Erro ao atualizar quarto: " . mysqli_error($conn);
        }
    } else {
        echo "Nenhum campo para atualizar foi fornecido.";
        echo "<script>alert('Nenhum campo para atualizar foi fornecido.');</script>";
    }

    mysqli_close($conn);
}
?>
