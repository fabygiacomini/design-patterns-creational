<?php


namespace DesignPatterns\Creational\Log;


class FileLogManager extends LogManager
{
    private string $caminhoArquivo;

    public function __construct(string $caminhoArquivo)
    {
        $this->caminhoArquivo = $caminhoArquivo;
    }

    public function criarLogWriter(): LoggerWriter
    {
        return new FileLogWriter($this->caminhoArquivo);
    }
}