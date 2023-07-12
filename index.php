<?php

include_once __DIR__ . '/views/header.html.php';
include_once __DIR__ . '/App/Controller/StaticController';
session_start();

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

        default:
            //error
    }
} catch (Exception $e) {
    //Error function
}

include_once __DIR__ . '/views/footer.html.php';
