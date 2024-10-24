<?php

namespace PHP\Modelo; // define o local do projeto

require_once("Cliente.php"); // requisitando o uso de uma classe
use PHP\Modelo\Cliente; // defino qual classe que vou usar

require_once("Pessoa.php");
use PHP\Modelo\Pessoa;
require_once("Funcionario.php");
use PHP\Modelo\Funcionario;


// posso usar mais de uma "require_once" e "use"


// criei um objeto e passei os parametros dentro da var cliente
$cliente = new Cliente("123456","Eduardo", "11985478054", endereco: "Rua dos Javas", 562.60); // criar um objeto para usar a classe
$clienteDois = new Cliente("123","Edu", "11985478845", endereco: "Rua dos Javasscript", 558.60); // criar um objeto para usar a classe
$funcionario = new Funcionario("3456","Eduard", "119854784", endereco: "Rua dos Phyton", "Assistente", 514.89); // criar um objeto para usar a classe



echo $cliente->imprimir(); // chamo o metodo imprimir, e não passei nenhum parametro anteriormente
echo $clienteDois->imprimir(); // chamo o metodo imprimir, e não passei nenhum parametro anteriormente
echo $funcionario->imprimir(); // chamo o metodo imprimir, e não passei nenhum parametro anteriormente





?>