
let btn = document.querySelector('#eye')

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


//validação

const name = document.getElementById('nome')
const cpf = document.getElementById('cpf')
const email = document.getElementById('email')
const senha = document.getElementById('senha')
const rua = document.getElementById('rua')
const number_house = document.getElementById('numero')
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
     
  }
  else if ((email.value.indexOf("@") == -1 || email.value.indexOf(".") == -1 || (email.value.indexOf(".") - email.value.indexOf("@") == 1))) {
    errorValidation(email, "'@' necessário e '.' após o endereço informado.")
    email.classList.add("errorInput")
    email.classList.remove("successInput")
    e.preventDefault()
  } else {
    errorValidation(email, "")
    email.classList.add("successInput")
  }

  if (cpf.value == ""){
  
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

 if (nome.value == "") {

} else if (!validarNomeCompleto(nome.value)) {
  errorValidation(nome, "Nome completo inválido. Use apenas letras e espaços.");
  nome.classList.add("errorInput");
  e.preventDefault()
  nome.classList.remove("successInput")
} else {
  errorValidation(nome, "");
  nome.classList.add("successInput")
}




function validarSenha(senha) {
  return senha.length >= 8; 
}

if (senha.value == "") {

} else if (!validarSenha(senha.value)) {
  errorValidation(senha, "A senha deve ter pelo menos 8 caracteres.");
  senha.classList.add("errorInput");
  senha.classList.remove("successInput")
  e.preventDefault()
} else {
  errorValidation(senha, "");
  senha.classList.add("successInput")
}




function validarNumeroCasa(numeroCasa) {
  var regex = /^[0-9]+$/; 
  return regex.test(numeroCasa);
}


if (numero.value == "") {
 

} else if (!validarNumeroCasa(numero.value)) {
  errorValidation(numero, "Número da casa inválido. Use apenas dígitos numéricos.");
  numero.classList.add("errorInput");
  e.preventDefault()
  numero.classList.remove("successInput")
} else {
  errorValidation(numero, "");
  numero.classList.add("successInput")
}


function validarBairro(bairro) {
  return bairro.trim() !== ""; 
}


if (bairro.value == "") {

} else if (!validarBairro(bairro.value)) {
  errorValidation(bairro, "Bairro inválido.");
  bairro.classList.add("errorInput");
  e.preventDefault()
  bairro.classList.remove("successInput")
} else {
  errorValidation(bairro, "");
  bairro.classList.add("successInput")
}

function validarrua(rua) {
  return rua.trim() !== ""; 
}

if (rua.value == "") {

} else if (!validarrua(rua.value)) {
  errorValidation(rua, "Campo rua inválido.");
  rua.classList.add("errorInput");
  e.preventDefault()
  rua.classList.remove("successInput")
} else {
  errorValidation(rua, "");
  rua.classList.add("successInput")
}





function validarCidade(cidade) {
  return cidade.trim() !== "";
}



if (cidade.value == "") {
 
 
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


function validar() {
  if (confirm("Aviso: Para efetuar ação, será necessário o preenchimento dos dados solicitados a seguir. Deseja continuar?")) {
    window.location.href = "http://localhost/hotelurbano/user-deletar.php";
  }
}




  





  



