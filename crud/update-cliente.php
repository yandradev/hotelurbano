<?php
require_once 'conexao.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_cliente = $_POST["id_cliente"];
    $nome_completo = isset($_POST["nome"]) ? $_POST["nome"] : '';
    $cpf = isset($_POST["cpf"]) ? $_POST["cpf"] : '';
    $email = isset($_POST["email"]) ? $_POST["email"] : '';
    $senha = isset($_POST["senha"]) ? $_POST["senha"] : '';
    $cidade = isset($_POST["cidade"]) ? $_POST["cidade"] : '';
    $bairro = isset($_POST["bairro"]) ? $_POST["bairro"] : '';
    $cep = isset($_POST["cep"]) ? $_POST["cep"] : '';
    $rua = isset($_POST["rua"]) ? $_POST["rua"] : '';
    $numero = isset($_POST["numero"]) ? $_POST["numero"] : '';

    if (empty($nome_completo) && empty($cpf) && empty($email) && empty($senha) && empty($cidade) && empty($bairro) && empty($cep) && empty($rua) && empty($numero)) {
        echo 'Preencha no mínimo um campo para executar a ação.';
    } else {
        $sql = "UPDATE clientes SET ";
        $update_fields = array();

        if (!empty($nome_completo)) {
            $update_fields[] = "nome_completo = '$nome_completo'";
        }
        if (!empty($cpf)) {
            $update_fields[] = "cpf = '$cpf'";
        }
        if (!empty($email)) {
            $update_fields[] = "email = '$email'";
        }
        if (!empty($senha)) {
            $update_fields[] = "senha = '$senha'";
        }
        if (!empty($cidade)) {
            $update_fields[] = "cidade = '$cidade'";
        }
        if (!empty($bairro)) {
            $update_fields[] = "bairro = '$bairro'";
        }
        if (!empty($cep)) {
            $update_fields[] = "cep = '$cep'";
        }
        if (!empty($rua)) {
            $update_fields[] = "rua = '$rua'";
        }
        if (!empty($numero)) {
            $update_fields[] = "numero_casa = '$numero'";
        }

        $sql .= implode(", ", $update_fields);
        $sql .= " WHERE id_cliente = $id_cliente";

        if (mysqli_query($conn, $sql)) {
            echo 'Dados atualizados! :)';
        } else {
            echo "Erro ao atualizar dados: " . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
}
?>
