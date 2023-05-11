function recebeN2(){
    var numero1= parseInt(document.getElementById("n1").value);
    var op= document.getElementById("op").value;
    var numero2= parseInt(document.getElementById("n2").value);
    var resultado;
    
    if ((op== "+") || (op== "soma")){
        resultado= numero1+numero2;
    } else if ((op== "-") || (op== "subtração")){
        resultado= numero1-numero2;
    } else if ((op== "*") || (op== "multiplicação")){
        resultado= numero1*numero2;
    } else if ((op== "/") || (op== "divisão")){
        resultado= numero1/numero2;
    }
    document.getElementById("resultado").innerHTML= resultado;
}
