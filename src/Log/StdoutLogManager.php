<?php


namespace DesignPatterns\Creational\Log;


class StdoutLogManager extends LogManager
{

    public function criarLogWriter(): LoggerWriter
    {
        return new StdoutLogWriter();
    }
}