<link rel="stylesheet" href="../Styles/global.css">
<link rel="stylesheet" href="../Styles/buying_journey.css">

<section id="parcours" class="box">

<h1>Mode de livraison</h1>

<form class="mode_liv">
<div><input type="radio" name="" id=""> <label for="">Livraison standard </label></div>
<div><input type="radio" name="" id=""> <label for="">Retrait en magasin</label></div>
<div><input type="radio" name="" id=""> <label for="">Point relais</label></div>
</form>

<h1>Adresse de livraison</h1>

<form action="POST" id="" class="form">
        <label for="name">Nom</label>
        <input type="text" id="name" required>

        <label for="adresse">Adresse</label>
        <input type="text" id="adresse" required>

        <label for="cp">Code Postal</label>
        <input type="text" id="cp" required>

        <label for="ville">Ville</label>
        <input type="text" id="ville" required>

        <label for="phone">Numéro de téléphone</label>
        <input type="password" id="phone" required>

        <div>
        <input type="checkbox" class="checkbox">
        <label for="phone">Adresse de facturation identique</label>
        </div>

    </form>
    
    <h1>Mode de livraison</h1>

<form class="mode_pay">
<div><input type="radio" name="" id=""> <label for="">CB</label></div>
<div><input type="radio" name="" id=""> <label for="">PayPal</label></div>
<div><input type="radio" name="" id=""> <label for="">Chèque</label></div>
<div><input type="radio" name="" id=""> <label for="">Virement bancaire</label></div>
</form>

<h1>Adresse de facturation</h1>

<form action="POST" id="" class="form">
        <label for="name">Nom</label>
        <input type="text" id="name" required>

        <label for="adresse">Adresse</label>
        <input type="text" id="adresse" required>

        <label for="cp">Code Postal</label>
        <input type="text" id="cp" required>

        <label for="ville">Ville</label>
        <input type="text" id="ville" required>

        <label for="phone">Numéro de téléphone</label>
        <input type="password" id="phone" required>

    </form>


</section>