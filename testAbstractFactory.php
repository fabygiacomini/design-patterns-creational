<?php

require 'vendor/autoload.php';

use DesignPatterns\Creational\Venda\VendaProdutoFactory;
use DesignPatterns\Creational\Venda\VendaServicoFactory;

//$fabricaVenda = new VendaServicoFactory('Fabiana');
$fabricaVenda = new VendaProdutoFactory('2');
$venda = $fabricaVenda->criarVenda();
$imposto = $fabricaVenda->imposto();

var_dump($venda, $imposto); // ver qual o tipo dos objetos de imposto criados

/**
 * Abstract Factory Pattern - permite criar famílias de objetos relacionados sem precisar especificar suas
 * classes concretas.
 * Neste caso, criamos vendas, tanto de produto quanto de serviço, sem precisar especificar qual o imposto
 * específico cada uma dessas classes utilizam, pois isto ficou definido dentro de cada factory e esta
 * informação ficou nela encapsulada. Então ao pegar o imposto da venda, não preciso me preocupar com ual imposto,
 * pois a factory já vai entregar o imposto correto para cada tipo de venda.
 */