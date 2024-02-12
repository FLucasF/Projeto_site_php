<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimPerguntaController extends Controller
{

    public function primPergunta()
    {
        $perguntas = $this->escolhendoAlternativas();

        return view('primPergunta', compact('perguntas'));
    }

    private function escolhendoAlternativas(): array
    {
        $alternativas = [
            'alternativas' => [
                [
                    'pergunta' => 'Pergunta1',
                    'resposta' => 'RespostaCorreta1',
                    'alternativa1' => 'a1',
                    'alternativa2' => 'b1',
                    'alternativa3' => 'c1',
                    'alternativa4' => 'd1'
                ],

                [
                    'pergunta' => 'Pergunta2',
                    'resposta' => 'RespostaCorreta2',
                    'alternativa1' => 'a2',
                    'alternativa2' => 'b2',
                    'alternativa3' => 'c2',
                    'alternativa4' => 'd2'
                ],

                [
                    'pergunta' => 'Pergunta3',
                    'resposta' => 'RespostaCorreta3',
                    'alternativa1' => 'a3',
                    'alternativa2' => 'b3',
                    'alternativa3' => 'c3',
                    'alternativa4' => 'd3'
                ],
            ]
        ];

        $perguntaAleatoria = $alternativas['alternativas'][array_rand($alternativas['alternativas'])];

        return [
            'pergunta' => $perguntaAleatoria['pergunta'],
            'resposta' => $perguntaAleatoria['resposta'],
            'alternativa1' => $perguntaAleatoria['alternativa1'],
            'alternativa2' => $perguntaAleatoria['alternativa2'],
            'alternativa3' => $perguntaAleatoria['alternativa3'],
            'alternativa4' => $perguntaAleatoria['alternativa4']
        ];
    }
}
