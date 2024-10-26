<?php

namespace Controllers;

use MVC\Router;
use Model\Usuario;

class LoginController {

    public static function login(Router $router) {
        
        $router->render('auth/login');
    }

    public static function logout(Router $router){
         $router->render('auth/login');
    }

    public static function forgotPassword(Router $router){
        $router->render('auth/forgot-password');
    }

    public static function changePassword(Router $router){
        $router->render('auth/change-password');
    }

    public static function createAccount(Router $router){
        $usuario = new Usuario;

        $alertas = [];
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario->sincronizar($_POST);
            $alertas = $usuario->validateCreateAccount();

            if(empty($alertas)) {
                //verifica que usuario no existe
                $resultado = $usuario->userExist();

                if($resultado->num_rows) {
                    $alertas = Usuario::getAlertas();
                } else {
                    //hashear password
                    $usuario->hashPassword();

                    //generar token unico
                    $usuario->crearToken();
                }

            }

        }
        
        $router->render('auth/create-account', [
            'usuario' => $usuario,
            'alertas'=> $alertas
        ]);
    }
}