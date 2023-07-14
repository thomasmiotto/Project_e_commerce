<?php

namespace Models;

use PDO;
use App\Config;

class Models
{
    static function
    DBconnect(): PDO
    {
        return new PDO(
            'mysql:host=' . Config::DB_HOST . ';dbname=' . Config::DB_NAME . ';port=' . Config::DB_PORT,
            Config::DB_USER,
            Config::DB_PSW
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
    static function deleteUser($id)
    {
        $db = static::DBconnect();
        $db->prepare("DELETE FROM user WHERE id = ?")->execute([$id]);
        session_destroy();
        redirect('/home');
    }
}
