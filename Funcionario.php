<?php

    namespace PHP\modelo;
    require_once('Pessoa.php');
    use PHP\Modelo\Pessoa;

    class Funcionario extends pessoa{
        protected string $cargo; // declaro o que não vem da classe pai
        protected float $salario;

        public function __construct(string $cpf, string $nome, string $telefone, string $endereco, string $cargo, float $salario){



            parent::__construct($cpf, $nome, $telefone, $endereco);
            $this->cargo = $cargo;
            $this->salario = $salario;




        }

        public function  __get(string $nome){
            return $this->$nome;
        }

        public function __set(string $nomeVariavel, string $dado):void{

            $this->$nomeVariavel = $dado;
        }
        public function imprimir(): string{
            return parent::imprimir().
            "<br>Cargo: ".$this->cargo.
            "<br>Salario: ".$this->salario;
        }




    }







?>