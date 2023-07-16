<?php

namespace App\Models;

use PDO;
use App\Models\BaseModel;

class Journey
{
    static function addDeliveryAdresse(string $name_del, string $adresse_del, int $cp_del, string $ville_del, int $phone_del)
    {
        $db = BaseModel::DBconnect();
       
    }
}