<?php

namespace DesignPatterns\Creational\EstadosOrcamento;

use DesignPatterns\Creational\Orcamento;

class Aprovado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.02;
    }
}