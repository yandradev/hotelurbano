<?php
require_once 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  
  $name_completed = mysqli_real_escape_string($conn, $_POST["name-completed"]);
  $cpf = mysqli_real_escape_string($conn, $_POST["cpf"]);
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $password = mysqli_real_escape_string($conn, $_POST["password"]);
  $rua = mysqli_real_escape_string($conn, $_POST["rua"]);
  $numero_casa = (int) $_POST["number_house"];
  $cidade = mysqli_real_escape_string($conn, $_POST["cidade"]);
  $bairro = mysqli_real_escape_string($conn, $_POST["bairro"]);
  $cep = mysqli_real_escape_string($conn, $_POST["cep"]);

  
  $sql = "INSERT INTO clientes (nome_completo, cpf, email, senha, rua, numero_casa, cidade, bairro, cep) 
          VALUES ('$name_completed', '$cpf', '$email', '$password', '$rua', $numero_casa, '$cidade', '$bairro', '$cep')";

  if (mysqli_query($conn, $sql)) {
      echo "Dados inseridos com sucesso!";
  } else {
      echo "Erro ao inserir dados: " . mysqli_error($conn);
  }

  mysqli_close($conn);
}
?>
















