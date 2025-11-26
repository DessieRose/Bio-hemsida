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
    <section class="movie-info">

        <iframe width=100% height=250px src="<?= $selectedMovie['trailer'] ?>" frameborder="0"></iframe>"

        <?php
        if ($selectedMovie) { ?>
            <div class="picture-wrapper">
                <?php foreach ($selectedMovie['media'] as $picture) { ?>
                    <div class="picture-containers">
                        <img class="picture" src="<?= $picture ?>">
                    </div>
                <?php } ?>
            </div>
            <h3><?= $selectedMovie['title'] ?></h3>
            <p><?= $selectedMovie['synopsis'] ?></p>
            <p>Lead Actors:</p>
            <ul class="actor-list">
                <?php foreach ($selectedMovie['actors'] as $actor) {
                ?> <li class="actor"><?= $actor ?></li>
                <?php } ?>
            </ul>
        <?php } ?>
    </section>

</main>
</body>

<?php
require_once __DIR__ . '/footer.php';
?>