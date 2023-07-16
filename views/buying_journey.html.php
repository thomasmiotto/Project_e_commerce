<?php
  include_once __DIR__ . '/header.html.php';
?>


<section id="parcours" class="box">
  <h1>Mode de livraison</h1>
  <?php if ($_SESSION['role'] == 'admin') : ?>
<form action="/addbuyingform" method="post">
  <div class="mode_liv">
    <div>
      <input type="radio" name="standard" id="standard" value="standard">
      <label for="standard">Livraison standard</label>
    </div>
    <div>
      <input type="radio" name="pickup" id="pickup" value="pickup">
      <label for="pickup">Retrait en magasin</label>
    </div>
    <div>
      <input type="radio" name="relay" id="relay" value="relay">
      <label for="relay">Point relais</label>
    </div>
</div>

  <h1>Adresse de livraison</h1>

  <div class="form">
    <label for="name">Nom</label>
    <input type="text" id="name_del" required>

    <label for="adresse">Adresse</label>
    <input type="text" id="adresse_del" required>

    <label for="cp">Code Postal</label>
    <input type="text" id="cp_del" required>

    <label for="ville">Ville</label>
    <input type="text" id="ville_del" required>

    <label for="phone">Numéro de téléphone</label>
    <input type="password" id="phone_del" required>

    <div>
      <input type="checkbox" class="checkbox">
      <label for="phone">Adresse de facturation identique</label>
    </div>
</div>

  <h1>Mode de livraison</h1>

  <div class="mode_pay">
    <div><input type="radio" name="cb" id="cb"> <label for="cb">CB</label></div>
    <div><input type="radio" name="PayPal" id="PayPal"> <label for="PayPal">PayPal</label></div>
    <div><input type="radio" name="Cheque" id="Cheque"> <label for="Cheque">Chèque</label></div>
    <div><input type="radio" name="Virement" id="Virement"> <label for="Virement">Virement bancaire</label></div>
</div>

  <h1>Adresse de facturation</h1>

  <div class="form">
    <label for="name">Nom</label>
    <input type="text" id="name_pay" required>

    <label for="adresse">Adresse</label>
    <input type="text" id="adresse_pay" required>

    <label for="cp">Code Postal</label>
    <input type="text" id="cp_pay" required>

    <label for="ville">Ville</label>
    <input type="text" id="ville_pay" required>

    <label for="phone">Numéro de téléphone</label>
    <input type="password" id="phone_pay" required>
  </div>
  </form>
  <button type="submit">Submit</button>
  <?php else : ?>
        <h1 class="my-12 font-xl "> Permission denied.</h1>
    <?php endif; ?>
</section>
