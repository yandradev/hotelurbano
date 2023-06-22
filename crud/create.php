<?php
require_once 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ocupacao_maxima = $_POST["ocup"];
    $descricao = $_POST["desc"];
    $tipo_quarto = $_POST["tipo"];
    $valor_cafe = $_POST["val_cafe"];
    $valor_meia = $_POST["val_meia"];
    $valor_completa = $_POST["val_completa"];
    $limite = $_POST["limite_reservas"];

    // Verificar se o arquivo de imagem foi enviado sem erros
    if ($_FILES['imagem']['error'] == UPLOAD_ERR_OK) {
        // Caminho temporário do arquivo
        $tmpPath = $_FILES['imagem']['tmp_name'];

        // Ler o conteúdo do arquivo
        $imageData = file_get_contents($tmpPath);

        // Preparar a instrução SQL
        $sql = "INSERT INTO quartos (ocupacao_maxima, descricao, tipo_quarto, valor_cafe, valor_meia, valor_completa, limite_reservas, imagem) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "isssssis", $ocupacao_maxima, $descricao, $tipo_quarto, $valor_cafe, $valor_meia, $valor_completa, $limite, $imageData);

        // Executar a instrução SQL
        if (mysqli_stmt_execute($stmt)) {
            echo "Quarto criado com sucesso!";
        } else {
            echo "Erro ao criar quarto: " . mysqli_error($conn);
        }

        // Fechar a instrução
        mysqli_stmt_close($stmt);
    } else {
        echo "Erro no upload da imagem: " . $_FILES['imagem']['error'];
    }

    mysqli_close($conn);
}
?>
