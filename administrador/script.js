//validação

const email = document.getElementById('email')
const password = document.getElementById('password')

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

let btnConfirm = document.querySelector("#eye")

btnConfirm.addEventListener("click", () => {
  let inputConfirmSenha = document.querySelector("#confirmpassword")

  if (inputConfirmSenha.getAttribute('type') == 'password') {
    inputConfirmSenha.setAttribute('type', 'text')
    btnConfirm.setAttribute("src", "./img/hide.png")
  } else {
    inputConfirmSenha.setAttribute('type', 'password')
    btnConfirm.setAttribute("src", "./img/eye.png")
  }
});
