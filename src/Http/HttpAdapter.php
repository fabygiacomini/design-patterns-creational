<?php

namespace DesignPatterns\Creational\Http;

interface HttpAdapter
{
    public function post(string $url, array $data = []): void;
}