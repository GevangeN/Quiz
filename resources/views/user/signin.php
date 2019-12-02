<?= view('layout.header') ?>

<div class="background mb-4"></div>

<div class="row">

    <form class="col-md-6 mb-6" action="<?= route('signin_user'); ?>" method="post">
        <p class="row">
            <label class="col-md-4 sign" for="email">E-mail</label>
            <input class="col-md-6 mb-6" type="email" name="email" id="email" required>
        </p>
        <p class="row">
            <label class="col-md-4 sign" for="password">Mot de passe</label>
            <input class="col-md-6" type="password" name="password" id="password" required>
        </p>
        <p>
            <button class="btn" type="submit">Se connecter</button>
        </p>
    </form>

    <div class="col-md-6 mb-6 sign">
        Pas de compte?
        <a href="<?= route('signup') ?>" class="btn">cliquez ici</a>
    </div>

</div>

<?= view('layout.footer') ?>

