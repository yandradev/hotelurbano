<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Administrador</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="./img/logourbano.png" class="logo">
        </div>
        <div class="form">
            <form action= "validar-adm.php" method="POST" name="login" onsubmit="return Validar()">
                <div class="form-head">
                    <div class="titulo">
                        <h1>Login Administrador</h1>
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
                        <input id="password" type="password" name="password" placeholder="Digite uma senha">
                        <small></small>
                        <div class="icon-eye">
                            <img src="./img/eye.png" width="20px" id="eye">
                        </div>
                    </div>
                </div>

                <div class="continue-button">
                    <input type="submit" value="Login" id="submit">
                </div>
                <script type="text/javascript" src="./script.js" ></script>
            </form>
        </div>
        </div>
    </body>

</html>