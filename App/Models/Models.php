<?php

namespace Models;

use PDO;
// use Config;

const
    DB_USER = 'root',
    DB_PSW = 'root',
    DB_HOST = 'localhost',
    DB_PORT = 3306,
    DB_NAME = 'eCommerce';

class Models
{
    static function
    DBconnect(): PDO
    {
        return new PDO(
            'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';port=' . DB_PORT,
            DB_USER,
            DB_PSW
        );
    }
    static function findUser(string $identifiant)
    {
        $db = static::DBconnect();
        $call = $db->prepare("SELECT * FROM user WHERE email = ?");
        $call->execute([$identifiant]);
        return $call->fetch(PDO::FETCH_OBJ);
    }

    static function newUser(string $name, string $email, string $password, string $pseudo)
    {
        $db = static::DBconnect();
        $db->prepare("INSERT INTO user VALUE
(NULL, ?, ?, ?, ?)
")->execute([$name, $email, $password, $pseudo]);
    }
}
