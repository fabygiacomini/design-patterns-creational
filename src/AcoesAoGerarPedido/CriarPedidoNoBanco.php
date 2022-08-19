<?php

namespace DesignPatterns\Creational\AcoesAoGerarPedido;

use DesignPatterns\Creational\Pedido;

class CriarPedidoNoBanco implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Salvando pedido no banco de dados" . PHP_EOL;
    }
}