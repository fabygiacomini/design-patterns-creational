<?php

require 'vendor/autoload.php';

use DesignPatterns\Creational\Log\StdoutLogManager;
use DesignPatterns\Creational\Log\FileLogManager;

$logManager = new StdoutLogManager();
$logManager->log('info', 'Testando log manager');

$logManager = new FileLogManager(__DIR__ . '/log');
//$logManager->log('info', 'Testando log manager'); // vai logar no arquivo

/**
 * Factory Method - este pattern permite que criemos e reutilizemos uma classe
 * em vários cenários (log com echo ou log em arquivo), apenas alterando a forma de construir
 * a classe que de fato chamará a execução do método. Assim, não precisamos modificar a forma como
 * a classe LogManager funciona quando, eventualmente, precisarmos criar uma nova forma de logar,
 * precisando apenas criar uma nova classe que a extenda, implementado sua pecualizaridade e criando
 * um factory que disponibilize uma instância da mesma pronta para uso.
 * O Factory Method é uma especialização do Template Method, usando a mesma lógica, sendo que, ao invés de
 * implementar uma lógica, ele vai criar uma instância de um objeto.
 */