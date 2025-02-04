<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional If, Else e Elseif</title>
</head>
<body>

<?php
//condicional if
if (1 < 2){
    echo "O número é menor. <br>";
} 

$idade = 18;
if ($idade >= 18){
    echo "Você é maior de idade.  <br>";
}

//condicional else
$a = 10;
$b = 14;

if ($a == $b){
    echo "As variáveis são iguais.  <br>"; //se
} else {
    echo "As variáveis são diferentes.  <br>"; //se não
}

//condicional Elseif
$idadepessoa = 25;

if ($idadepessoa < 13){
    echo "Você é uma criança.";
} else if ($idadepessoa >= 13 && $idadepessoa <= 19){
    echo " Você é um adolecente.";
}
 else if ($idadepessoa >= 20 && $idadepessoa <= 59){
    echo "Voce é um adulto.";
 }
  else {
    echo "Você é um idoso";
  }
     
?>
    
</body>
</html>