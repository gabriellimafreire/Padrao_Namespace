<?php
namespace App\Src;
require 'vendor/autoload.php';
use App\Src\Adminstrador;
use App\Src\Admsupremo;
use App\Src\interfaceUsuario;
use App\Src\Professor;
use App\Src\userFactory;

class Login {
    public function executar($lo,$se) {
        $login = $lo;
        $senha = $se;

        $perfil = 'administrador'; 

        $usuario = userFactory::criar($perfil);

        if ($usuario->autenticar($login, $senha)) {
            $autorizacoes = $usuario->autorizar();

            echo "Bem-vindo, $login! Você tem acesso às seguintes funcionalidades: " . implode(', ', $autorizacoes);

          
            
        } else {
            echo 'Login ou senha incorretos.';
        }
    }
}

$login = new Login();
$login->executar('professor','123');