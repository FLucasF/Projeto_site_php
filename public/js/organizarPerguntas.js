
const backBtn = document.querySelector(".btn-voltar");
const pergunta = document.querySelector(".pergunta")
const resposta = document.querySelector("#resposta-correta")


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
            position: "center", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
                background: "linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(121,9,9,1) 35%, rgba(0,212,255,1) 100%)",
            }
        }).showToast();
        pontuacao = parseInt(pontuacao) + 20;
        localStorage.setItem('pontuacao', pontuacao.toString());
        //MUDANDO DE PÁGINA, MAS COMO FAZER ISSO PARA MUDAR PARA ''PRÓXIMA''?
        window.location.replace('/segPergunta');
    } else {
        Toastify({
            text: "This is a toast",
            duration: 3000,
            destination: "https://github.com/apvarun/toastify-js",
            newWindow: true,
            close: true,
            gravity: "top", // `top` or `bottom`
            position: "center", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
                background: "#e8510b",
            },
            onClick: function(){} // Callback after click
        }).showToast();
    }

}


