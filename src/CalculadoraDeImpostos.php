<?php

namespace DesignPatterns\Creational;

use DesignPatterns\Creational\Impostos\Imposto;

class CalculadoraDeImpostos
{
    // Strategy Pattern
    public function calcula(Orcamento $orcamento, Imposto $imposto): float
    {
        return $imposto->calculaImposto($orcamento);
    }
}