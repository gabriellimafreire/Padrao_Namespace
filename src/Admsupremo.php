<?php
namespace App\Src;

class Admsupremo extends Administrador {
    public function autorizar(): array {
        $autorizacoes = parent::autorizar();
        $autorizacoes[] = 'configurar_sistema';
        $autorizacoes[] = 'gerenciar_backups';
        return $autorizacoes;
    }
}