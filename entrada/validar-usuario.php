<?php
session_start();

require_once 'conexao.php';

if (empty($_POST['email-logado']) || empty($_POST['password'])) {
    $_SESSION['loginErro'] = "Por favor, preencha todos os campos.";
    header("Location: login.php");
    exit();
}

$email = $_POST['email-logado'];
$senha = $_POST['password'];

$query = "SELECT * FROM clientes WHERE email = '$email' AND senha = '$senha'";
$resultado = mysqli_query($conn, $query);

if (mysqli_num_rows($resultado) !== 1) {
    $_SESSION['loginErro'] = "Email ou senha inválidos.";
    header("Location: login.php");
    exit();
}

$cliente = mysqli_fetch_assoc($resultado);
$id_cliente = $cliente['id_cliente']; 

$_SESSION['usuario'] = $email;


setcookie('id_cliente', $id_cliente, time() + 3600, '/');

mysqli_close($conn);

header("Location: http://localhost/hotelurbano/index-logado.php");
exit();
?>
