<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/functions.php';

session_start();

use Controllers\AuthController;
use Controllers\StaticController;
use Controllers\ProductController;

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

        case '/addproduct':
            StaticController::showAddProduct();
            break;

        case '/admin':
            StaticController::showAdmin();
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

        case '/addproductform':
            ProductController::addProduct();
            break;


        default:
            //error
    }
} catch (Exception $e) {
    //Error function
}

include_once __DIR__ . '/views/footer.html.php';
