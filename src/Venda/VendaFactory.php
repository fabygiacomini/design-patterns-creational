<?php


namespace DesignPatterns\Creational\Venda;


use DesignPatterns\Creational\Impostos\Imposto;

interface VendaFactory
{
    public function criarVenda(): Venda;

    public function imposto(): Imposto;
}