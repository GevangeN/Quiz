<?= view('layout.header') ?>

<div class="background mb-4"></div>

<div class="profil">Prenom : <?= \App\Utils\UserSession::getUser()->firstname ?></div>
<div class="profil">Nom : <?= \App\Utils\UserSession::getUser()->lastname ?></div>
<div class="profil">Email : <?= \App\Utils\UserSession::getUser()->email ?></div>


<?= view('layout.footer') ?>
