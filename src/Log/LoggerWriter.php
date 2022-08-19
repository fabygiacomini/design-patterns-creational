<?php


namespace DesignPatterns\Creational\Log;


interface LoggerWriter
{
    public function escreve(string $mensagemFormatada): void;
}