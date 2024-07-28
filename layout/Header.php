<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css" integrity="sha512-OQDNdI5rpnZ0BRhhJc+btbbtnxaj+LdQFeh0V9/igiEPDiWE2fG+ZsXl0JEH+bjXKPJ3zcXqNyP4/F/NegVdZg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" type="text/css" href="./style/index.css">
    <link rel="stylesheet" type="text/css" href="./style/cart.css">

    <title>Tienda online</title>
</head>

<body>
    <div class="wrapper">
        <header class="header-mobile">
            <a href="./index.php">
                <img class="logo" src="img/logo.png" alt="logo">
            </a>
            <nav class="menu-mobile" id="menu-mobile">
                <ul>
                    <li class="menu-line">
                        <button id="all" class="btn-menu-mobile btn-category">
                            Productos varios
                        </button>
                    </li>
                    <li class="menu-line">
                        <button id="shirts" class="btn-menu-mobile btn-category">
                            Camisetas
                        </button>
                    </li>
                    <li class="menu-line">
                        <button id="coats" class="btn-menu-mobile btn-category">
                            Abrigos
                        </button>
                    </li>
                    <li class="menu-line">
                        <button id="pants" class="btn-menu-mobile btn-category">
                            Pantalones
                        </button>
                    </li>
                    <li>
                        <button id="shoes" class="btn-menu-mobile btn-category">
                            Zapatos
                        </button>
                    </li>
                </ul>
            </nav>
            <div class="header-wrap">
                <div class="res-search-box">
                    <input type="text" class="input" id="res-input" placeholder="Buscar..">

                    <div class="res_search" id="res_search">
                        <i class="ri-search-line"></i>
                    </div>
                </div>

                <a href="./cart.php" class="res-cart" id="res-cart">
                    <i class="ri-shopping-cart-2-fill"></i>
                    <span id="number2" class="res-number">0</span>
                </a>

                <button class="open-menu" id="open-menu">
                    <i class="ri-menu-line nav_burger"></i>
                    <i class="ri-close-large-fill nav_close"></i>
                </button>

                <div class="go-back" id="go-back">
                    <a href="./index.php" class="a-back-arrow"><i class="ri-arrow-left-wide-line"></i>Atras</a>
                </div>
            </div>
        </header>
        <aside>
            <header>
                <a href="./index.php">
                    <img class="logo" src="img/logo.png" alt="logo">
                </a>
            </header>