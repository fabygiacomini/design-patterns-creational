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

    // esse método não é necessário, haja vista que o PHP possui uma funcionalidade específica
    // que já faz isso: a palavra reservada `clone` (ver uso em `testPrototype.php`)
    public function clonar(): NotaFiscal
    {
        $cloneNotaFiscal = new NotaFiscal();
        $cloneNotaFiscal->cnpjEmpresa = $this->cnpjEmpresa;
        $cloneNotaFiscal->razaoSocialEmpresa = $this->razaoSocialEmpresa;
        $cloneNotaFiscal->itens = $this->itens;
        $cloneNotaFiscal->observacoes = $this->observacoes;
        $cloneNotaFiscal->dataEmissao = $this->dataEmissao;
        $cloneNotaFiscal->valorImpostos = $this->valorImpostos;

        return $cloneNotaFiscal;
    }

    /**
     * método mágico do PHP que é chamado sempre depois da palavra reservada `clone`
     * e que aplica o que for definido, neste caso, queremos que a dataEmissao seja sempre
     * renovada, aplicando a data atual e não uma cópia da data do objeto clonado.
     */
    public function __clone()
    {
        $this->dataEmissao = new \DateTimeImmutable();
    }
}