<?php


namespace DesignPatterns\Creational\Relatorio;


use DesignPatterns\Creational\Pedido;

class PedidoExportado implements ConteudoExportado
{
    private Pedido $pedido;

    public function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    public function conteudo(): array
    {
        return [
            'data_finalizacao' => $this->pedido->dataFinalizacao->format('d/m/Y'),
            'nome_cliente' => $this->pedido->nomeCliente,
        ];
    }
}