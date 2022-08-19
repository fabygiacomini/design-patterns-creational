<?php

namespace DesignPatterns\Creational\Impostos;

use DesignPatterns\Creational\Orcamento;

class ISS extends Imposto
{
    public function realizaCalculoEspecifico(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.06;
    }
}