<?php

namespace App\Models;

use PDO;
use App\Config;

class BaseModel
{
    static function DBconnect(): PDO
    {
        return new PDO(
            'mysql:host=' . Config::DB_HOST . ';dbname=' . Config::DB_NAME . ';port=' . Config::DB_PORT,
            Config::DB_USER,
            Config::DB_PSW
        );
    }
}
