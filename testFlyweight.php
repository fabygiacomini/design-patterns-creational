<?php

require 'vendor/autoload.php';

use DesignPatterns\Creational\Orcamento;
use DesignPatterns\Creational\Pedido\CriadorDePedido;

$pedidos = [];
$criadorPedido = new CriadorDePedido();
$hoje = date('Y-m-d');

for ($i = 0; $i < 10000; $i++) {
    $orcamento = new Orcamento();
    $pedido = $criadorPedido->criaPedido(
        'Fabiana',
        $hoje,
        $orcamento
    );

    $pedidos[] = $pedido;
}

echo memory_get_peak_usage(); // quanto de memória está sendo usada


/**
 * Flyweight Pattern - além de ser um padrão estrutural, o Flyweight também é um padrão criacional, visto
 * que ele também diz uma forma de fazer as coisas. No caso do exemplo, temos dentro da classe `CriadorDePedido`
 * um "cache" na criação dos templates, sendo que sempre que tivermos os mesmos dados do hash, utilizaremos o
 * mesmo template, sem precisar ficar criando o mesmo, e consumindo recursos, sem que quisermos criar um pedido
 * para o mesmo cenário.
 * Assim, utilizamos o cache, ocasião que reaproveitamos o objeto de template criado para o mesmo usuário,
 * economizando recursos computacionais neste processamento.
 */