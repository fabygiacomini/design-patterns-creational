<?php


namespace DesignPatterns\Creational\Log;


abstract class LogManager
{
    public function log(string $severidade, string $mensagem): void
    {
        $logWriter = $this->criarLogWriter();

        $dataHoje = date('d/m/Y');
        $mensagemFormatada = "[$dataHoje][$severidade][$mensagem]";
        $logWriter->escreve($mensagemFormatada);
    }

    abstract public function criarLogWriter(): LoggerWriter;
}