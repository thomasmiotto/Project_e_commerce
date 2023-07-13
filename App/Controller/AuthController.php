<?php

namespace Controllers;

use Models\Models;
use PDO;
use PDOException;

class AuthController
{
    static function login()
    {

        if (empty($_POST['login']) || empty($_POST['password'])) {
            redirect('/login');
        }

        $user = Models::findUser($_POST['login']);
        if (
            $user === false
            || !password_verify($_POST['password'], $user->password)
        ) {
            redirect('/login');
        }

        $_SESSION['user'] = $user;

        $_SESSION['id'] = $user->id;
        $_SESSION['pseudo'] = $user->pseudo;
        $_SESSION['email'] = $user->email;

        redirect('/home');
    }

    static function logout()
    {
        session_destroy();
        redirect('/home');
    }

    static function signUp()
    {
        if (
            empty($_POST['pseudo'])
            || empty($_POST['email'])
            || empty($_POST['password'])
            || empty($_POST['name'])

            // Password check
            || $_POST['password'] !== $_POST['confirm']
            || strlen($_POST['password']) < 8
            || !preg_match('#[a-z]#', $_POST['password'])
            || !preg_match('#[A-Z]#', $_POST['password'])
            || !preg_match('#[0-9]#', $_POST['password'])
            || !preg_match('#[!@\#$%^&*()_+\-=\[\]{};\':"\\|,.<>/?]#', $_POST['password'])

            // email check
            || filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false

            // if user exists
            || !empty(Models::findUser($_POST['email']))
        ) {
            redirect('/signup');
            die;
        }

        $psw = password_hash($_POST['password'], PASSWORD_BCRYPT);

        Models::newUser(
            htmlspecialchars($_POST['name']),
            $_POST['email'],
            $psw,
            htmlspecialchars($_POST['pseudo']),
        );

        redirect('/login');
    }
}
