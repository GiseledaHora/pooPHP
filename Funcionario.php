<?php
    namespace PHP\Modelo;
    require_once('Pessoa.php');
    use PHP\Modelo\Pessoa;

    class Funcionario extends Pessoa{
        protected float $salario;

        public function __construct(string $cpf,
                                    string $nome,
                                    string $telefone,
                                    string $endereco,
                                    float $salario)

        {
            parent:: __construct($cpf,
                                 $nome,
                                 $telefone,
                                 $endereco);
            $this->salario = $salario;
        } 
        
        public function __get(string $dado):mixed
        {
            return $this->dado;
        }

        public function __set(string $variavel, string $dado):void
        {
            $this->variavel = $dado;
        }

        public function imprimir():string 
        {
            return parent:: imprimir().
                  "<br>Salario:  R$ ".$this->salario; 
        }
    }
?>