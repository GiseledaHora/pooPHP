<?php
    namespace PHP\Modelo;

    class Pessoa{
        // encapsusalamento 
        protected string $cpf;
        protected string $nome;
        protected string $telefone;
        protected string $endereco;

        // Declarar os valores iniciais das variáveis
        public function __construct(string $cpf,
                                    string $nome,
                                    string $telefone,
                                    string $endereco
        ){
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
        }



    
    //   Métodos de Acesso Modificadores
    // get set
    public function __get(string $dados):mixed     //"mixed" se tiver mais de uma variavel tipo string float...
    {
        return $this->dados;

    } //fim de get

    public function __set(string $variavel, string $dados):void
    {
        $this->variavel = $dados;
    }//fim de set


    //começo de imprimir
    public function imprimir():string
    {
        return "<br>CPF:"       .$this->cpf.
                "<br>Nome:"     .$this->nome.
                "<br>Telefone:" .$this->telefone.
                "<br>Endereco:" .$this->endereco;
    } //fim de imprimir
} // fim da classe

?>