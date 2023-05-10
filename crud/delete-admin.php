<?php
require_once 'conexao.php';

if (isset($_POST['id'])) {
 
    $id = $_POST['id'];

    $result = mysqli_query($conn, "SELECT * FROM administrador WHERE id= $id");

    if (mysqli_num_rows($result) == 0) {
      
        echo "ID do administrador não encontrado";
        exit();
    }
}
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM administrador WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        echo "Administrador deletado com sucesso";
    } else {
        echo "Erro ao deletar administrador: " . mysqli_error($conn);
    }
}


mysqli_close($conn);
 ?>