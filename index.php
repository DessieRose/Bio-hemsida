<?php
require_once __DIR__ . "/header.php";
require_once __DIR__ . "/data.php";
?>

<main>
    <div class="hero-container">
        <img class="hero-image" src="/components/heroimage.png" alt="Horror themed hero image.">
    </div>
    <section class="movies">
        <h3>Movies</h3>
        <div class="movies-container">
            <?php foreach ($movies as $movie) { ?>
                <div class="movie-container">
                    <a href="movie page.php">
                        <img class="movieroll" src="/components/single movie frame.svg">
                        <img class="poster" src="<?= $movie['poster'] ?>">
                        <p class="title"><?= $movie['title'] ?></p>
                    </a>
                </div>
            <?php } ?>
            <a class="see-more">See more</a>
        </div>
    </section>
    <section class="upcoming">
        <h3>Upcoming</h3>
        <div class="movies-container">
            <?php foreach ($movies as $movie) { ?>
                <div class="movie-container">
                    <img class="movieroll" src="/components/single movie frame.svg">
                    <img class="poster" src="<?= $movie['poster'] ?>">
                    <p class="title"><?= $movie['title'] ?></p>
                </div>
            <?php } ?>
            <a class="see-more">See more</a>
        </div>
    </section>
    <section class="offer">
        <div class="offer-top">
            <h3>Halloween offer!</h3>
        </div>
        <div class="offer-bottom">
            <p>Get 30% off all tickets this halloween!</p>
            <p>Valid for all new tickets purchased between October 20th and November 10th</p>
            <p>Use offercode: <a>SPOOKY30</a> at checkout.</p>
        </div>
    </section>

</main>


</body>

<?php
require_once __DIR__ . "/footer.php";
?>