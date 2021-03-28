//3º Exercício
// Escreva uma função que verifique se o vetor de habilidades passado possui a habilidade "Javascript"
// e retorna um booleano true/false caso exista ou não.
// function temHabilidade(skills) {
// // código aqui
// }
// var skills = ["Javascript", "ReactJS", "React Native"];
// temHabilidade(skills); // true ou false
// Dica: para verificar se um vetor contém um valor, utilize o método indexOf.


possui=function(agulha, palheiro){
    if(palheiro.indexOf(agulha)){
        console.log('True')
    }
}

var skills=["C++", "Python", "PHP", "Java", "JavaScript",
"React", "Angular"];

possui("javascript", skills);
