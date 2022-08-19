<?php


namespace DesignPatterns\Creational\Pedido;


use DesignPatterns\Creational\Orcamento;

class CriadorDePedido
{
    private array $templates = [];

    public function criaPedido(string $nomeCliente, string $dataFormatada, Orcamento $orcamento): Pedido
    {
        $template = $this->gerarTemplatePedido($nomeCliente, $dataFormatada);
        var_dump($template); // se analisarmos, veremos que é utilizada sempre o mesmo obj de template
        $pedido = new Pedido();
        $pedido->template = $template;
        $pedido->orcamento = $orcamento;

        return $pedido;
    }

    /**
     * @param string $nomeCliente
     * @param string $dataFormatada
     * @param Orcamento $orcamento
     * @throws \Exception
     */
    public function gerarTemplatePedido(
        string $nomeCliente,
        string $dataFormatada
    ): TemplatePedido {
        $hash = md5($nomeCliente . $dataFormatada);
        if (!array_key_exists($hash, $this->templates)) { // cache - poupando memória
            $template = new TemplatePedido(
                new \DateTimeImmutable($dataFormatada),
                $nomeCliente
            );
            $this->templates[$hash] = $template;
        }

        return $this->templates[$hash];
    }
}