<?= view('layout.header') ?>

<div class="background_quiz mb-4"> 
        <h1 style="text-align:center;" class="titre"><?= $quizzes->title ?></h1>
</div>

<div>
    <div class="titre">
    <h2 class="d-flex justify-content-center"><?= $quizzes->description ?></h2>
        <h4 class= "d-flex justify-content-center">
            <?= count($quizzes->questions) ?> questions sur les thèmes 
    
            <?php foreach ($quizzes->tags as $tag) :?>
                <span class="badge"> <h5><?= $tag->name ?></h5> </span>
            <?php endforeach ?>
        </h4>
    </div>
</div>

<div>
    <p class="text-right">par <?= $quizzes->user->firstname ?>
        <?= $quizzes->user->lastname ?>
    </p>
</div>

<?php if (\App\Utils\UserSession::isConnected()): ?>
    <form action="<?= route('result', ['idQuiz' => $quizzes->id]) ?>" method="POST">
        <div class="row ">    

            <?php $number = 0; ?>
            <?php foreach($quizzes->questions->shuffle() as $question) : ?>
            
                <div class="col-md-11 question">
                    <span class="badge level--<?= $question->levels->name ?> col-md-1"><?= $question->levels->name ?></span>
                    <div class="card bg-lght">
                        <div class="card-header d-flex justify-content-center"> <?= $number = $number + 1 ?>. <?= $question->question ?> </div>
                        <div class="card-body">
                            <ul class="card-title">
                                <?php foreach($question->answers->shuffle() as $answer) : ?>

                                <li><h6 class="d-flex justify-content-center">
                                    <input type="radio" name="<?= $question->id ?>" id="<?= $answer->id ?>" value="<?= $answer->id ?>">
                                    <label class="col-md-2 mb-2" for="<?= $answer->id ?>"><?= $answer->description ?></label>
                                </h6></li>

                                <?php endforeach ?>                    
                            </ul> 
                        </div>
                    </div>
                </div>

            <?php endforeach ?>
            <div><input class="btn" type="submit" value="OK"/></div>
        
        </div>
    </form>
<?php else: ?>
    <li class="d-flex justify-content-center">
        <h5><span><a href="<?= route('signin') ?>" class="btn">Se connecter</a></span></h5>
    </li>

<?php endif ?>


<?= view('layout.footer') ?>