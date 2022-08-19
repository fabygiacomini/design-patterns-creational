<?php


namespace DesignPatterns\Creational\AcoesAoGerarPedido;


use DesignPatterns\Creational\Pedido;

class EnviarPedidoPorEmail implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Enviando e-mail de pedido gerado." . PHP_EOL;
    }
}