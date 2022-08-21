<?php

require 'vendor/autoload.php';

use DesignPatterns\Creational\NotaFiscal\ConstrutorNotaFiscalServico;
use DesignPatterns\Creational\ItemOrcamento;

$item1 = new ItemOrcamento();
$item1->valor = 500;

$item2 = new ItemOrcamento();
$item2->valor = 1000;

//$builder = new ConstrutorNotaFiscalProduto();
$builder = new ConstrutorNotaFiscalServico();
$notaFiscal = $builder->paraEmpresa('12345678', 'FG Ltda')
    ->comItem($item1)
    ->comItem($item2)
    ->comObservacoes('Esta nota fiscal foi construída com um builder!')
    ->constroi();

$notaFiscal2 = clone $notaFiscal; // instancia um novo objeto e clona todos os atributos
$notaFiscal2->itens[] = new ItemOrcamento(); // podemos alterar somente o necessário

var_dump($notaFiscal, $notaFiscal2);

/**
 * Prototype Pattern - é uma padrão que permite copiar objetos já existentes sem
 * a necessidade de ter que instanciar e preencher cada um dos atributos manualmente;
 * permitindo que seja alterado apenas o valor do atributo que seja necessário.
 * Fazendo com que o processo de clonar um objeto não seja dependente da classe, ou seja,
 * que não exija essa instanciação e preenchimento de um por um dos atributos (lembrando que
 * caso haja modificação da estrutura dessa classe, teríamos que ir em todos os objetos clonados
 * e modificar o que for necessário - no caso do `clone` do PHP, bastaria modificar o objeto
 * utilizado como molde -  em outras linguagens, por exemplo, apenas delegaríamos essa funcionalidade
 * de clonar para a classe clonada, como no nosso exemplo `NotaFiscal`, pois ela sabe as propriedades
 * que tem).
 */
