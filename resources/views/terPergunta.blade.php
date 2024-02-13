<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/perguntas.css') }}" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="{{ asset('js/organizarPerguntas.js') }}" defer></script>
</head>

<body>
    <div class="container">
        <h1>Pergunta Três</h1>
            <img src="{{ asset('img/undraw_quiz.svg') }}">
            <p>{{ $perguntas['pergunta'] }}
            </p>
            <input id="resposta-correta" value="{{ $perguntas['resposta'] }}" hidden />
        @foreach($perguntas['alternativas'] as $key => $pergunta)
            <div class="btn-text">
                <div class="description">
                    <button class="btn-a" onclick="verificacao('{{ $key }}', '{{ $perguntas['resposta'] }}')">{{ $pergunta }}</button>
                </div>
            </div>
        @endforeach
    </div>

    <div class="btn-text">
        <div class="description">
            <a class="btn-voltar" href="/menu">Menu Principal</a>
        </div>
    </div>
</body>
</html>
