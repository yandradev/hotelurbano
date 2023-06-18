<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://localhost/hotelurbano/style-perfil.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do cliente</title>
</head>

<body>
    <section></section>
    <div class="form-image">
        <img src="http://localhost/hotelurbano/homepage/img-homepage/Fundo%20Branco.png">
    </div>

    <div class="container">
        <?php
        require_once 'conexao.php';

        $id_cliente = "";
        $show_form = true;
        $cliente_encontrado = false;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id_cliente = $_POST["id_cliente"];

            $sql = "SELECT * FROM clientes WHERE id_cliente = '$id_cliente'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $show_form = false;
                $cliente_encontrado = true;
        ?>
                <script>
                    alert("Cliente encontrado!");
                </script>
                <form action="update-cliente.php" method="POST" id="form">
                    <fieldset>
                        <div class="title">
                            <p>Informações básicas:</p>
                        </div>
                        <br>
                        <div class="input-box">
                            <label for="id_cliente">ID do cliente:</label>
                            <input type="text" name="id_cliente" id="id_cliente" required value="<?php echo $row["id_cliente"]; ?>" readonly>
                            <small></small>
                        </div>
                        <br>
                        <div class="input-box">
                            <label for="nome">Nome completo:</label>
                            <input type="text" name="nome" value="<?php echo $row["nome_completo"]; ?>" id="nome">
                            <small></small>
                        </div>
                        <div class="input-box">
                            <br>
                            <label for="cpf">CPF:</label>
                            <input type="text" name="cpf" value="<?php echo $row["cpf"]; ?>" id="cpf" maxlength="14">
                            <small></small>
                        </div>
                        <br>
                        <div class="input-box">
                            <label for="email">Email:</label>
                            <input type="email" name="email" value="<?php echo $row["email"]; ?>" id="email">
                            <small></small>
                        </div>
                        <br>
                        <div class="input-box">
                            <label for="senha">Senha:</label>
                            <input type="password" name="senha" id="senha" value="<?php echo $row["senha"]; ?>" maxlength="8">
                            <div class="icon-eye">
                                <img src="http://localhost/hotelurbano/entrada/profile/img/eye.png" id="eye">
                            </div>
                            <small></small>
                            <br>
                        </div>
                        <div class="title">
                            <p>Endereço:</p>
                        </div>
                        <br>
                        <div class="input-box">
                            <label for="cidade">Cidade:</label>
                            <input type="text" name="cidade" value="<?php echo $row["cidade"]; ?>" id="cidade">
                            <small></small>
                            <br>
                        </div>
                        <div class="input-box">
                            <label for="bairro">Bairro:</label>
                            <input type="text" name="bairro" value="<?php echo $row["bairro"]; ?>" id="bairro">
                            <small></small>
                        </div>
                        <br>
                        <div class="input-box">
                            <label for="cep">CEP:</label>
                            <input type="text" name="cep" value="<?php echo $row["cep"]; ?>" id="cep">
                            <small></small>
                        </div>
                        <br>
                        <div class="input-box">
                            <label for="rua">Rua:</label>
                            <input type="text" name="rua" value="<?php echo $row["rua"]; ?>" id="rua">
                            <small></small>
                        </div>
                        <br>
                        <div class="input-box">
                            <label for="numero">Número da casa:</label>
                            <input type="text" name="numero" value="<?php echo $row["numero_casa"]; ?>" id="numero">
                            <small></small>
                            <br>
                        </div>
                    </fieldset>
                    <br>
                    <div class="button-alter">
                        <button type="submit" style="position: absolute;  left: 45%;">Salvar alterações</button>
                    </div>
                </form>
        <?php
            }
        }

        if (!$cliente_encontrado && $_SERVER["REQUEST_METHOD"] == "POST") {
        ?>
            <script>
                alert("Cliente não encontrado!");
            </script>
        <?php
        }
        ?>
        <form action="" method="POST" <?php if (!$show_form) echo 'style="display: none;"'; ?>>
            <div class="input-box-id">
                <label for="id_cliente">ID do cliente:</label>
                <input type="text" name="id_cliente" id="id_cliente" required>
                <small></small>
                <br>
                <button type="submit" style=" width:12%; ">Buscar</button>
               
                <a href="http://localhost/hotelurbano/crud/read-cliente.php">   <button type="button" >Listar clientes</button></a>
            </div>
        </form>
        <script src="http://localhost/hotelurbano/validation/script.js"></script>
    </div>
</body>

</html>
