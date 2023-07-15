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
    <link rel="stylesheet" href="../Styles/contact.css">

    <title>Document</title>
</head>

<body>

    <div class="flex flex-col h-screen">
        <header>

            <?php

            use Controllers\ProductController;

            if ($_SESSION['user'] != null) : ?>
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
                        <a href="logout" class="my-auto mr-4 hover:underline p-4 font-bold">logout</a>
                    </div>

                </div>
            <?php else : ?>
                <div id="top_container" class="justify-between">
                    <div id="logo_search_container">
                        <a href="/home">
                            <img src="../Assets/logo.png" alt="moto_coolos" class="logo">
                        </a>
                        <p class="logo_txt">Le meilleur de l'équipement deux roues</p>
                        <input type="text" class="searchbar" placeholder="  Search...">
                    </div>
                    <div class="flex gap-2 m-auto mr-4">
                        <a href="/login" class="hover:underline p-4 font-bold my-auto mr-4">Login </a>
                    </div>
                </div>
            <?php endif; ?>
            <div class="red_container">
                <h1>CATEGORIES</h1>
                <a href=""><img src="../Assets/menu.png" alt=""></a>
            </div>
            <ul>
                <?php
                foreach (ProductController::listCategories() as $c) : ?>
                    <li><a href="/category?category=<?= $c->id ?>">
                            <?= strtoupper($c->name) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            </nav>
        </header>