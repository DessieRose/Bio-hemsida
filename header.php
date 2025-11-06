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
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="">Movies</a></li>
                <li><a href="">Upcoming</a></li>
                <li><a href="">Experience</a></li>
                <li><a href="">Get tickets</a></li>
            </ul>
        </nav>
        <section class="offer">
            <div>
                <p class="thick">Use offercode: SPOOKY30 at checkout</p>
            </div>
        </section>
        <div class="menu">
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

            <button class="container-menu-text">
                <p class="menu-text">Menu <img src="components/icons/arrow.svg" alt="arrow"></p>
            </button>

        </div>
    </header>

