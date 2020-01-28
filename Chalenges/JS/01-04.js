// 4o exercício
// Escreva uma função que dado um total de anos de estudo retorna o quão experiente o usuário é:
// function experiencia(anos) {
// // código aqui
// }
// var anosEstudo = 7;
// experiencia(anosEstudo);
// De 0-1 ano: Iniciante
// De 1-3 anos: Intermediário
// De 3-6 anos: Avançado
// De 7 acima: Jedi Master


var proponente = 5;
xpe=function(x){
        if(x<=1){
            return "iniciante";
        }
            
        if(x>1 && x<=3){
            return "Intermediário";
        }
            
        if(x>3 && x<7){
            return "Avançado";
        }
            
        if(x>7){
            return "Jedi Master";
        }
}
console.log(xpe(proponente));