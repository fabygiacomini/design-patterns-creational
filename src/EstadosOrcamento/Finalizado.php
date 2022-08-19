<?php

namespace DesignPatterns\Creational\EstadosOrcamento;

use DesignPatterns\Creational\Orcamento;

class Finalizado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw  new \DomainException(
            'Orçamentos finalizados não podem receber descontos extras'
        );
    }
}