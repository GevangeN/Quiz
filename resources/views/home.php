<?= view('layout.header') ?>

<div class="background mb-4"></div>

<h4>
    <?php if (App\Utils\UserSession::isConnected()) : ?>
        <Div> Bonjour <?= \App\Utils\UserSession::getUser()->firstname ?>  <?= \App\Utils\UserSession::getUser()->lastname ?> </Div>
        <Div> Pret à défier la team Rocket? </Div> 
    <?php else : ?>
    <?php endif ?>

</h4>

<div class="row">
    <?php foreach ($quizzes  as $quiz) : ?>

        <div class="col-md-6 mb-4">
            <div class="card bg-lght">
            <h3 class="card-header"><a href="<?= route('quiz', ['idQuiz' => $quiz->id]) ?>"><?= $quiz->title ?></a></h3>
                <div class="card-body">
                    <h5 class="card-title"><?= $quiz->description ?></h5>
                    <p class="card-text"><?= $quiz->user->firstname ?> <?= $quiz->user->lastname ?></p>
                </div>
            </div>
        </div>                    

    <?php endforeach; ?>
</div>

<?= view('layout.footer') ?>
