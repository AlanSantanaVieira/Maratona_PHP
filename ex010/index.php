<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php 
    //criação de array indexado
    $array = [ 10, 20, 30, 40];

    //exibindo o array
    echo "Array original: ";
    print_r($array); //print_r() exibe o array de frma legível

    echo "<br>";
    // adicioando um valor ao final da variavel array
    $array[] = 50;

    //Exibindo array atualizada
    echo "Array após adicionar 50: ";
    print_r($array);

    echo "<br>";
    //Alterando o valor na posição 1 para 25
    $array[1] = 25;

    echo "Array após alterar o valor na posição 1 para 25: ";
    print_r($array);

    echo "<br>";
    //Removendo o valor no indice 2
    unset($array[2]);

    //Reorganizar os indices do array
    $array = array_values($array);
    
    //exibindo o array após remover o indice
    echo "Array após remover o valor no índice 2: ";
    print_r($array);

    echo "<br>";
    $array[] = 19;

    //Ordenar o array
    sort($array);

    //Exibir o array ordenado
    echo "Array após ordenar os valores: ";
    print_r($array);

    ?>
    
</body>
</html>