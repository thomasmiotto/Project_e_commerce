<?php

namespace App\Models;

use PDO;
use App\Models\BaseModel;

class Category
{
    static function createCategory(string $name)
    {
        $db = BaseModel::DBconnect();
        $db->prepare("INSERT INTO category VALUE(NULL,?)")
            ->execute([$name]);
    }

    static function getCategories()
    {
        $db = BaseModel::DBconnect();
        $call = $db->query("SELECT * from category");
        return $call->fetchAll(PDO::FETCH_OBJ);
    }

    static function findCategory(int $id)
    {
        $db = BaseModel::DBconnect();
        $call = $db->prepare("SELECT * FROM category WHERE id = ?");
        $call->execute([$id]);
        return $call->fetch(PDO::FETCH_OBJ);
    }
}
