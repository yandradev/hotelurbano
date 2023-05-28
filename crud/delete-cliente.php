<?php
require_once 'conexao.php';

if (isset($_POST['id'])) {
 
    $id = $_POST['id'];

    $result = mysqli_query($conn, "SELECT * FROM clientes WHERE id_cliente= $id");

    if (mysqli_num_rows($result) == 0) {
      
        echo "ID do cliente não encontrado";
        exit();
    }
}
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM clientes WHERE id_cliente = $id";
    if (mysqli_query($conn, $sql)) {
        echo "Cliente deletado com sucesso";
    } else {
        echo "Erro ao deletar cliente: " . mysqli_error($conn);
    }
}


mysqli_close($conn);
 ?>