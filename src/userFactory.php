<?php
namespace App\Src;
use App\Src\Professor;
use App\Src\Administrador;
use App\Src\Admsupremo;

class userFactory {
    public static function criar(string $perfil): interfaceUsuario {
        switch ($perfil) {
            case 'professor':
                return new Professor();
            case 'administrador':
                return new Administrador();
            case 'administrador_supremo':
                return new Admsupremo();
            default:
                // return new Admsupremo();
                throw new Exception('Perfil inválido');
        }
    }
}