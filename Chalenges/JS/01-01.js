// 1º exercício
// Crie uma função que dado o objeto a seguir:
//
// var endereco = {
// rua: "Rua dos pinheiros",
// numero: 1293,
// bairro: "Centro",
// cidade: "São Paulo",
// uf: "SP"
// };
// Retorne o seguinte conteúdo:
// O usuário mora em São Paulo / SP, no bairro Centro, na rua "Rua dos Pinheiros" com
// no 1293.

var endereco = {
    rua: "Rua dos pinheiros",
    numero: 1293,
    bairro: "Centro",
    cidade: "São Paulo",
    uf: "SP"
  };


 document.write( "<h2>O usuário mora em ",
    endereco['cidade'],"/",
    endereco['uf']," na região ",
    endereco['bairro']," na rua ",
    endereco['rua'],", ",
    endereco['numero'],".</h2>"
);