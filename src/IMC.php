<?php

namespace Dojo;

class IMC
{

    public function calcula($peso, $altura)
    {
        if ($peso <= 0) {
            throw new \InvalidArgumentException("Peso nao pode ser menor que zero");
        }
        if ($altura <= 0) {
            throw new \InvalidArgumentException("Altura nao pode ser menor que zero");
        }

        $imc = $peso / ($altura * $altura);

        if ($imc < 16) {
            $classificacao = 'Magreza grave';
        } elseif ($imc >= 16 && $imc < 17) {
            $classificacao = 'Magreza moderada';
        } elseif ($imc >= 17 && $imc < 18.5) {
            $classificacao = 'Magreza leve';
        } elseif ($imc >= 18.5 && $imc < 25) {
            $classificacao = 'Saudavel';
        } elseif ($imc >= 25 && $imc < 30) {
            $classificacao = 'Sobrepeso';
        } elseif ($imc >= 30 && $imc < 35) {
            $classificacao = 'Obesidade Grau I';
        } elseif ($imc >= 35 && $imc < 40) {
            $classificacao = 'Obesidade Grau II';
        } else {
            $classificacao = 'Obesidade Grau III';
        }
        return [
            'imc' => round($imc, 2),
            'classificacao' => $classificacao
        ];
    }
}
