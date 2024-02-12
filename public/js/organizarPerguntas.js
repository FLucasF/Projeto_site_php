
const backBtn = document.querySelector(".btn-voltar");
// const Abtn = document.querySelector(".btn-a");
// const Bbtn = document.querySelector(".btn-b");
// const Cbtn = document.querySelector(".btn-c");
// const Dbtn = document.querySelector(".btn-d");
const pergunta = document.querySelector(".pergunta")
const resposta = document.querySelector("#resposta-correta")



//colocando texto
//Abtn.textContent = "teste";

//pegando o texto do botão
//Abtn.addEventListener("click", (e) => {
//    let textoBotaoA = Abtn.textContent;
//    console.log(textoBotaoA);
//})

//Chamando função para verificar se esta igual
// Abtn.addEventListener("click", (e) => {
//     let texto = Abtn.textContent;
//     verificacao(texto);
//
// });


function verificacao($resposta, $respostaCorreta) {
    let pontuacao = localStorage.getItem('pontuacao');

    if($resposta === $respostaCorreta) {
        Toastify({
            text: "This is a toast",
            duration: 3000,
            destination: "https://github.com/apvarun/toastify-js",
            newWindow: true,
            close: true,
            gravity: "top", // `top` or `bottom`
            position: "left", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
                background: "linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(121,9,9,1) 35%, rgba(0,212,255,1) 100%)",
            }
        }).showToast();
        pontuacao = parseInt(pontuacao) + 20;
        localStorage.setItem('pontuacao', pontuacao.toString());
    }



    Toastify({
        text: "This is a toast",
        duration: 3000,
        destination: "https://github.com/apvarun/toastify-js",
        newWindow: true,
        close: true,
        gravity: "top", // `top` or `bottom`
        position: "left", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
            background: "#e8510b",
        },
        onClick: function(){} // Callback after click
    }).showToast();
}


