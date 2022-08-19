<?php


namespace DesignPatterns\Creational\Descontos;

use DesignPatterns\Creational\Orcamento;


class SemDesconto extends Desconto
{
    public function __construct(?Desconto $proximoDesconto)
    {
        parent::__construct($proximoDesconto);
    }

    public function calculaDesconto(Orcamento $orcamento): float
    {
        return 0;
    }
}