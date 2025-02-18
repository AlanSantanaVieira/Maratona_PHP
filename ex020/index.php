<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo</title>
</head>
<body>
    <?php 
    //Superclasse
    class Animal{
        public function fazerSom(){
            return "O animal faz um som";
        }
    }

    //Subclasse
    class cachorro extends Animal{
        public function fazerSom(){
            return "Au au au";
        }
    }

    //Outra Subclasse
    class gato extends Animal{
        public function fazerSom(){
            return "Miaaaaaaaau";
        }
    }

    //Função que utiliza Polimorfismo
    function emitirSomAnimal(Animal $animal){ 
        echo $animal->fazerSom() . "<br>";       
    }

    //Criar objetos - instancias
    $cachorro1 = new cachorro(null);
    $gato1 = new gato(null);
    echo $cachorro1->fazerSom() . "<br>";
    echo $gato1->fazerSom() . "<br>";

    echo "<br>";
    //Chamando a função com diferentes objetos, mas com a mesma assinatura
    emitirSomAnimal($cachorro1) . "<br>";
    emitirSomAnimal($gato1) . "<br>";
    
    ?>
    
</body>
</html>