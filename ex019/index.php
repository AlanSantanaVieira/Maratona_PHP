<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança e Polimorfismo</title>
</head>
<body>
    <?php 
    //Classe Base (superclasse)
    class Animal{
        //Propriedade ou atributo
        public $nome;

        //Método
        public function __construct($nome){
            $this->nome = $nome;
        }

        public function falar(){
            return "O animal faz um som";
        }
    }

    //Subclasse que herda de Animal
    class cachorro extends Animal{
        
        //Sobrescrevendo o método falar
        public function falar(){
            return "O cachorro late";
        }

    }

    //Criando um objeto da classe cachorro
    $cachorro = new cachorro("Rex");
    echo $cachorro->nome;
    
    echo "<br>";
    //Chamando o método sobrescrito da subclasse
    echo $cachorro->falar();
    
    echo "<br>";
    //Mostrando método falar da superclasse
    $animal = new Animal("Animal");
    echo $animal->falar();


        ?>
</body>
</html>