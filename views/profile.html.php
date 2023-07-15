<?php
include_once __DIR__ . '/header.html.php';

use Models\Models;


if (isset($_POST['supprimer'])) {
    Models::deleteUser($_SESSION['id']);
}

?>
<div class="flex flex-col text-center m-4 mt-12 flex-grow">
    <h1 class="text-xl">Mon Compte</h1>
    <div class="m-4justify-center p-4 border-2 rounded-lg md:w-1/3 m-auto mt-8">
        <h1 class="my-4">Nom: <?= $_SESSION['name'] ?></h1>
        <p class="my-4">Email: <?= $_SESSION['email'] ?> </p>
        <p class="my-4">Pseudo: <?= $_SESSION['pseudo'] ?></p>
    </div>
    <div class="m-auto w-min">
        <?php
        if ($_SESSION['role'] == 'user') : ?>
            <form method="post" class="flex flex-col">
                <input type="submit" name="supprimer" onclick="return confirm('Etes-vous sûrs ? ')" value="Supprimer Compte" class="bg-red-600 p-4 rounded-[100px] text-white hover:cursor-pointer hover:bg-red-400" />
            </form>
        <?php endif; ?>
        <?php
        if ($_SESSION['role'] == 'admin') : ?>
            <form action="/addproduct" class="flex flex-col">
                <input type="submit" value="Add product" class="bg-red-600 p-4 rounded-[100px] text-white hover:cursor-pointer hover:bg-red-400" />
            </form>
        <?php endif; ?>
    </div>

</div>