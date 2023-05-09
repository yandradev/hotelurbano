<?php
require_once 'conexao.php';

if (isset($_POST['id'])) {
 
    $id = $_POST['id'];

    $result = mysqli_query($conn, "SELECT * FROM quartos WHERE id_quarto= $id");

    if (mysqli_num_rows($result) == 0) {
      
        echo "ID do quarto não encontrado";
        exit();
    }
}
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM quartos WHERE id_quarto = $id";
    if (mysqli_query($conn, $sql)) {
        echo "Quarto deletado com sucesso";
    } else {
        echo "Erro ao deletar quarto: " . mysqli_error($conn);
    }
}


mysqli_close($conn);
