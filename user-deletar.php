<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style-delete.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar perfil</title>
</head>
<body>
    <style>


.errorInput {
    border-bottom: 1px solid rgb(255, 0, 0) !important;

}

small {
    color: red;
}

.icon-eye {
    position: fixed;
    margin-top: -2rem;
    margin-left: 15rem;
    cursor: pointer;
     
}



    </style>
    <section></section>

    <div class="form-image">
        <img src="http://localhost/hotelurbano/homepage/img-homepage/Fundo%20Branco.png">
    </div>
    <div class="container-1">

        <form action="delete.php" method="POST" id="form">
            <?php
                    require_once 'conexao.php';
                        
                    session_start();
                    if (isset($_COOKIE['id_cliente'])) {
                        $id_cliente = $_COOKIE['id_cliente'];
                   
                    } else {
                        header(" http://localhost/hotelurbano/entrada/login.php");
                        exit();
                    }
                    
                    
                  
                    $sql = "SELECT * FROM clientes WHERE id_cliente =  $id_cliente";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                    ?>
            <fieldset>
                <div class="title">
                    <p>Deletar conta:</p>
                </div>
                <br>
               <div class= "email-delete">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
         <small></small>
               </div>
         <br> 
               <div class="senha-delete">
         <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha" maxlength="8">
          
                <div class="icon-eye">
                            <img src="http://localhost/hotelurbano/entrada/profile/img/eye.png" id="eye" style="width: 20px;">
                        </div>
                <small></small>
               </div>
            <br>       
    
            </fieldset>
            <br>
            <div class="deletar">
            <button type="submit" onclick=" return Validar() ">Deletar conta</button>
            </div>
            <?php             }
                    } else {
                        echo "<p>Impossível realizar ação.</p>";
                    }              
?>
      </form>
    <script>



//mostrar senha 
let btn = document.querySelector('#eye');


btn.addEventListener('click', () => {
  let inputSenha = document.querySelector('#senha')

  if (inputSenha.getAttribute('type') == 'password') {
    inputSenha.setAttribute('type', 'text')
    btn.setAttribute("src", "http://localhost/hotelurbano/entrada/profile/img/hide.png")

  } else {
    inputSenha.setAttribute('type', 'password')
    btn.setAttribute("src", "http://localhost/hotelurbano/entrada/profile/img/eye.png")
  }
})


















const email = document.getElementById('email')
const password = document.getElementById('senha')

//message 
function errorValidation(input, message) {
  const FormControl = input.parentElement
  const small = FormControl.querySelector('small')
  small.innerText = message

}
function Validar() {
  if (email.value == "") {
    errorValidation(email, "Preencha o campo email.")
    email.classList.add("errorInput")

  } else if ((email.value.indexOf("@") == -1 || email.value.indexOf(".") == -1 || (email.value.indexOf(".") - email.value.indexOf("@") == 1))) {
    errorValidation(email, "'@' necessário e '.' após o endereço informado.")
    email.classList.add("errorInput")
 
  } else {
    errorValidation(email, "")
    email.classList.remove("errorInput")
  }

  if (password.value == "") {
    errorValidation(password, "Preencha o campo senha.")
    password.classList.add("errorInput")
    return false;
  } else {
    errorValidation(password, "")
    password.classList.remove("errorInput")

  }   
  return true;
}







    </script>
</body>
</html>   