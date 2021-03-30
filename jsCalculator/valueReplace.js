let valor=document.getElementById("valor");
let percentagem=document.getElementById("percentagem");
let format={minimumFractionDigits:2, style:'currency', currency:'BRL'};
const ACEITA=document.getElementById("aceita");
const RESULT=document.getElementById("result");


function replaceV(x){
    return x.toLocaleString('pt-BR', format);
}


function consol(){
    ACEITA.innerHTML="O cliente aceita até: "+(replaceV(Number(valor.value)));
}

function percentagemToBrStyle(){
    let replace="";
    for (i=0; i<percentagem.value.length; i++){
        if(percentagem.value[i]==","){
            replace+=".";
        }
        else{replace+=percentagem.value[i]}
    }
    percentagem.value=replace;
}

let VALORES={};

function leadNewcore(x){

    if(x<200000){
        return 2000;
    }
    if(x<350000){
        return 3750;
    }
    if(x<500000){
        return 6000;
    }
    if(x<750000){
        return 10400;
    }
    if(x<1000000){
        return 14100;
    }
    if(x<1250000){
        return 16250;
    }
    if(x<1500000){
        return 19700;
    }
    if(x<1750000){
        return 24150;
    }
    if(x<2000000){
        return 28600;
    }
    if(x<2500000){
        return 32500;
    }
}

function echoResult(){
    let valueInHandP=VALORES.valor+(VALORES.valor*VALORES.percentagemReal);
    let valueinHandPP=valueInHandP*VALORES.percentagemReal;
    let valueFinal=VALORES.valor+valueinHandPP;
    RESULT.innerHTML=`<h2>Usando ${replaceV(VALORES.valor)} como base:</h2>
    Adicionando-se ${VALORES.percentagem}% desse valor ao mesmo, o preço sobe para:${replaceV(valueInHandP)}<br>
    usando o valor final de ${replaceV(valueInHandP)} como base o valor de ${VALORES.percentagem}% é ${replaceV(valueinHandPP)}, 
    resultando num preço final de ${replaceV(valueFinal)} (${replaceV(VALORES.valor)}+${replaceV(valueinHandPP)})<br>
    <hr>
    Com o valor final de <strong id="ff">${replaceV(valueFinal)}</strong> o preço do lead na New Core será 
    de <strong>${replaceV(leadNewcore(valueFinal))}</strong> (atualizado no dia 25-02-2020)<br>
    a liquidez deste negócio é :<strong>${replaceV(valueinHandPP-leadNewcore(valueFinal))}</strong> (${replaceV(valueinHandPP)} -
     ${replaceV(leadNewcore(valueFinal))})`
}

function valores(){
    VALORES={valor:Number(valor.value), percentagem:Number(percentagem.value),percentagemReal:(Number(percentagem.value))/100,};
    echoResult();
}

