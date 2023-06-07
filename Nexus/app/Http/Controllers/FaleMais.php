<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use PhpParser\Node\Stmt\Foreach_;

class FaleMais extends Controller
{
    public function calcularPlano($origem, $destino, $duracao)
    {
        $planos = [
            [
                'nome' => 'plano1',
                'minutos' => 30,
                'ddd' => [
                    '016' => [
                        [
                            'destino' => '011',
                            'preco' => 2.90
                        ]
                    ],

                    '017' => [
                        [
                            'destino' => '011',
                            'preco' => 2.70
                        ]
                    ],
                    '018' => [
                        [
                            'destino' => '011',
                            'preco' => 1.90
                        ]
                    ],
                    '011' => [
                        [
                            'destino' => '016',
                            'preco' => 1.90
                        ],
                        [
                            'destino' => '017',
                            'preco' => 1.70
                        ],
                        [
                            'destino' => '018',
                            'preco' => 0.90
                        ]
                    ]
                ]
            ],

            [
                'nome' => 'plano2',
                'minutos' => 60,
                'ddd' => [
                    '016' => [
                        [
                            'destino' => '011',
                            'preco' => 2.90
                        ]
                    ],

                    '017' => [
                        [
                            'destino' => '011',
                            'preco' => 2.70
                        ]
                    ],
                    '018' => [
                        [
                            'destino' => '011',
                            'preco' => 1.90
                        ]
                    ],
                    '011' => [
                        [
                            'destino' => '016',
                            'preco' => 1.90
                        ],
                        [
                            'destino' => '017',
                            'preco' => 1.70
                        ],
                        [
                            'destino' => '018',
                            'preco' => 0.90
                        ]
                    ]
                ]
            ],

            [
                'nome' => 'plano3',
                'minutos' => 120,
                'ddd' => [
                    '016' => [
                        [
                            'destino' => '011',
                            'preco' => 2.90
                        ]
                    ],

                    '017' => [
                        [
                            'destino' => '011',
                            'preco' => 2.70
                        ]
                    ],
                    '018' => [
                        [
                            'destino' => '011',
                            'preco' => 1.90
                        ]
                    ],
                    '011' => [
                        [
                            'destino' => '016',
                            'preco' => 1.90
                        ],
                        [
                            'destino' => '017',
                            'preco' => 1.70
                        ],
                        [
                            'destino' => '018',
                            'preco' => 0.90
                        ]
                    ]
                ]
            ],
        ];

        $resultado = [
            'complano' => [],
            'semplano' => []
        ];

        foreach ($planos as $plano) {
            $Nplano = $plano['nome'];
            $minutos = $plano['minutos'];
            $ddd = $plano['ddd'];

            foreach ($ddd as $DDDorigem => $destinos) {
                foreach ($destinos as $desti) {
                    $destinoDDD = $desti['destino'];
                    $preco = $desti['preco'];

                    if ($DDDorigem == $origem & $destinoDDD == $destino) {
                        if ($duracao > $minutos) {
                            $minExc = $duracao - $minutos;
                            $taxa = 1.10 * $preco;
                            $resultado['semplano'] = $minExc * $taxa;
                            $resultado['complano'] = $minExc * $preco;
                            return $resultado;
                        }
                        elseif ($duracao <= $minutos) {
                            $minExc = $minutos - $duracao;
                            $taxa = 1.10 * $preco;
                            $resultado['semplano'] = $minExc * $taxa;
                            $resultado['complano'] = 0;
                            return $resultado;
                        }
                    }

                }
            }
        }

        return $resultado;
    }

    public function FaleMais(Request $request)
    {
        $origem = $request->input('origem');
        $destino = $request->input('destino');
        $duracao = $request->input('duracao');
        $planos = $request->input('planos');

        $resultado = $this->calcularPlano($origem, $destino, $duracao);

        return view('falemais', ['origem' => $origem, 'destino' => $destino, 'duracao' => $duracao, 'planos' => $planos, 'resultado' => $resultado]);
    }
}
