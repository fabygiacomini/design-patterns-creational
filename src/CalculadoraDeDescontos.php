<?php

namespace DesignPatterns\Creational;

use DesignPatterns\Creational\Descontos\DescontoMaisDe500Reais;
use DesignPatterns\Creational\Descontos\DescontoMaisDe5Itens;
use DesignPatterns\Creational\Descontos\SemDesconto;

class CalculadoraDeDescontos
{
    // Chain of Responsibility Patter
    public function calculaDescontos(Orcamento $orcamento): float
    {
        $cadeiaDeDescontos = new DescontoMaisDe5Itens(
            new DescontoMaisDe500Reais(
                new SemDesconto(null)
            )
        );

        $descontoCalculado = $cadeiaDeDescontos->calculaDesconto($orcamento);
        $logDesconto = new LogDesconto();
        $logDesconto->informar($descontoCalculado);

        return $descontoCalculado;
    }
}