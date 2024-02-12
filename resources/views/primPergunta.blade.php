<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/perguntas.css') }}" type="text/css">
    <script src="{{ asset('js/organizarPerguntas.js') }}" defer></script>
</head>

<body>
    <div class="container">
        <h1>Primeira pergunta</h1>
        <img src="{{ asset('img/undraw_quiz.svg') }}">
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
            aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
        </p>
        <div class="btn-text">
            <div class="description">
                <button class="btn-a">Entrar em contato com o banco utilizando canais oficiais (como app do banco ou telefone do gerente).</button>
            </div>
        </div>
        <div class="btn-text">
            <div class="description">
                <button class="btn-b">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</button>
            </div>
        </div>
        <div class="btn-text">
            <div class="description">
                <button class="btn-c">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</button>
            </div>
        </div>
        <div class="btn-text">
            <div class="description">
                <button class="btn-d">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</button>
            </div>
        </div>
    </div>

    <div class="btn-text">
        <div class="description">
            <a class="btn-voltar" href="/menu">Menu Principal</a>

            <!-- <button class="btn-voltar">Menu Principal</button> -->
        </div>
    </div>
</body>

</html>
