// 2º exercício
// Crie uma função que dado um intervalo (entre x e y) exiba todos número pares:
// function pares(x, y) {
// // código aqui
// }
// pares(32, 321);


menor=function (x,y){
    if(x>y){
    return y
}
else {return x}
}

maior=function (x,y){
    if(x>y){
    return x;
}
else {return y}
}

pares=function(x, y){
    x1=menor(x,y);
    x2=maior(x,y);

    while (x1<x2){
        if(x1%2 == 0){
            console.log(x1);
        }
        x1++;
    }
    
}
pares(450,30);

