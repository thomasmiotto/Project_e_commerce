<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Styles/global.css">
    <link rel="stylesheet" href="../Styles/page_log-sign-in.css">
    <link rel="stylesheet" href="../Styles/header_footer.css">
    <link rel="stylesheet" href="../Styles/home.css">
    <link rel="stylesheet" href="../Styles/product_list.css">
    <link rel="stylesheet" href="../Styles/product_in_cart.css">
    <link rel="stylesheet" href="../Styles/cart.css">
    <link rel="stylesheet" href="../Styles/index.css">
    <link rel="stylesheet" href="../Styles/buying_journey.css">

    <title>Document</title>
</head>

<body>


    <header>

        <?php
        if ($_SESSION['name'] != null) : ?>
            <div id="top_container">
                <div id="logo_search_container">
                    <a href="/home">
                        <img src="../Assets/logo.png" alt="moto_coolos" class="logo">
                    </a>
                    <p class="logo_txt">Le meilleur de l'équipement deux roues</p>
                    <input type="text" class="searchbar" placeholder="  Search...">
                </div>
                <div class="circle_container">
                    <a href="profile"><img src="../Assets/profil.png" alt=""></a>
                    <a href="cart"><img src="../Assets/panier.png" alt=""></a>
                    <a href="contact"><img src="../Assets/email.png" alt=""></a>
                    <a href="logout" class="my-auto mr-4 hover:underline p-4">logout</a>
                </div>

            </div>
        <?php else : ?>
            <div id="top_container">
                <div id="logo_search_container">
                    <img src="../Assets/logo.png" alt="moto_coolos" class="logo">
                    <p class="logo_txt">Le meilleur de l'équipement deux roues</p>
                    <input type="text" class="searchbar" placeholder="  Search...">
                </div>
                <div class="flex gap-2 m-auto mr-4">
                    <a href="/login" class="hover:underline p-4">Login <?= $_SESSION['pseudo'] ?></a>
                    <a href="/signup" class="hover:underline p-4">Sign up</a>
                </div>
            </div>
        <?php endif; ?>
        <div class="red_container">
            <h1>CATEGORIES</h1>
            <a href=""><img src="../Assets/menu.png" alt=""></a>
        </div>
        <ul>
            <li><a href="">casques</a></li>
            <li><a href="">accesoires</a></li>
            <li><a href="">pièces moto</a></li>
            <li><a href="">pneus</a></li>
        </ul>
        </nav>
    </header>