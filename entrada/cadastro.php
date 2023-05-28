<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scined index: lastname in
/opt/lampale=1.0">




    <link rel="stylesheet" href="./profile/css/style.css">


    <title>Cadastre-se no Hotel Urbano</title>
</head>

<body>

    <div class="container">
        <div class="form-image">
            <img src="./profile/img/logourbano.png" class="logo">
        </div>

        <div class="form">

            <form action="insert.php" method="POST" name="cadastro" autocomplete="off" id="form">
                <div class="form-head">
                    <div class="titulo">
                        <h1>Cadastre-se</h1>
                    </div>

                    <div class="button">
                        <h3>Já tem uma conta?</h2>
                            <button><a href="login.php">Entrar</a></button>
                    </div>
                </div>

                <div class="inputs">
                    <div class="input-box">
                        <label for="name_completed">Nome completo</label>
                        <input id="name_completed" type="text" name="name-completed"
                            placeholder="Digite seu nome completo">
                        <small> </small>
                      
                    </div>

                    <div class="input-box">
                        <label for="cpf">CPF</label>
                        <input id="cpf" type="text" name="cpf" placeholder="Digite seu CPF" maxlength="14">
                        <small> </small>
                    
                    </div>

                    <div class="input-box">
                        <label for="email">Email</label>
                        <input id="email" type="text" name="email" placeholder="Digite seu E-mail">
                        <small></small>
                       
                    </div>

                    <div class="input-box">
                        <label for="rua">Rua</label>
                        <input id="rua" type="text" name="rua" placeholder="Digite sua rua">
                        <small> </small>
                       
                    </div>

                    <div class="input-box">
                        <label for="number_house">Número da casa</label>
                        <input id="number_house" type="text" name="number_house"
                            placeholder="Digite o número da sua casa">
                        <small> </small>
                       
                    </div>

                    <div class="input-box">
                        <label for="bairro">Bairro</label>
                        <input id="bairro" type="text" name="bairro" placeholder="Digite seu bairro">
                        <small></small>
                       
                    </div>

                    <div class="input-box">
                        <label for="cidade">Cidade</label>
                        <input id="cidade" type="text" name="cidade" placeholder="Digite sua cidade">
                        <small></small>
                       
                    </div>

                    <div class="input-box">
                        <label for="cep">CEP</label>
                        <input id="cep" type="text" name="cep" placeholder="Digite seu cep">
                        <small></small>
                       
                    </div>
                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="password" placeholder="Digite uma senha" maxlength="8">
                        <small></small>
                      
                        <div class="icon-eye">
                            <img src="profile/img/eye.png" width="20px" id="eye">

                        </div>
                    </div>

                    <div class="input-box">
                        <label for="confirmpassword">Confirme sua senha</label>
                        <input id="confirmpassword" type="password" name="confirmpassword"
                            placeholder="Confirme sua senha" maxlength="8">
                        <small></small>
                       
                        <div class="icon-eye-2">
                            <img src="profile/img/eye.png" width="20px" id="eye-2">
                        </div>

                    </div>

                </div>
                <div class="continue-button">
                    <a href="#"><input type="submit" value="Continuar" id="submit"></a>
                </div>
        </div>

    </div>
    </div>

    </div>
    <script type="text/javascript" src="dynamic/script.js"></script>
    <script type="text/javascript" src="dynamic/cep.js"></script>


    </div>
    </div>

    </div>
    </div>
    </form>
</body>

</html>