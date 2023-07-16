<?php

namespace App\Controllers;

class BuyingJourneyController
{
    static function addInfoBuying()
    {

        if ($_SESSION['role'] == 'admin') {
            if (
                empty($_POST['name_del'])
                || empty($_POST['adresse_del'])
                || empty($_POST['cp_del'])
                || empty($_POST['ville_del'])
                || empty($_POST['phone_del'])
                || empty($_POST['name_pay'])
                || empty($_POST['adresse_pay'])
                || empty($_POST['cp_pay'])
                || empty($_POST['ville_pay'])
                || empty($_POST['phone_pay'])

            ) {
                redirect('/');
            }
        }
    }
}
