//mostrar senha 
let btn = document.querySelector('#eye')

btn.addEventListener('click', () => {
  let inputSenha = document.querySelector('#password')

  if (inputSenha.getAttribute('type') == 'password') {
    inputSenha.setAttribute('type', 'text')
    btn.setAttribute("src", "http://localhost/hotelurbano/entrada/profile/img/hide.png")

  } else {
    inputSenha.setAttribute('type', 'password')
    btn.setAttribute("src", "http://localhost/hotelurbano/entrada/profile/img/eye.png")
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
const form = document.querySelector('form')

function validarCPF(cpf) {
  cpf = cpf.replace(/[^\d]+/g, ''); // Remove caracteres não numéricos

  if (cpf.length !== 11) {
    return false;
  }

  let sum = 0;
  let checkDigit;

  
  if (/^(\d)\1+$/.test(cpf)) {
    return false;
  }


  for (let i = 0; i < 9; i++) {
    sum += parseInt(cpf.charAt(i)) * (10 - i);
  }

  checkDigit = 11 - (sum % 11);
  if (checkDigit > 9) {
    checkDigit = 0;
  }

  if (parseInt(cpf.charAt(9)) !== checkDigit) {
    return false;
  }


  sum = 0;
  for (let i = 0; i < 10; i++) {
    sum += parseInt(cpf.charAt(i)) * (11 - i);
  }

  checkDigit = 11 - (sum % 11);
  if (checkDigit > 9) {
    checkDigit = 0;
  }

  if (parseInt(cpf.charAt(10)) !== checkDigit) {
    return false;
  }

  return true;
}
//message 
function errorValidation(input, message) {
  const FormControl = input.parentElement
  const small = FormControl.querySelector('small')
  small.innerText = message

}



form.addEventListener("submit", (e) => Validar(e))

function Validar(e) {
 
  if (email.value == "") {
    errorValidation(email, "Preencha o campo email.")
    email.classList.add("errorInput")
    e.preventDefault()
    email.classList.remove("successInput")
    

  } else if ((email.value.indexOf("@") == -1 || email.value.indexOf(".") == -1 || (email.value.indexOf(".") - email.value.indexOf("@") == 1))) {
    errorValidation(email, "'@' necessário e '.' após o endereço informado.")
    email.classList.add("errorInput")
    email.classList.remove("successInput")
    e.preventDefault()
  } else {
    errorValidation(email, "")
    email.classList.add("successInput")
  }

  if (cpf.value === "") {
    errorValidation(cpf, "Preencha o campo CPF.");
    cpf.classList.add("errorInput");
    e.preventDefault();
    cpf.classList.remove("successInput");
  } else if (!validarCPF(cpf.value)) {
    errorValidation(cpf, "CPF inválido.");
    cpf.classList.add("errorInput");
    e.preventDefault()
    cpf.classList.remove("successInput");
   
  } else {
    errorValidation(cpf, "");
    cpf.classList.remove("errorInput");
    cpf.classList.add("successInput");
  }



function validarNomeCompleto(nomeCompleto) {
  var regex = /^[a-zA-ZÀ-ÿ]+(\s[a-zA-ZÀ-ÿ]+)*$/; 
  return regex.test(nomeCompleto);
}


if (name_completed.value == "") {
  errorValidation(name_completed, "Preencha o seu nome completo.");
  name_completed.classList.add("errorInput");
  e.preventDefault();
  name_completed.classList.remove("successInput")
} else if (!validarNomeCompleto(name_completed.value)) {
  errorValidation(name_completed, "Nome completo inválido. Use apenas letras e espaços.");
  name_completed.classList.add("errorInput");
  e.preventDefault()
  name_completed.classList.remove("successInput")
} else {
  errorValidation(name_completed, "");
  name_completed.classList.add("successInput")
}



  



function validarSenha(senha) {
  return senha.length >= 8; 
}


if (password.value == "") {
  errorValidation(password, "Preencha o campo senha.");
  password.classList.add("errorInput");
  e.preventDefault();
  password.classList.remove("successInput")
} else if (!validarSenha(password.value)) {
  errorValidation(password, "A senha deve ter pelo menos 8 caracteres.");
  password.classList.add("errorInput");
  password.classList.remove("successInput")
  e.preventDefault()
} else {
  errorValidation(password, "");
  password.classList.add("successInput")
}

if (confirmpassword.value == "") {
  errorValidation(confirmpassword, "Preencha o campo de confirmação.");
  confirmpassword.classList.add("errorInput");
  e.preventDefault();
  confirmpassword.classList.remove("successInput")
} else if (confirmpassword.value !== password.value) {
  errorValidation(confirmpassword, "As senhas informadas não coincidem.");
  confirmpassword.classList.add("errorInput");
  password.classList.add("errorInput");
  confirmpassword.classList.remove("successInput")
  e.preventDefault()
} else {
  errorValidation(confirmpassword, "");
  confirmpassword.classList.add("successInput")
  
}



if (rua.value == "") {
  errorValidation(rua, "Preencha o campo rua.");
  rua.classList.add("errorInput");
  e.preventDefault();
  rua.classList.remove("successInput")
} else {
  errorValidation(rua, "");
  rua.classList.add("successInput")
}


function validarNumeroCasa(numeroCasa) {
  var regex = /^[0-9]+$/; 
  return regex.test(numeroCasa);
}


if (number_house.value == "") {
  errorValidation(number_house, "Preencha o número da sua casa.");
  number_house.classList.add("errorInput");
  e.preventDefault();
  number_house.classList.remove("successInput")
} else if (!validarNumeroCasa(number_house.value)) {
  errorValidation(number_house, "Número da casa inválido. Use apenas dígitos numéricos.");
  number_house.classList.add("errorInput");
  e.preventDefault()
  number_house.classList.remove("successInput")
} else {
  errorValidation(number_house, "");
  number_house.classList.add("successInput")
}


function validarBairro(bairro) {
  return bairro.trim() !== ""; 
}


if (bairro.value == "") {
  errorValidation(bairro, "Preencha o campo bairro.");
  bairro.classList.add("errorInput");
  e.preventDefault();
  bairro.classList.remove("successInput")
} else if (!validarBairro(bairro.value)) {
  errorValidation(bairro, "Bairro inválido.");
  bairro.classList.add("errorInput");
  e.preventDefault()
  bairro.classList.remove("successInput")
} else {
  errorValidation(bairro, "");
  bairro.classList.add("successInput")
}





function validarCidade(cidade) {
  return cidade.trim() !== "";
}



if (cidade.value == "") {
  errorValidation(cidade, "Preencha o campo cidade.");
  cidade.classList.add("errorInput");
  e.preventDefault();
  cidade.classList.remove("successInput")
} else if (!validarCidade(cidade.value)) {
  errorValidation(cidade, "Cidade inválida.");
  cidade.classList.add("errorInput");
  e.preventDefault()
  cidade.classList.remove("successInput")
} else {
  errorValidation(cidade, "");
  cidade.classList.add("successInput")
}
function validarCEP(cep) {
  var regex = /^[0-9]{5}-[0-9]{3}$/;
  return regex.test(cep);
}

if (cep.value == "") {
  errorValidation(cep, "Preencha o campo CEP.");
  cep.classList.add("errorInput");
  e.preventDefault();
  cep.classList.remove("successInput")
} else if (!validarCEP(cep.value)) {
  errorValidation(cep, "CEP inválido. O formato deve ser: 12345-678");
  cep.classList.add("errorInput");
  e.preventDefault()
  cep.classList.remove("successInput")
} else {
  errorValidation(cep, "");
  cep.classList.add("successInput")
}



}








  



