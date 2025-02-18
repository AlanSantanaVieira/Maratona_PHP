<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificadores de acesso</title>
</head>
<body>
    <?php 
    class Funcionario{
        //Propriedade com diferentes modificadors de acesso - Atributos
        public $nome;// Pode ser acessada de qualquer lugar
        protected $salario;// Pode ser acessada apenas da superclasse e subclasse
        private $cpf;//Pode ser acessada apensas dentro da classe

        //Construtor para inicializar os valores
        public function __construct($nome, $salario, $cpf){      
            
            $this->nome = $nome;
            $this->salario = $salario;
            $this->cpf = $cpf;
        }

        //Método público para exibir o nome do funcionário
        public function exibirNome(){
            echo "Nome: " . $this->nome . "<br>";
        }
        
        //Método protegido para exibir o salário (somente para subclasse ou na própria classe)
        protected function exibirSalario(){
            echo "Salário R$ " . $this->salario . "<br>";
        }

        //Método privato para exibir o CPF (somente dentro da classe)
        private function exibircpf(){
            echo "CPF: " . $this->cpf . "<br>";
        }

        //Método público para chamar o método privado e protegido na própria classe
        public function exibirDetalhes(){
            $this->exibirNome();
            $this->exibirSalario();
            $this->exibircpf();    
        }
    }

    //Criando uma instancia da classe Funcionário
    $funcionario1 = new Funcionario("Carlos Silva", 7000, "123.456.789-00");

    //Exibir o nome diretamente(público)
     $funcionario1->exibirNome();
     //Acessar o salário diretamente (protegido)
     //$fucionario1->exibirSalario(); //comentado porque gera erro

     //Acessando o CPF diretamente (privado)
    //$funcionario1->exibircpf(); //comentado porque gera erro

    //Chamando o método público que acesso todos os dados
    $funcionario1-> exibirDetalhes();


    ?>
</body>
</html>