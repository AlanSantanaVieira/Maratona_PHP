<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritiméticos</title>
</head>
<body>
<h1> Operadores Aritiméticos</h1>
    <?php
     $soma = 20 + 20;
     $subtracao = 10-5;
     $divisao = 5 / 2;
     $resto = 5 % 2;
     $multiplicacao = 5 * 3;
     $potenciacao = 2 ** 3 ;
     $teste = (2 *(2 + (2 - 1) )) + 8 * 2;


     echo "Resultado da soma é $soma <br>";
     echo "Resultado da subtracao é $subtracao <br>";
     echo "Resultado da divisao é $divisao <br>";
     echo "O resto da divisão é $resto <br>";
     echo "Resultado da Multiplicação é $multiplicacao <br>";
     echo "Resultado da Potenciação é $potenciacao <br>";
     echo " é $teste <br>";

     /*Ordem de grandeza
     primeiro = () parênteses
     fora do parênteses se calcula na ordem abaixo
     segundo = potenciação
     terceiro = multiplicação
     quarto = divisão
     quinto = soma
     sexto = subtração
     */

     //Primeira expressão: (3 + 2) * 4
     $valor1 = (3 + 2) * 4;

     //Segunda expressão: (2 * ( 2 + ( 2 - 1))) + 8
     $valor2 = (2 * ( 2 + ( 2 - 1))) + 8 * 2;

     $a = 3;
     $b = 2;
     $c = 4;
     $calculo = ($a + $b) * $c;

     // Exibindo os resultados - concatenação
     echo "Resultado da primeira expressão: " . $valor1 . "<br>";
     echo "Resultado da segunda expressão: " . $valor2 . "<br>";
     echo "Resultado do cálculo da variável: " . $calculo . "<br>"
    
    ?>
</body>
</html>