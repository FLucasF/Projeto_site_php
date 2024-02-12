const backBtn = document.querySelector(".btn-voltar");
const Abtn = document.querySelector(".btn-a");
const Bbtn = document.querySelector(".btn-b");
const Cbtn = document.querySelector(".btn-c");
const Dbtn = document.querySelector(".btn-d");
const pergunta = document.querySelector(".pergunta")



//colocando texto
//Abtn.textContent = "teste";

//pegando o texto do botão
//Abtn.addEventListener("click", (e) => {
//    let textoBotaoA = Abtn.textContent;
//    console.log(textoBotaoA);
//})

//Chamando função para verificar se esta igual
Abtn.addEventListener("click", (e) => {
    let texto = Abtn.textContent;
    verificacao(texto);

});


function verificacao(texto) {
    if(texto === "Entrar em contato com o banco utilizando canais oficiais (como app do banco ou telefone do gerente).") {
        console.log("FUNCIONOU");
    } else {
        console.log("NÃO FUNCIONOU");
    }
}
