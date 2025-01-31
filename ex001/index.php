<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu primeiro código</title>
</head>
<body>
    <h2> Hello word</h2>
    <p> Testando o parágrafo </p>

    <?php 

    //Declarando uma variável
    $nome = "Ana";
    $sobrenome = "Cunha";
    
    //imprimindo a variável
   // echo "seja bem vinda, $nome $sobrenome";  
    
    //quebra de linha antes do próximo echo
    //echo "<br> <br>";

    //Declarando uma constante 
    const time = "Palmeiras";
    const timenovo = "Real Madrid";

    echo "Seja Bem vinda, $nome $sobrenome <br> <br> Meu time é " . time;

    ?>

</body>
</html>