<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Brawler:wght@400;700&family=Creepster&family=Road+Rage&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="headerStyle.css">
    <link rel="stylesheet" href="style.css">
    <title>The Big Scream</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="components/logo.png" alt="The-big-scream logo">
        </div>
        <nav id="menu">
            <!-- Side Menu -->
            <div class="menu-top">
                <img src="components/icons/avatar.svg" alt="avatar" class="avatar">
                <span class="sign-in">Sign in</span>
            </div>

            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Movies</a></li>
                <li><a href="#">Upcoming</a></li>
                <li><a href="#">Experience</a></li>
                <li><a href="#">Get tickets</a></li>
            </ul>

            <div class="menu-bottom">
                <hr>
                <div class="location">
                    <img src="components/icons/location.svg" alt="location icon" class="icon">
                    <span>Location</span>
                </div>
            </div>
        </nav>
        <section class="offer">
            <div>
                <p class="thick">Use offercode: SPOOKY30 at checkout</p>
            </div>
        </section>
        <!-- Fixed bottom bar -->
        <div class="menu">
            <div class="shopping-cart">
                <img src="components/icons/cart.svg" alt="shopping-cart"><h3 class="cart-count">0 </h3>
            </div>
            <!-- Rounded switch -->
            <div class="switch">
                <input type="radio" name="theme" id="moon" checked>
                <label for="moon"><img src="components/icons/moon.svg" alt="moon"></label>

                <input type="radio" name="theme" id="pumpkin">
                <label for="pumpkin"><img src="components/icons/pumpkin.svg" alt="pumpkin"></label>

                <input type="radio" name="theme" id="tree">
                <label for="tree"><img src="components/icons/tree.svg" alt="tree"></label>

                <div class="slider"></div>
            </div>

            <div class="container-menu-text" id="burger-menu">
                <p class="menu-text">Menu <img src="components/icons/arrow.svg" alt="arrow"></p>
            </div>

        </div>
    </header>

