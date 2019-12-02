<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">

        <!-- Reset CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Really beautiful CSS -->
        <link href="<?= url('/'); ?>/css/style.css"  rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,800&display=swap" rel="stylesheet">


        <title>O'Quiz</title>
    </head>
    <body>
        <main>

            <div class="container row  ">

                <div class="right col-md-2 order-md-4  mt-3">

                    <nav  class="navigation pt-4">
                        <ul> 
                            <li class="d-flex justify-content-center">
                                <h5><span><a href="<?= route('home') ?>" class="btn">Accueil</a></span></h5>
                            </li>

                            <?php if (\App\Utils\UserSession::isConnected()): ?>
                                <li class="d-flex justify-content-center">
                                    <h5><span><a href="<?= route('profile') ?>" class="btn">Profil</a></span></h5>
                                </li>
                                <li class="d-flex justify-content-center">
                                    <h5><span><a href="<?= route('signout') ?>" class="btn">Se déconnecter</a></span></h5>
                                </li>
    
                            <?php else: ?>
                            <li class="d-flex justify-content-center">
                                <h5><span><a href="<?= route('signin') ?>" class="btn">Se connecter</a></span></h5>
                            </li>
                            <?php endif ?>

                            <li class="d-flex justify-content-center">
                                <h5><span><a href="<?= route('tags') ?>" class="btn">Thèmes</a></span></h5>
                            </li>
                              
                        </ul>

                    </nav>

                </div>
                
            <div class="col-md-10 order-md-1 mt-3">
        