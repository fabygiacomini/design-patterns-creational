<?php


namespace DesignPatterns\Creational\Venda;


abstract class Venda
{
    private \DateTimeImmutable $dataRealizacao;

    public function __construct(\DateTimeImmutable $dataRealizacao)
    {
        $this->dataRealizacao = $dataRealizacao;
    }
}