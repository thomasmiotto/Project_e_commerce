<?php

namespace App\Models;

use PDO;
use App\Models\BaseModel;

class User
{
    static function findUser(string $email)
    {
        $db = BaseModel::DBconnect();
        $call = $db->prepare("SELECT user.*, role.role FROM user INNER JOIN `role` ON role.id = user.role_id WHERE user.email = ?");
        $call->execute([$email]);
        return $call->fetch(PDO::FETCH_OBJ);
    }

    static function newUser(string $name, string $email, string $password, string $pseudo)
    {
        $db = BaseModel::DBconnect();
        $db->prepare("INSERT INTO user VALUE(NULL,1, ?, ?, ?, ?)")
            ->execute([$name, $email, $password, $pseudo]);
    }

    static function deleteUser($id)
    {
        $db = BaseModel::DBconnect();
        $db->prepare("DELETE FROM user WHERE id = ?")->execute([$id]);
        unset($_SESSION['user']);
        redirect('/home');
    }

    static function updateUser(string $name, string $pseudo, int $id)
    {
        $db = BaseModel::DBconnect();
        $db->prepare("UPDATE user SET `name` = ?, pseudo=?  WHERE id = ?")->execute([$name, $pseudo, $id]);
    }
}
