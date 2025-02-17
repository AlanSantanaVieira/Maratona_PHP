<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes e Objetos</title>
</head>
<body>
    <?php 
    class Carro{
        //Propriedades ou atributos
        public $marca;
        public $modelo;
        public $ano;

        //Métodos (Função dentro da classe)
        public function exibirDetalhes(){
            echo "Marca: " . $this->marca . "<br>";
            echo "Modelo: " . $this->modelo . "<br>";
            echo "Ano: " . $this->ano . "<br>";
        }
    }

    //Instanciando um objeto
    $meuCarro = new Carro();
    $meuCarro->marca = "Honda";
    $meuCarro->modelo = "City";
    $meuCarro->ano = 2013;

    $meuCarro->exibirDetalhes();//Exibir os detalhes do carro

    echo "<br>";
    //Nova classe
    class Pessoa{
        //Propriedades ou atributos
        public $nome;
        public $idade;
        
        //Métodos (Função dentro da classe)
        public function saudacao(){
            echo "Olá, meu nome é " . $this->nome . " e tenho " . $this->idade . " anos. <br>";
        }
        }

        //Instanciando um objeto
        $joao = new Pessoa();
        $joao->nome = "João";
        $joao->idade = 30;

        $joao ->saudacao();//Exibir a saudação com os dados do João

    
    
    ?>
</body>
</html>