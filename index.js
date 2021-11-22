var local2;
function validadorEmpresa() {
    var nome = document.getElementById("nome").value
    var email = document.getElementById("msgemail").value
    var cnpj = document.getElementById("cnpj").value
    var telefone = document.getElementById("telefone").value
    var senha = document.getElementById("senha").value
    var Confsenha = document.getElementById("confsenha").value

    var listause = new Object();
    listause.nome = nome;
    listause.email = email;
    listause.cnpj = cnpj;
    listause.telefone = telefone;
    listause.senha = senha;
    var str2 = JSON.stringify(listause)
    local2 = str2

    if (nome == "") {
        alert("nome inválido");
    }
    else if (email == "") {
        alert("digite seu E-mail");
    }
    else if (cnpj == "") {
        alert("digite seu CNPJ");
    }
    else if (telefone == "") {
        alert("digite seu Telefone");
    }
    else if (senha == "" || Confsenha == "") {
        alert("digite a senha");
    }
    else if (!senha == Confsenha) {
        alert("as senhas não coincidem");
    }
    else {
        validacad2()
    }


}



function ApenasLetras(e, t) {
    try {
        if (window.event) {
            var charCode = window.event.keyCode;
        } else if (e) {
            var charCode = e.which;
        } else {
            return true;
        }
        if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
            return true;
        else
            return false;
    } catch (err) {
        alert(err.Description);
    }
}
function validacaoEmail(field) {
    usuario = field.value.substring(0, field.value.indexOf("@"));
    dominio = field.value.substring(field.value.indexOf("@") + 1, field.value.length);

    if ((usuario.length >= 1) &&
        (dominio.length >= 3) &&
        (usuario.search("@") == -1) &&
        (dominio.search("@") == -1) &&
        (usuario.search(" ") == -1) &&
        (dominio.search(" ") == -1) &&
        (dominio.search(".") != -1) &&
        (dominio.indexOf(".") >= 1) &&
        (dominio.lastIndexOf(".") < dominio.length - 1)) {
        document.getElementById("msgemail").innerHTML = "E-mail válido";
        alert("E-mail valido");
    }
    else {
        document.getElementById("msgemail").innerHTML = "<font color='red'>E-mail inválido </font>";
        alert("E-mail invalido");
    }
}

/* Máscaras ER */
function mascara(o, f) {
    v_obj = o
    v_fun = f
    setTimeout("execmascara()", 1)
}
function execmascara() {
    v_obj.value = v_fun(v_obj.value)
}
function mtel(v) {
    v = v.replace(/\D/g, ""); //Remove tudo o que não é dígito
    v = v.replace(/^(\d{2})(\d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v = v.replace(/(\d)(\d{4})$/, "$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}
function id(el) {
    return document.getElementById(el);
}
window.onload = function () {
    id('telefone').onkeyup = function () {
        mascara(this, mtel);

    }
}
function FormataCnpj(campo, teclapres) {

    var tecla = teclapres.keyCode;
    var vr = new String(campo.value);
    vr = vr.replace(".", "");
    vr = vr.replace("/", "");
    vr = vr.replace("-", "");
    tam = vr.length + 1;
    if (tecla != 14) {
        if (tam == 3)
            campo.value = vr.substr(0, 2) + '.';
        if (tam == 6)
            campo.value = vr.substr(0, 2) + '.' + vr.substr(2, 5) + '.';
        if (tam == 10)
            campo.value = vr.substr(0, 2) + '.' + vr.substr(2, 3) + '.' + vr.substr(6, 3) + '/';
        if (tam == 15)
            campo.value = vr.substr(0, 2) + '.' + vr.substr(2, 3) + '.' + vr.substr(6, 3) + '/' + vr.substr(9, 4) + '-' + vr.substr(13, 2);
    }
}



function validarCNPJ(cnpj) {

    cnpj = cnpj.replace(/[^\d]+/g, '');

    if (cnpj == '') return false;

    if (cnpj.length != 14)
        return false;

    // Elimina CNPJs invalidos conhecidos
    if (cnpj == "00000000000000" ||
        cnpj == "11111111111111" ||
        cnpj == "22222222222222" ||
        cnpj == "33333333333333" ||
        cnpj == "44444444444444" ||
        cnpj == "55555555555555" ||
        cnpj == "66666666666666" ||
        cnpj == "77777777777777" ||
        cnpj == "88888888888888" ||
        cnpj == "99999999999999")
        return false;

    // Valida DVs
    tamanho = cnpj.length - 2
    numeros = cnpj.substring(0, tamanho);
    digitos = cnpj.substring(tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
        soma += numeros.charAt(tamanho - i) * pos--;
        if (pos < 2)
            pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(0))
        return false;

    tamanho = tamanho + 1;
    numeros = cnpj.substring(0, tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
        soma += numeros.charAt(tamanho - i) * pos--;
        if (pos < 2)
            pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(1))
        return false;

    return true;

}

var n5 = 0;
var n6 = 0;
var ok4 = false;
function validacad2() {

    if (localStorage.length == 0) {
        var l5 = "listause";
        var j5 = l5 + n5;
        localStorage.setItem(j5, local2);
        n5++;
    }
    else {

        var Usuario6 = document.getElementById("msgemail").value;
        for (let index = 0; index < localStorage.length; index++) {
            var l6 = "listause";
            var j6 = l6 + n6;
            n6++
            var validar6 = localStorage.getItem(j6)
            var obj6 = JSON.parse(validar6);
            if (obj6.email == Usuario6) {
                n6 = 0;
                break;
            }
            if (index + 1 == localStorage.length) {
                ok4 = true;
            }
        }
        if (ok4 == true) {
            var l5 = "listause";
            var j5 = l5 + n5;
            localStorage.setItem(j5, local2);
            n5++;
            ok4 = false;
        }
    }
}






var local;

function validadorAgricultor() {
    var nome1 = document.getElementById("nomeagr").value;
    var email1 = document.getElementById("msgemailagr").value;
    var telefoneagr = document.getElementById("telefone").value;
    var senha1 = document.getElementById("senhaagr").value;
    var Confsenha1 = document.getElementById("confsenhaagr").value;


    var listauser = new Object();
    listauser.nome = nome1;
    listauser.email = email1;
    listauser.telefone = telefoneagr;
    listauser.senha = senha1;
    var str = JSON.stringify(listauser)
    local = str


    if (nome1 == "") {
        alert("nome inválido");
    } else if (email1 == "") {
        alert("digite seu E-mail");
    } else if (telefoneagr == "") {
        alert("digite seu Telefone");
    } else if (senha1 == "" && Confsenha1 == "") {
        alert("digite a senha");
    }
    else if (!senha1 == Confsenha1) {
        alert("as senhas não coincidem");
    } else {
        validacad()

    }
}

function validacaoEmail1(field) {
    usuario = field.value.substring(0, field.value.indexOf("@"));
    dominio = field.value.substring(field.value.indexOf("@") + 1, field.value.length);

    if ((usuario.length >= 1) &&
        (dominio.length >= 3) &&
        (usuario.search("@") == -1) &&
        (dominio.search("@") == -1) &&
        (usuario.search(" ") == -1) &&
        (dominio.search(" ") == -1) &&
        (dominio.search(".") != -1) &&
        (dominio.indexOf(".") >= 1) &&
        (dominio.lastIndexOf(".") < dominio.length - 1)) {
        document.getElementById("msgemailagr").innerHTML = "E-mail válido";
        alert("E-mail valido");
    }
    else {
        document.getElementById("msgemailagr").innerHTML = "<font color='red'>E-mail inválido </font>";
        alert("E-mail invalido");
    }
}
var ok2 = false;
function loginempresa() {
    var n7 = 0;
    var comparacnpj = document.getElementById("cnpj1").value
    var comparasenha = document.getElementById("senha2").value
    for (let index2 = 0; index2 < localStorage.length; index2++) {
        var l7 = "listause";
        var j7 = l7 + n7;
        n7++
        var validar7 = localStorage.getItem(j7)
        var obj7 = JSON.parse(validar7);
        console.log(j7)
        if (obj7.cnpj == comparacnpj && obj7.senha == comparasenha) {
            n7 = 0;
            alert("Login efetuado com sucesso")
            break;
        }

        if (index2 + 1 == localStorage.length) {
            ok2 = true;
        }

    }
    if (ok2 == true) {
        alert("Cnpj ou senha incorreta, tente novamente")
        ok2 = false;
    }

}

var ok1 = false;
function loginagricultor() {
    var n2 = 0;
    var comparaemail = document.getElementById("email4").value
    var comparasenha = document.getElementById("senha3").value
    for (let index1 = 0; index1 < localStorage.length; index1++) {
        var l2 = "listauser";
        var j2 = l2 + n2;
        n2++
        var validar2 = localStorage.getItem(j2)
        var obj2 = JSON.parse(validar2);
        console.log(j2)
        if (obj2.email == comparaemail && obj2.senha == comparasenha) {
            n2 = 0;
            alert("Login efetuado com sucesso")
            console.log(obj2.email)
            console.log(comparaemail)
            break;
        }


        if (index1 + 1 == localStorage.length) {
            ok1 = true;
        }

    }
    if (ok1 == true) {
        alert("Senha ou e-mail incorreta")
        ok1 = false;
    }


}

function apagar() {
    localStorage.clear();
}
var n = 0;
var n1 = 0;
var ok = false;

function validacad() {

    if (localStorage.length == 0) {
        var l = "listauser";
        var j = l + n;
        localStorage.setItem(j, local);
        n++;
    }
    else {

        var Usuario = document.getElementById("msgemailagr").value;
        for (let index = 0; index < localStorage.length; index++) {
            var l1 = "listauser";
            var j1 = l1 + n1;
            n1++
            var validar1 = localStorage.getItem(j1)
            var obj1 = JSON.parse(validar1);
            if (obj1.email == Usuario) {
                n1 = 0;
                break;
            }
            if (index + 1 == localStorage.length) {
                ok = true;
            }
        }
        if (ok == true) {
            var l = "listauser";
            var j = l + n;
            localStorage.setItem(j, local);
            n++;
            ok = false;
        }
    }
}

// function tiraemp(){



// }

// var salvar;
// function tiraagr(){

//     var n8= 0;
//     for (let index1 = 0; index1 < localStorage.length; index1++) {
//         var l8= "listauser";
//         var j8 = l8 + n8;
//         n8++
//         var validar8 = localStorage.getItem(j8)
//         salvar = validar8;
//         console.log(j8)
//         console.log(salvar)
//         confirma = false;
//     }
// }

// function retorno(){
//     if (confirma == true) {
//     localStorage.setItem("teste", salvar)

//     }

// }
// var confirma=false;

// function confirmar(){
//     confirma = true
//     localStorage.clear();

// }