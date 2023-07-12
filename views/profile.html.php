<?php
include_once 'header.html.php';
?>

<div class="flex flex-col text-center m-4 mt-12">
    <h1>Mon Compte</h1>
    <div class="flex flex-row m-4 justify-center p-4 border-2 rounded-lg md:w-1/3 mx-auto justify-between mt-8">
        <i class="fa fa-user-circle my-auto" aria-hidden="true"></i>
        <h1 class="my-auto">Utilisateur numero</h1>
        <div class="containerColumnCentered">
            <button class="buttonRed">modifier</button>
            <button class="buttonRed">supprimer</button>
        </div>
    </div>
    <div>
        <h2>Mes information</h2>
        <p>email:monemail@mail.com</p>
        <p>Pseudo:monpseudo</p>
    </div>
</div>

<?php
include_once 'footer.html.php';
