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
        <?php foreach ($movies as $movie) { ?>
            <div class="movie-container">
                <img class="movieroll" src="/components/filmrulle snutt.svg">
                <img class="poster" src="<?= $movie['poster'] ?>">
                <p class="title"><?= $movie['title'] ?></p>
            <?php } ?>
            </div>
    </section>
    <section class="upcoming">
        <h3>Upcoming</h3>
    </section>


</main>


</body>

<?php
require_once __DIR__ . "/footer.php";
?>