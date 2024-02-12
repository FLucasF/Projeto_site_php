<?php

$json_str = '{"alternativas:" ' .
    '[{"pergunta":"Pergunta1", "resposta":"RespostaCorreta", "alternativa1":"a", "alternativa2":"b", "alternativa3":"c", "alternativa4":"d"},' .
    '{"pergunta":"Pergunta2", "resposta":"RespostaCorreta", "alternativa1":"a", "alternativa2":"b", "alternativa3":"c", "alternativa4":"d"},' .
    '{"pergunta":"Pergunta3", "resposta":"RespostaCorreta", "alternativa1":"a", "alternativa2":"b", "alternativa3":"c", "alternativa4":"d"},' .
    ']}';


$jsonObj = json_decode($json_str);
$alternativas = $jsonObj->alternativas;

foreach ($alternativas as $e) {
    echo "nome: $e->pergunta - resposta: $e->resposta - alternativa: $e->alternativa1";
}
https: //www.devmedia.com.br/trabalhando-com-json-em-php/26716
