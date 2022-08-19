<?php


namespace DesignPatterns\Creational\AcoesAoGerarPedido;


use DesignPatterns\Creational\Pedido;

// ObserverPattern
interface AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido);
}