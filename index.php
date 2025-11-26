<?php
require_once __DIR__ . "/header.php";
require_once __DIR__ . "/data.php";
?>

<main>
    <div class="heroimage">
        <img src="/components/heroimage.png" alt="Horror themed hero image.">
    </div>
    <section class="movies">
        <h3>Movies</h3>
        <div class="movies-container">
            <?php foreach ($movies as $movie) { ?>
                <div class="movie-container">
                    <a href="movie page.php">
                        <img class="movieroll" src="/components/single movie frame.svg">
                        <img class="poster" src="<?= $movie['poster'] ?>">
                        <div class="hidden-info">
                            <p class="hover-info"><?= $movie['hover-info'] ?></p>
                            <p class="read-more">Read more</p>
                        </div>
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
                    <div class="hidden-info">
                        <p class="hover-info"><?= $movie['hover-info'] ?></p>
                        <p class="read-more">Read more</p>
                    </div>
                    <p class="title"><?= $movie['title'] ?></p>
                </div>
            <?php } ?>
            <a class="see-more">See more</a>
        </div>
    </section>

</main>


</body>

<?php
require_once __DIR__ . "/footer.php";
?>