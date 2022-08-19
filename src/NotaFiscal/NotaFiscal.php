<?php


namespace DesignPatterns\Creational\NotaFiscal;


use DesignPatterns\Creational\ItemOrcamento;

class NotaFiscal
{
    public string $cnpjEmpresa;
    public string $razaoSocialEmpresa;
    public array $itens;
    public string $observacoes;
    public \DateTimeImmutable $dataEmissao;
    public float $valorImpostos;

    public function valor(): float
    {
        return array_reduce(
            $this->itens,
            function ($valorAcumulado, ItemOrcamento $itemAtual) {
                return $valorAcumulado + $itemAtual->valor;
            },
            0
        );
    }
}