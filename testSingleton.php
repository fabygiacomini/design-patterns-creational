<?php

require 'vendor/autoload.php';

use DesignPatterns\Creational\PdoConnection;

$pdo = PdoConnection::getInstance('sqlite::memory:');

$pdo2 = PdoConnection::getInstance('sqlite::memory:');

var_dump($pdo, $pdo2);

/**
 * Singleton Pattern - permite garantir que uma classe terá apenas uma única isntância, provendo um
 * ponto de acesso global a esta instância. Ou seja, permite controlar o número de instâncias para
 * apenas uma instância por tempo de execução; evitando que tenhamos múltiplas instâncias e gastos
 * desnecessários de recursos.
 * No entanto, esse padrão pode ser polêmico, pois pode ferir alguns conceitos (princípios da responsabilidade
 * única, por exemplo) e pode também atrapalhar eventual herança ou testes unitários/de integração,
 * pois possui construtor privado e métodos estáticos.
 */