<?php
include_once __DIR__ . '/header.html.php';

use App\Models\User;

if (isset($_POST['supprimer'])) {
    User::deleteUser($_SESSION['id']);
}
?>

<div class="flex flex-col text-center m-4 mt-12 flex-grow">
    <h1 class="text-xl">Mon Compte</h1>
    <div class="m-4justify-center p-4 border-2 rounded-lg md:w-1/3 m-auto mt-8">
        <div class="flex-row">
            <h1 class="my-4">Nom: <?= $_SESSION['name'] ?></h1>
        </div>
        <p class="my-4">Email: <?= $_SESSION['email'] ?> </p>
        <div class="flex-row mb-8">
            <p class="my-4">Pseudo: <?= $_SESSION['pseudo'] ?></p>
        </div>
        <a href="/modifyprofile" class="hover:cursor-pointer italic hover:underline" />Modifier Compte</a>
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
