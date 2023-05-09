<?php
require_once 'conexao.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "INSERT INTO administrador (email, senha) VALUES ('$email', '$senha')";
    if (mysqli_query($conn, $sql)) {
      echo "Administrador cadastrado com sucesso!";
    } else {
      echo "Erro ao criar administrador: " . mysqli_error($conn);
    }
  

    mysqli_close($conn);
  }


?>