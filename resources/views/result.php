<?= view('layout.header') ?>

<div class="background mb-4"></div>

<h4>
    <?php if (App\Utils\UserSession::isConnected()) : ?>
        <?php 
            if ($score > 5) { 
                echo "<div> Bravo tu as " . $score . " / " . $nbQuestion . "</div>";
            } else {
                echo "<div> Dommage tu n'as que " . $score . " / " . $nbQuestion . "</div>";
            }
        ?>
    <?php else : ?>
        tu n'es pas connecté
    <?php endif ?>

</h4>

<?= view('layout.footer') ?>
