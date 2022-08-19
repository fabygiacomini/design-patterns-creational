<?php


namespace DesignPatterns\Creational\Venda;


use DesignPatterns\Creational\Impostos\Imposto;
use DesignPatterns\Creational\Impostos\ISS;

class VendaServicoFactory implements VendaFactory
{
    private string $nomePrestador;

    public function __construct(string $nomePrestador)
    {
        $this->nomePrestador = $nomePrestador;
    }

    public function criarVenda(): Venda
    {
        return new VendaServico(new \DateTimeImmutable(), $this->nomePrestador);
    }

    public function imposto(): Imposto
    {
        return new ISS();
    }
}