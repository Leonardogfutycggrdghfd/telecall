function validarNome() {
            var nomeInput = document.getElementById('nome2');
            var nomeErro = document.getElementById('nomeErro');
            var nome = nomeInput.value.trim();

            if (nome === '') {
                nomeErro.textContent = 'Por favor, insira um nome.';
                return false;
            }

            // Adicione outras condições de validação conforme necessário

            // Limpar mensagem de erro se o nome for válido
            nomeErro.textContent = '';
            return true;
        }
function validarEmail() {
var emailInput = document.getElementById('email');
var emailErro = document.getElementById('emailErro');
var email = emailInput.value.trim();
        
// Expressão regular para validar o formato do e-mail
var regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        
if (email === '') {
    emailErro.textContent = 'Por favor, insira um e-mail.';
    return false;
                    }
        
    if (!regexEmail.test(email)) {
    emailErro.textContent = 'E-mail inválido. Por favor, insira um e-mail válido.';
    return false;
                    }
        
    // Limpar mensagem de erro se o e-mail for válido
    emailErro.textContent = '';
    return true;
                }

                

 
function validarCPF() {
    var cpfInput = document.getElementById('CPF');
    var cpfErro = document.getElementById('cpfErro');
    var cpf = cpfInput.value.replace(/[^\d]/g, ''); // Remover caracteres não numéricos

    if (cpf === '' || cpf.length !== 11) {
    cpfErro.textContent = 'CPF inválido. Por favor, insira um CPF válido.';
    return false;
            }

    // Verificar se todos os dígitos são iguais (caso especial)
    if (/^(\d)\1+$/.test(cpf)) {
    cpfErro.textContent = 'CPF inválido. Todos os dígitos são iguais.';
    return false;
            }

    // Calcular e verificar os dígitos verificadores
    var soma = 0;
    for (var i = 0; i < 9; i++) {
        soma += parseInt(cpf.charAt(i)) * (10 - i);
            }

    var resto = (soma * 10) % 11;
    var digitoVerificador1 = (resto === 10 || resto === 11) ? 0 : resto;

    if (digitoVerificador1 !== parseInt(cpf.charAt(9))) {
    cpfErro.textContent = 'CPF inválido. Digito verificador 1 incorreto.';
    return false;
            }

    soma = 0;
    for (var i = 0; i < 10; i++) {
    soma += parseInt(cpf.charAt(i)) * (11 - i);
            }

    resto = (soma * 10) % 11;
    var digitoVerificador2 = (resto === 10 || resto === 11) ? 0 : resto;

    if (digitoVerificador2 !== parseInt(cpf.charAt(10))) {
    cpfErro.textContent = 'CPF inválido. Digito verificador 2 incorreto.';
    return false;
            }

    // Limpar mensagem de erro se o CPF for válido
    cpfErro.textContent = '';
    return true;
        }


function validarEndereco() {
    var enderecoInput = document.getElementById('Endereco');
    var enderecoErro = document.getElementById('EnderecoErro');
    var endereco = enderecoInput.value.trim();

    if (endereco === '') {
    enderecoErro.textContent = 'Por favor, insira um endereço.';
    return false;
            }

    // Limpar mensagem de erro se o endereço for válido
    enderecoErro.textContent = '';
    return true;
        }


       
function validarTelefone() {
    var telefoneInput = document.getElementById('Telefone');
    var telefoneErro = document.getElementById('TelefoneErro');
    var telefone = telefoneInput.value.trim();

            // Expressão regular para validar o formato do telefone
    var regexTelefone = /^\d{10}$/;

    if (telefone === '') {
    telefoneErro.textContent = 'Por favor, insira um número de telefone.';
    return false;
            }

    if (!regexTelefone.test(telefone)) {
    telefoneErro.textContent = 'Número de telefone inválido. Use apenas números e sem espaços ou caracteres especiais.';
    return false;
            }

    // Limpar mensagem de erro se o telefone for válido
    telefoneErro.textContent = '';
    return true;
        }


        
function validarSenha() {
            var senhaInput = document.getElementById('Senha');
            var senhaErro = document.getElementById('senhaErro');
            var senha = senhaInput.value.trim();

            // Critérios de validação de senha
            var comprimentoMinimo = 8;
            var regexLetrasMaiusculas = /[A-Z]/;
            var regexLetrasMinusculas = /[a-z]/;
            var regexNumeros = /\d/;
            var regexCaracteresEspeciais = /[!@#$%^&*(),.?":{}|<>]/;

            // Verificar o comprimento mínimo
            if (senha.length < comprimentoMinimo) {
                senhaErro.textContent = 'A senha deve ter pelo menos ' + comprimentoMinimo + ' caracteres.';
                return false;
            }

            // Verificar a presença de letras maiúsculas, minúsculas, números e caracteres especiais
            if (!regexLetrasMaiusculas.test(senha) || 
                !regexLetrasMinusculas.test(senha) ||
                !regexNumeros.test(senha) ||
                !regexCaracteresEspeciais.test(senha)) {
                senhaErro.textContent = 'A senha deve incluir pelo menos uma letra maiúscula, uma letra minúscula, um número e um caractere especial.';
                return false;
            }

            // Limpar mensagem de erro se a senha for válida
            senhaErro.textContent = '';
            return true;
        }
   
   


            
        
      