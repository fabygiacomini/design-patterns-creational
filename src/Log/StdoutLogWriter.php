<?php


namespace DesignPatterns\Creational\Log;


class StdoutLogWriter implements LoggerWriter
{
    public function escreve(string $mensagemFormatada): void
    {
        echo $mensagemFormatada;
    }
}