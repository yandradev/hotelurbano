<?php
require_once 'conexao.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $ocupacao_maxima = $_POST["ocup"];
    $descricao = $_POST["desc"];
    $tipo_quarto = $_POST["tipo"];
    $valor = $_POST["val"];

  
   
    $sql = "INSERT INTO quartos (ocupacao_maxima, descricao, tipo_quarto, valor) VALUES (' $ocupacao_maxima', '$descricao', '$tipo_quarto', ' $valor')";
    if (mysqli_query($conn, $sql)) {
      echo "Quarto criado com sucesso!";
    } else {
      echo "Erro ao criar quarto: " . mysqli_error($conn);
    }
  

    mysqli_close($conn);
  }


?>

