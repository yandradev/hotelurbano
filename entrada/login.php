<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile/css/user.css">
    <title>Login Hotel Urbano</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="./profile/img/logourbano.png" class="logo">
        </div>
        <div class="form">
            <form action="validar-usuario.php" method="POST" name="login" onsubmit="return Validar()">
                <div class="form-head">
                    <div class="titulo">
                        <h1>Login</h1>
                    </div>
                    <div class="button">
                        <h2>Não tem uma conta?</h2>
                        <button type="submit"><a href="cadastro.php">Criar conta</a></button>
                    </div>
                </div>

                <div class="inputs">
                    <div class="input-box">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email-logado" placeholder="Digite seu E-mail">
                        <small></small>
                    </div>


                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password-logado" name="password" placeholder="Digite uma senha">
                        <small></small>
                        <div class="icon-eye">
                            <img src="profile/img/eye.png" width="20px" id="eye">
                        </div>
                    </div>
                </div>
                <div class="continue-button">
                    <a href="#"><input type="submit" value="Login" id="submit"></a>
                </div>
                <script type="text/javascript" src="dynamic/loginScript.js" ></script>
            </form>
        </div>
        </div>
    </body>

</html>