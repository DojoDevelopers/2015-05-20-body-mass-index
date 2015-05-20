<?php

namespace Dojo\Tests;

class IMCTest extends \PHPUnit_Framework_TestCase
{
    protected $imc;
    public function setUp()
    {
        $this->imc = new \Dojo\IMC();
    }

    public function tearDown()
    {
        unset($this->imc);
    }
    public function testInstanceOfIMCC()
    {
        $this->assertInstanceOf('Dojo\IMC', new \Dojo\IMC);
    }

    /**
     * @expectedException InvalidArgumentException
     * * @expectedExceptionMessage Peso nao pode ser menor que zero
     */
    public function testExceptionPesoNaoMaiorQueZero()
    {
        $peso = -30;
        $altura = 1.80;
        $this->imc->calcula($peso, $altura);
    }

    /**
     * @expectedException InvalidArgumentException
     * * @expectedExceptionMessage Altura nao pode ser menor que zero
     */
    public function testExceptionAlturaNaoMaiorQueZero()
    {
        $peso = 30;
        $altura = null;
        $this->imc->calcula($peso, $altura);
    }

    /**
     * @dataProvider getDataProvider
     */
    public function test($peso, $altura, $result)
    {
        $this->assertEquals($result, $this->imc->calcula($peso, $altura));
    }

    public function getDataProvider()
    {
        return [
            'testMagrezaGrave' => [
                50,
                1.80,
                [
                    'imc' => 15.43,
                    'classificacao' => 'Magreza grave'
                ]
            ],
            'testMagrezaModerada' => [
                51,
                1.75,
                [
                    'imc' => 16.65,
                    'classificacao' => 'Magreza moderada'
                ]
            ],
            'testMagrezaLeve' => [
                60,
                1.85,
                [
                    'imc' => 17.53,
                    'classificacao' => 'Magreza leve'
                ]
            ],
            'testCalculaSaudavel' => [
                83,
                1.85,
                [
                    'imc' => 24.25,
                    'classificacao' => 'Saudavel'
                ]
            ],

            'testCalculaSobrepeso' => [
                98,
                1.83,
                [
                    'imc' => 29.26,
                    'classificacao' => 'Sobrepeso'
                ]
            ],
            
            'testCalculaObesidadeGrauI' => [
                115,
                1.87,
                [
                    'imc' => 32.89,
                    'classificacao' => 'Obesidade Grau I'
                ]
            ],

            'testCalculaObesidadeGrauII' => [
                125,
                1.80,
                [
                    'imc' => 38.58,
                    'classificacao' => 'Obesidade Grau II'
                ]
            ],
            'testCalculaObesidadeGrauIII' => [
                150,
                1.75,
                [
                    'imc' => 48.98,
                    'classificacao' => 'Obesidade Grau III'
                ]
            ]
        ];
    }
}
