<?php
include_once __DIR__ . '/header.html.php';
?>

<section id="page-log-sign-in" class="box flex-grow">
    <h1>login</h1>
    <form action="/loginform" method="post" id="form-login" class="form">
        <label for="username">E-mail / Pseudo</label>
        <input type="text" name="login" id="username" required>
        <label for="password">Mot de Passe</label>
        <input type="password" name="password" id="password" required>
        <input type="submit" value="Se Connecter" class="redButtons">
    </form>
    <p>Vous n'avez pas de compte? <a href="/signup">en crée un</a></p>
</section>