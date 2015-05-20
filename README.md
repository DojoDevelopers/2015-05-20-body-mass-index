# Dojo Body Mass Index

## Desafio

Criar uma classe capaz de calcular o IMC(indice de massa corporal) e informar a classificação(Saudável, Sobrepeso, etc) baseada no IMC Calculado.


## Objetivo
- Utilizar o Data Provider para automatizar casos de teste 
- Validar Exceptions(exemplo ausência de campos, valores inválidos)

## Formula

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

IMC = Peso/(Altura^2)

A únidade de medida do **Peso** é em Kg e da **Altura** é em metros

## Classificações

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

## Exemplo 

### Cálculo

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

IMC = 83/(1,85^2) = 83/3,4225 = 24,25

### Classificação 
Saudável
### Outros exemplos
Peso          | Altura    | IMC       | Classificação
------------- | --------- | --------- | -------------
50            | 1,80      | 15,43     | Magreza grave
51            | 1,75      | 16,65     | Magreza moderada
60            | 1,85      | 17,85     | Magreza leve
83            | 1,85      | 24,25     | Saudável
98            | 1,83      | 29,26     | Sobrepeso
115           | 1,87      | 32,89     | Obesidade Grau I
125           | 1,80      | 38,58     | Obesidade Grau II (severa)
150           | 1,75      | 48,98     | Obesidade Grau III (mórbida)

## FeedBack
### Pontos positivos
- O desafio \*\*\*
- Objetivo atendido \*\*\*\*\*
- Novos métodos \*\*\*


### Pontos negativos
- Faltou interação dos participantes

### Coverege
100%

### Próximo MC
Wilton