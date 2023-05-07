//mostrar senha 
let btn = document.querySelector('#eye')

btn.addEventListener('click', () => {
  let inputSenha = document.querySelector('#password')

  if (inputSenha.getAttribute('type') == 'password') {
    inputSenha.setAttribute('type', 'text')
    btn.setAttribute("src", "profile/img/hide.png")

  } else {
    inputSenha.setAttribute('type', 'password')
    btn.setAttribute("src", "profile/img/eye.png")
  }
})

let btnConfirm = document.querySelector("#eye-2")

btnConfirm.addEventListener("click", () => {
  let inputConfirmSenha = document.querySelector("#confirmpassword")

  if (inputConfirmSenha.getAttribute('type') == 'password') {
    inputConfirmSenha.setAttribute('type', 'text')
    btnConfirm.setAttribute("src", "profile/img/hide.png")
  } else {
    inputConfirmSenha.setAttribute('type', 'password')
    btnConfirm.setAttribute("src", "profile/img/eye.png")
  }
});

//validação



const name_completed = document.getElementById('name_completed')
const cpf = document.getElementById('cpf')
const email = document.getElementById('email')
const password = document.getElementById('password')
const confirmpassword = document.getElementById('confirmpassword')
const rua = document.getElementById('rua')
const number_house = document.getElementById('number_house')
const bairro = document.getElementById('bairro')
const cidade = document.getElementById('cidade')
const cep = document.getElementById('cep')


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
    return false;
  } else {
    errorValidation(email, "")
    email.classList.remove("errorInput")
  }


  if (name_completed.value == "") {
    errorValidation(name_completed, "Preencha o seu nome completo.")
    name_completed.classList.add("errorInput")

  } else if (name_completed.value >= 0 && name_completed.value >= 9) {
    errorValidation(name_completed, "Valores númericos não são considerados.")
    name_completed.classList.add("errorInput")
    return false;
  } else {
    errorValidation(name_completed, "")
    name_completed.classList.remove("errorInput")
  }

  if (cpf.value.length > 14) {
    errorValidation(cpf, "Preencha o campo CEP.")
    cpf.classList.add("errorInput")

  } else if (cpf.value = "") {
    errorValidation(cpf, "Deve conter no máximo 14 caracteres.")
    cpf.classList.add("errorInput")
    return false;
  } else {
    errorValidation(cpf, "")
    cpf.classList.remove("errorInput")
  }

  if (password.value == "") {
    errorValidation(password, "Preencha o campo senha.")
    password.classList.add("errorInput")

  } else if (password.value.length < 8) {
    errorValidation(password, "Deve conter no mínimo 8 caracteres.")
    password.classList.add("errorInput")
    return false;
  } else {
    errorValidation(password, "")
    password.classList.remove("errorInput")
  }

  if (confirmpassword.value == "") {
    errorValidation(confirmpassword, "Preencha o campo de confirmação.")
    confirmpassword.classList.add("errorInput")

  } else if (confirmpassword.value.length < 8) {
    errorValidation(confirmpassword, "Deve conter no mínimo 8 caracteres.")
    confirmpassword.classList.add("errorInput")

  } else if (password.value !== confirmpassword.value) {
    errorValidation(confirmpassword, "Senhas informadas não coincidem.")
    confirmpassword.classList.add("errorInput")
    password.classList.add("errorInput")
    return false;

  } else {
    errorValidation(confirmpassword, "")
    confirmpassword.classList.remove("errorInput")
    password.classList.remove("errorInput")
  }

  if (rua.value == "") {
    errorValidation(rua, "Preencha o campo rua.")
    rua.classList.add("errorInput")


  } else {
    errorValidation(rua, "")
    rua.classList.remove("errorInput")
    return true;

  }

  if (number_house.value == "") {
    errorValidation(number_house, "Preencha o número da sua casa.")
    number_house.classList.add("errorInput")


  } else if (rua_number.value.length >= 5) {
    errorValidation(number_house, "No máximo 3 caracteres")
    number_house.classList.add("errorInput")
    return false;



  } else {
    errorValidation(number_house, "")
    number_house.classList.remove("errorInput")


  }

  if (bairro.value == "") {
    errorValidation(bairro, "Preencha o campo bairro.")
    bairro.classList.add("errorInput")


  } else {
    errorValidation(bairro, "")
    bairro.classList.remove("errorInput")
    return false;
  }

  if (cidade.value == "") {
    errorValidation(cidade, "Preencha o campo cidade.")
    cidade.classList.add("errorInput")



  } else {
    errorValidation(cidade, "")
    cidade.classList.remove("errorInput")
    return false;

  }

  if (cep.value == "") {
    errorValidation(cep, "Preencha o campo cep.")
    cep.classList.add("errorInput")
    return false;

  } else if (cep.value.length < 8) {
    errorValidation(cep, "Deve conter no mínimo 8 caracteres")
    cep.classList.add("errorInput")
    return false;


  }
  else {
    errorValidation(cep, "")
    cep.classList.remove("errorInput")
    return false;
  }

  return true;

}

