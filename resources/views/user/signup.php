<?= view('layout.header') ?>

<div class="background mb-4"></div>

<form class="col-md-6 mb-6 " action="<?= route('CreateUser')?>" method="post">

    <p class="row d-flex justify-content-center">
        <label class="col-md-4" for="firstname">Prénom</label>
        <input class="col-md-6 mb-6" type="text" name="firstname" id="firstname" required>
    </p>
    <p class="row d-flex justify-content-center">
        <label class="col-md-4" for="lastname">Nom</label>
        <input class="col-md-6 mb-6" type="text" name="lastname" id="lastname" required>
    </p>
    <p class="row d-flex justify-content-center">
        <label class="col-md-4" for="email">E-mail</label>
        <input class="col-md-6 mb-6" type="email" name="email" id="email" required>
    </p>
    <p class="row d-flex justify-content-center">
        <label class="col-md-4" for="password">Mot de passe</label>
        <input class="col-md-6" type="password" name="password" id="password" required>
    </p>
    <p>
        <button class="btn" type="submit">Créer le compte</button>
    </p>
</form>

<?= view('layout.footer') ?>

