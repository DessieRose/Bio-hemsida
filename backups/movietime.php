<?php
require_once __DIR__ . '/header.php';
$date = new DateTime('');

$today = new DateTime();
$tomorrow = (new DateTime())->modify('+1 day');

?>

<section>
    <div class="tickets-container">
        <div class="tickets-top-border">
            <h3>Tickets</h3>
            <i>&darr;</i>
        </div>

        <?php
        for ($i = 0; $i < 6; $i++) { 

        if ($date->format('Y-m-d') === $today->format('Y-m-d')) {
            $lable = 'Today';
        } else if ($date->format('Y-m-d') === $tomorrow->format('Y-m-d')) {
            $lable = 'Tomorrow';
        } else {
            $lable = $date->format('l');
        } ?>

        <a href="">
            <div class="ticket-dates" >
                    <p><?= $lable ?></p>
                    <p><?= $date->format('D d M'); ?></p>

            </div>
        </a> <?php
        $date->modify('+1 day');
        }
        ?>
    </div>
</section>