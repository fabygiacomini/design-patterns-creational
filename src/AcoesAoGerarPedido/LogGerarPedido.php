<?php


namespace DesignPatterns\Creational\AcoesAoGerarPedido;


use DesignPatterns\Creational\Pedido;

class LogGerarPedido implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Gerando log de criação de pedido" . PHP_EOL;
    }
}