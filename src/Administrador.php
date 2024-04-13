<?php
namespace App\Src;

class Administrador extends interfaceUsuario {
    public function autenticar(string $login, string $senha): bool {
  
      return true;
    }
  
    public function autorizar(): array {
      return ['gerenciar_usuarios', 'gerenciar_cursos'];
    }
  }
