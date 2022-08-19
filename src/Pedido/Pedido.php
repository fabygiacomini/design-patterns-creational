<?php


namespace DesignPatterns\Creational\Pedido;


use DesignPatterns\Creational\Orcamento;

class Pedido
{
    public TemplatePedido $template;
    public Orcamento $orcamento;
}