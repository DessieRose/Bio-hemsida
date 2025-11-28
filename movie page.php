<?php
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/data.php';

$selectedMovie = NULL;

foreach ($movies as $movie) {
    if ($movie['id'] === 2) {
        $selectedMovie = $movie;
        break;
    }
}
?>

<main>
    <section class="movie-detail">

        <iframe class="trailer" src="<?= $selectedMovie['trailer'] ?>" frameborder="0"></iframe>"

        <?php
        if ($selectedMovie) { ?>
            <section class="padding">
                <div class="genre-wrapper">
                    <div class="rated-box">
                        <p class="rated"><?= $selectedMovie['rated'] ?></p>
                    </div>
                    <div class="genres">
                        <?php foreach ($selectedMovie['genres'] as $genre) { ?>
                            <div class="genre-box">
                                <p class="genre"><?= $genre ?></p>
                            </div>
                        <?php
                        } ?>
                    </div>
                </div>
                <h3 class="title-page"><?= $selectedMovie['title'] ?></h3>
                <div class="main-wrapper">
                    <p class="synopsis"><?= $selectedMovie['synopsis'] ?></p>

                    <div class="actor-director-wrapper">
                        <div class="actor-box">
                            <p class="list-header">Actors:</p>
                            <ul class="actor-list">
                                <?php foreach ($selectedMovie['actors'] as $actor) {
                                ?> <li class="actor list"><?= $actor ?></li>
                                <?php } ?>
                            </ul>
                        </div>

                        <div class="director-box">
                            <p class="list-header">Director:</p>
                            <li class="list"><?= $selectedMovie['director'] ?></li>
                            <p class="list-header">Runtime:</p>
                            <li class="list">1h 22m</li>
                        </div>
                    <?php } ?>
                    </div>
                </div>

                <div class="picture-wrapper">
                    <?php foreach ($selectedMovie['media'] as $picture) { ?>
                        <div class="picture-containers">
                            <img class="picture" src="<?= $picture ?>">
                        </div>
                    <?php } ?>
                </div>
            </section>
    </section>

</main>
</body>

<?php
require_once __DIR__ . '/footer.php';
?>