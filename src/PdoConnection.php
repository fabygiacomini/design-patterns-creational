<?php


namespace DesignPatterns\Creational;


class PdoConnection extends \PDO
{
    private static ?self $instance = null;

    // construtor privado visa impedir a instanciação desta classe
    // (a fim de evitar múltiplas instâncias, o que é custoso)
    private function __construct($dsn, $username = null, $password = null, $options = null)
    {
        parent::__construct($dsn, $username, $password, $options);
    }

    public static function getInstance($dsn, $username = null, $password = null, $options = null): self
    {
        if (is_null(self::$instance)) {
            self::$instance = new static($dsn, $username = null, $password = null, $options = null);
        }

        return self::$instance;
    }
}