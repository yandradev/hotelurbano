<?php
session_start();
require_once 'conexao.php';

// Verifica se os campos de login e senha foram preenchidos
if (empty($_POST['email-logado']) || empty($_POST['password'])) {
    $_SESSION['loginErro'] = "Por favor, preencha todos os campos.";
    header("Location: login.php");
    exit();
}

// Verifica se o email e senha são válidos
$email = $_POST['email-logado'];
$senha = $_POST['password'];

$query = "SELECT * FROM clientes WHERE email = '$email' AND senha = '$senha'";
$resultado = mysqli_query($conn, $query);

if (mysqli_num_rows($resultado) !== 1) {
     $_SESSION['loginErro'] = "Email ou senha inválidos.";
     header("Location: login.php");
     exit(); 
}

// Se tudo estiver correto, inicia a sessão e redireciona para a página de administrador
$_SESSION['usuario'] = $email;
header("Location: http://localhost/hotelurbano/");


mysqli_close($conn);

exit();
