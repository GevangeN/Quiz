<?= view('layout.header') ?>

<div class="background mb-4"></div>

<div class="row">

    <?php foreach ($tag  as $tag) : ?>

        <div class="col-md-6 d-flex justify-content-center">
            
            <h2>
                <a class="btn tag " href="<?= route('tagQuizzes', ['idTag' => $tag->id]) ?>"><?= $tag->name ?></a>
            </h2>
            
        </div>     

    <?php endforeach; ?>

</div>

<?= view('layout.footer') ?>
 