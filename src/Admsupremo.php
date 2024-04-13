<?php
namespace App\Src;

class admSupremo extends Administrador {
    public function autorizar(): array {
      $autorizacoes = parent::autorizar();
      $autorizacoes[] = 'configurar_sistema';
      $autorizacoes[] = 'gerenciar_backups';
      return $autorizacoes;
    }
  }