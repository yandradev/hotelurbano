<?php
session_start();

require_once 'conexao.php';

if (empty($_POST['email-logado']) || empty($_POST['password'])) {
    echo "<script>alert('Por favor, preencha todos os campos.'); window.location.href = 'http://localhost/hotelurbano/entrada/login.php';</script>";
    exit();
}

$email = $_POST['email-logado'];
$senha = $_POST['password'];

$query = "SELECT * FROM clientes WHERE email = '$email'";
$resultado = mysqli_query($conn, $query);

if (mysqli_num_rows($resultado) !== 1) {
    echo "<script>alert('Email ou senha incorretos.'); window.location.href = 'http://localhost/hotelurbano/entrada/login.php';</script>";
    exit();
}

$cliente = mysqli_fetch_assoc($resultado);
$senhaArmazenada = $cliente['senha'];

if ($senha !== $senhaArmazenada) {
    echo "<script>alert('Email ou senha incorretos.'); window.location.href = 'http://localhost/hotelurbano/entrada/login.php';</script>";
    exit();
}

$id_cliente = $cliente['id_cliente']; 
$_SESSION['usuario'] = $email;
setcookie('id_cliente', $id_cliente, time() + 3600, '/');

mysqli_close($conn);

echo "<script>alert('Bem vindo ao Hotel Urbano! :)'); window.location.href = 'http://localhost/hotelurbano/index-logado.php';</script>";
exit();
?>
