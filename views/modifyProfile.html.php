<?php
include_once __DIR__ . '/header.html.php';
?>

<section class="box my-8">
    <form action="/modifyprofileform" method="post" class="form">
        <label for="pseudo">Old Pseudo: <?= $_SESSION['pseudo'] ?> New Pseudo</label>
        <input type="text" name="pseudo" id="pseudo" required>

        <label for="name">Old Name: <?= $_SESSION['name'] ?> New Name</label>
        <input type="text" name="name" id="name" required>

        <input type="submit" value="modifier" class="bg-red-600 text-white">
    </form>
</section>