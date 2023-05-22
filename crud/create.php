<?php
require_once 'conexao.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $ocupacao_maxima = $_POST["ocup"];
    $descricao = $_POST["desc"];
    $tipo_quarto = $_POST["tipo"];
    $valor_cafe = $_POST["val_cafe"];
    $valor_meia = $_POST["val_meia"];
    $valor_completa = $_POST["val_completa"];

  
   
    $sql = "INSERT INTO quartos (ocupacao_maxima, descricao, tipo_quarto, valor_cafe, 	valor_meia, valor_completa) VALUES (' $ocupacao_maxima', '$descricao', '$tipo_quarto', ' $valor_cafe', '$valor_meia', '$valor_completa ')";
    if (mysqli_query($conn, $sql)) {
      echo "Quarto criado com sucesso!";
    } else {
      echo "Erro ao criar quarto: " . mysqli_error($conn);
    }
  

    mysqli_close($conn);
  }


?>

