# Dojo Body Mass Index

## Desafio

Criar uma classe capaz de calcular o IMC(indice de massa corporal) e informar a classificação(Saudável, Sobrepeso, etc) baseada no IMC Calculado.


### Objetivo
- Utilizar o Data Provider para automatizar casos de teste 
- Validar Exceptions(exemplo ausência de campos, valores inválidos)

### Formula

<math>
<mi>
IMC
</mi>
<mo>=</mo>
<mi>
<math>
<mfrac>
<mi>Peso</mi>
<msup><mi>Altura</mi><mn>2</mn></msup>
</mfrac>
</math>
</mi>
</math>

A únidade de medida do **Peso** é em Kg e da **Altura** é em metros

### Classificações

IMC           | Classificação
------------- | ------------------------------
< 16          | Magreza grave
16 a < 17     | Magreza moderada
17 a < 18,5   | Magreza leve
18,5 a < 25   | Saudável
25 a < 30     | Sobrepeso
30 a < 35     | Obesidade Grau I
35 a < 40     | Obesidade Grau II (severa)
≥ 40          | Obesidade Grau III (mórbida)

### Exemplo 

#### Cálculo

<math>
<mi>
IMC
</mi>
<mo>=</mo>
<mi>
<math>
<mfrac>
<mi>83</mi>
<msup><mi>1,85</mi><mn>2</mn></msup>
</mfrac>
</math>
</mi>
<mo>=</mo>
<mi>
<math>
<mfrac>
<mi>83</mi>
<mi>3,4225</mi>
</mfrac>
</math>
</mi>
<mo>=</mo> 
<mi>
24,25
</mi>
</math>

#### Classificação 
Saudável