<?php
namespace App\Src;

interface interfaceUsuario{
    public function autenticar(string $login, string $senha): bool;
    public function autorizar(): array;
}