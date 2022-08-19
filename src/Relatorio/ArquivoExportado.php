<?php


namespace DesignPatterns\Creational\Relatorio;


interface ArquivoExportado
{
    public function salvar(ConteudoExportado $conteudoExportado): string;
}