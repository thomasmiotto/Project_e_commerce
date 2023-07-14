<?php
include_once __DIR__ . '/header.html.php';
?>
<section id="page-log-sign-in" class="box my-8">
    <form action="/signupform" method="post" id="form-signin" class="form">
        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo" id="pseudo" required>

        <label for="name">name</label>
        <input type="text" name="name" id="name" required>

        <label for="email">E-mail</label>
        <input type="text" name="email" id="email" required>

        <label for="password">Mot de Passe</label>
        <input type="password" name="password" id="password" required>

        <label for="password-confirm">Confirmer Mot de Passe</label>
        <input type="password" name="confirm" id="password-confirm" required>

        <input type="submit" value="S'inscrire" class="bg-red-600 text-white">
    </form>
</section>