let inputMediaResultado = document.getElementById("mediaResultado");
let inputP3MinResultado = document.getElementById("p3MinResultado");
let inputResultadoText = document.getElementById("resultadoText");

let inputName = document.getElementById("name");
let inputP1 = document.getElementById("p1");
let inputP2 = document.getElementById("p2");
let inputP3 = document.getElementById("p3");

let btnCalculoMedia = document.getElementById("btnCalcMedia");
let btnCalcP3Min = document.getElementById("btnCalcP3Min");
let btnLimpar = document.getElementById("btnLimpar");

function calculoMedia(p1, p2, p3) {
    p1 = inputP1.value * 0.25;
    p2 = inputP2.value * 0.25;
    p3 = inputP3.value * 0.5;
    inputMediaResultado.value = p1 + p2 + p3;
    if (inputMediaResultado.value >= mediaMinima) {
    inputResultadoText.value = "Aluno aprovado! :)";
    } else {
    inputResultadoText.value = "Aluno reprovado :(";
    }
}

btnCalculoMedia.onclick = calculoMedia;

let mediaMinima = 6.2;

function calculoMinimoP3(p1, p2) {
    p1 = inputP1.value * 0.25;
    p2 = inputP2.value * 0.25;
    p3 = (mediaMinima - p1 - p2) / 0.5;
    inputP3MinResultado.value = p3;
}

btnCalcP3Min.onclick = calculoMinimoP3;

function limparDados() {
    // inputName.value = "";
    inputP1.value = "";
    inputP2.value = "";
    inputP3.value = "";
    inputMediaResultado.value = "";
    inputP3MinResultado.value = "";
    inputResultadoText.value = "";
}

btnLimpar.onclick = limparDados;
