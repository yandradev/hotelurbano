<?php
session_start();
require_once 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name_completed = mysqli_real_escape_string($conn, $_POST["name-completed"]);
    $cpf = mysqli_real_escape_string($conn, $_POST["cpf"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $rua = mysqli_real_escape_string($conn, $_POST["rua"]);
    $numero_casa = (int)$_POST["number_house"];
    $cidade = mysqli_real_escape_string($conn, $_POST["cidade"]);
    $bairro = mysqli_real_escape_string($conn, $_POST["bairro"]);
    $cep = mysqli_real_escape_string($conn, $_POST["cep"]);

    $sql = "INSERT INTO clientes (nome_completo, cpf, email, senha, rua, numero_casa, cidade, bairro, cep) 
          VALUES ('$name_completed', '$cpf', '$email', '$password', '$rua', $numero_casa, '$cidade', '$bairro', '$cep')";

    
    $emailExistsQuery = "SELECT COUNT(*) as count FROM clientes WHERE email = '$email'";
    $emailExistsResult = mysqli_query($conn, $emailExistsQuery);
    $emailExistsData = mysqli_fetch_assoc($emailExistsResult);
    $emailExistsCount = $emailExistsData['count'];

    if ($emailExistsCount > 0) {
        echo '<script>
            alert("O email fornecido já está cadastrado. Por favor, escolha outro email.");
            window.location.href = "http://localhost/hotelurbano/entrada/cadastro.php";
        </script>';
    } else {
       
        if (mysqli_query($conn, $sql)) {
            echo '<script>
                if (confirm("Reserva cadastrada! Deseja prosseguir para a página de login?")) {
                    window.location.href = "http://localhost/hotelurbano/entrada/login.php";
                } else {
                    window.location.href = "http://localhost/hotelurbano/";
                }
            </script>';
        } else {
            echo "Erro ao cadastrar perfil " . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
}
?>






