<?php

require 'vendor/autoload.php';

use DesignPatterns\Creational\ItemOrcamento;
use DesignPatterns\Creational\NotaFiscal\ConstrutorNotaFiscalProduto;
use DesignPatterns\Creational\NotaFiscal\ConstrutorNotaFiscalServico;

$item1 = new ItemOrcamento();
$item1->valor = 500;

$item2 = new ItemOrcamento();
$item2->valor = 1000;

$builder = new ConstrutorNotaFiscalProduto();
//$builder = new ConstrutorNotaFiscalServico();
$builder->paraEmpresa('12345678', 'FG Ltda')
    ->comItem($item1)
    ->comItem($item2)
    ->comObservacoes('Esta nota fiscal foi construída com um builder!');

$notaFiscal = $builder->constroi();

echo $notaFiscal->valorImpostos;

// var_dump($notaFiscal);

/**
 * Builder Patter - permite construir objetos complexos utilizando passo a passo.
 * Neste caso, a classe ConstrutorNotaFiscal possui muitos atributos, que se fossem todos inicializados
 * no construtor, acabaria acarretando em um construtor com muitos parâmetros, o que dificultaria na hora de
 * instanciar. Assim, conseguimos fazer de forma mais simplificada com um builder, uma classe que se encarrega de
 * conter métodos que irão preenchendo os valores de cada atributo da classe a ser construída, permitindo até mesmo
 * o Fluent Interface, com encadeamento de métodos.
 * No exemplo também temos duas possibilidades de nota fiscal, por produto ou por serviço, e conseguimos suprir essa
 * necessidade estendo da classe ConstrutorNotaFiscal e implementando as regras dos impostos específicos de cada uma.
 * Assim, este padrão permite a criação de vários e diferentes objetos seguindo os mesmos passos.
 */