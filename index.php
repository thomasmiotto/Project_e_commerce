<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/functions.php';
// include_once __DIR__ . '/views/header.html.php';



session_start();

use Controllers\AuthController;
use Controllers\StaticController;

$route = $_SERVER['PATH_INFO'] ?? '/home';

try {
    switch ($route) {
        case '/home':
            StaticController::showHome();
            break;

        case '/contact':
            StaticController::showContact();
            break;

        case '/cart':
            StaticController::showCart();
            break;

        case '/login':
            StaticController::showLogin();
            break;

        case '/profile':
            StaticController::showProfile();
            break;

        case '/signup':
            StaticController::showSignUp();
            break;

        case '/loginform':
            AuthController::login();
            break;

        case '/signupform':
            AuthController::signUp();
            break;

        case '/logout':
            AuthController::logout();
            break;


        default:
            //error
    }
} catch (Exception $e) {
    //Error function
}

include_once __DIR__ . '/views/footer.html.php';
