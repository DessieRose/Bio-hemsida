<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Brawler:wght@400;700&family=Creepster&family=Road+Rage&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./header.css">
    <link rel="stylesheet" href="./footer.css">
    <title>The Big Scream</title>
</head>

<body>
    <header class="site-header">
        <!-- Logo -->
        <div class="logo"><img src="./components/logo.png" alt="logo"></div>

        <!-- ROW 1 -->
        <div class="header-top">
            <div class="location">
                <img class="location-icon" src="./components/icons/location.svg" alt="location"> 
                Location 
                <img class="arrow-down" src="./components/icons/arrow-down.svg" alt="arrow-down">
            </div>

            <div class="signin">
                <img class="avatar" src="./components/icons/avatar.svg" alt="avatar">
                Sign in
                <img class="arrow-down" src="./components/icons/arrow-down.svg" alt="arrow-down">
            </div>
        </div>

        <!-- ROW 2 -->
        <div class="header-main">

            <!-- Left nav -->
            <nav class="nav-desktop-left">
                <a href="./index.php">Home</a>
                <a href="#">Movies</a>
                <a href="#">Upcoming</a>
            </nav>

            <!-- Right nav + cart -->
            <!-- <div class="nav-desktop-right"> -->
            <nav class="nav-desktop-right">
                <a href="#">Experience</a>
                <a href="#">Tickets</a>
                <a class="cart"><img src="./components/icons/cart.svg" alt="cart">0</a>
            </nav>
            <!-- </div> -->
        </div>
    </header>
    <div class="offer">
        <p class="thick">Use offercode: SPOOKY30 at checkout</p>
    </div>
            
    <!-- Mobile bottom nav -->
    <div class="nav-mobile">
        <div class="shopping-cart">
            <img src="./components/icons/cart.svg" alt="shopping-cart"><h3 class="cart-count">0 </h3>
        </div>

        <!-- Rounded switch -->
        <div class="switch">
            <input type="radio" name="theme" id="moon" checked>
            <label for="moon"><img src="./components/icons/moon.svg" alt="moon"></label>

            <input type="radio" name="theme" id="pumpkin">
            <label for="pumpkin"><img src="./components/icons/pumpkin.svg" alt="pumpkin"></label>

            <input type="radio" name="theme" id="tree">
            <label for="tree"><img src="./components/icons/tree.svg" alt="tree"></label>

            <div class="slider"></div>
        </div>

        <div class="container-menu-text" id="burger-menu">
            <p class="menu-text">Menu <img src="./components/icons/arrow.svg" alt="arrow"></p>
        </div>
    </div>

    <!-- Hidden menu panel -->
    <nav class="mobile-menu" id="menu">
        <div class="menu-top">
            <img src="./components/icons/avatar.svg" alt="avatar" class="avatar">
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
                <img src="./components/icons/location.svg" alt="location icon" class="icon">
                <span>Location</span>
            </div>
        </div>
    </nav>