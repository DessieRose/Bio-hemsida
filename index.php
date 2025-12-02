<?php
require_once __DIR__ . "/header.php";
require_once __DIR__ . "/data.php";
?>

<main>
    <div class="heroimage">
        <img src="./components/heroimage.png" alt="Horror themed hero image.">
    </div>
    <section class="movies" id="movies">
        <h3>Movies</h3>
        <div class="movies-container">
            <?php foreach ($movies as $movie) { ?>
                <div class="movie-container">
                    <a href="movie page.php">
                        <img class="movieroll" src="./components/single movie frame.svg">
                        <img class="poster" src="<?= $movie['poster'] ?>">
                        <div class="hidden-info">
                            <p class="hover-info"><?= $movie['hover-info'] ?></p>
                            <p class="read-more">Read more</p>
                        </div>
                        <p class="title"><?= $movie['title'] ?></p>
                    </a>
                </div>
            <?php } ?>
        </div>
        <a class="see-more">See more</a>
    </section>
    <?php require_once __DIR__ . '/offer-news.php';?>

    <img class="background-filmroll top" src="./components/filmrulle-bakgrund.svg">

    <section class="retro-runs">
        <h3>Retro Runs</h3>
        <div class="movies-container">
            <?php foreach ($retroRuns as $retroRun) { ?>
                <div class="movie-container">
                    <a href="movie page.php">
                        <img class="movieroll" src="./components/single movie frame.svg">
                        <img class="poster" src="<?= $retroRun['poster'] ?>">
                        <div class="hidden-info">
                            <p class="hover-info"><?= $retroRun['hover-info'] ?></p>
                            <p class="read-more">Read more</p>
                        </div>
                        <p class="title"><?= $retroRun['title'] ?></p>
                    </a>
                </div>
            <?php } ?>
        </div>
        <a class="see-more">See more</a>
    </section>

    <img class="background-filmroll bottom" src="./components/filmrulle-bakgrund.svg">

    <section class="upcoming" id="upcoming">
        <h3>Upcoming</h3>
        <div class="movies-container">
            <?php foreach ($upcoming as $new) { ?>
                <div class="movie-container">
                    <a href="movie page.php">
                        <img class="movieroll" src="./components/single movie frame.svg">
                        <img class="poster" src="<?= $new['poster'] ?>">
                        <div class="hidden-info">
                            <p class="hover-info"><?= $new['hover-info'] ?></p>
                            <p class="read-more">Read more</p>
                        </div>
                        <p class="title"><?= $new['title'] ?></p>
                    </a>
                </div>
            <?php } ?>
        </div>
        <a class="see-more">See more</a>
    </section>
<?php require_once __DIR__ . '/offer-news.php';?>
</main>


<?php
require_once __DIR__ . "/footer.php";
?>