<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuaPerguntaController extends Controller
{
    public function quaPergunta()
    {
        $perguntas = $this->escolhendoAlternativas();

        return view('quaPergunta', compact('perguntas'));
    }

    public function escolhendoAlternativas(): array
    {
        $alternativas = [
            'alternativas' => [
                [
                    'pergunta' => 'Pergunta1',
                    'resposta' => 'alternativa3',
                    'alternativa1' => 'a1',
                    'alternativa2' => 'b1',
                    'alternativa3' => 'c1',
                    'alternativa4' => 'd1'
                ],
                [
                    'pergunta' => 'Pergunta2',
                    'resposta' => 'alternativa2',
                    'alternativa1' => 'a2',
                    'alternativa2' => 'b2',
                    'alternativa3' => 'c2',
                    'alternativa4' => 'd2'
                ],
                [
                    'pergunta' => 'Pergunta3',
                    'resposta' => 'alternativa4',
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
            'alternativas' => [
                'alternativa1' => $perguntaAleatoria['alternativa1'],
                'alternativa2' => $perguntaAleatoria['alternativa2'],
                'alternativa3' => $perguntaAleatoria['alternativa3'],
                'alternativa4' => $perguntaAleatoria['alternativa4']
            ]
        ];
    }
}
