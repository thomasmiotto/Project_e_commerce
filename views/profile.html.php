<?php
include_once __DIR__ . '/header.html.php';

use Models\Models;


if (isset($_POST['supprimer'])) {
    Models::deleteUser($_SESSION['id']);
}
if (isset($_POST['modifier'])) {
    echo "This is Button2 that is selected";
}

?>
<div class="flex flex-col text-center m-4 mt-12 flex-grow">
    <h1>Mon Compte</h1>
    <div class="flex flex-row m-4 justify-center p-4 border-2 rounded-lg md:w-1/3 mx-auto justify-between mt-8">
        <i class="fa fa-user-circle my-auto" aria-hidden="true"></i>
        <h1 class="my-auto"><?= $_SESSION['name'] ?></h1>
        <div class="flex flex-col gap-1 my-auto">
            <form method="post" class="flex flex-col">
                <input type="submit" name="supprimer" onclick="return confirm('Are You Sure ?')" value="Supprimer" class="redButton" />
                <input type="submit" name="modifier" value="Modifier" class="redButton" />
            </form>
        </div>
    </div>
    <div>
        <h2>Mes information</h2>
        <p>email: <?= $_SESSION['email'] ?> </p>
        <p>Pseudo: <?= $_SESSION['pseudo'] ?></p>
    </div>
</div>