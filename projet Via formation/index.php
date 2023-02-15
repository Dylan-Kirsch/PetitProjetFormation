<?php
require_once '../correction/assets/models/models.php';

// require_once './assets/models/db.php';
$sql = pdo_connect();

$request = $sql->prepare('SELECT * FROM boutique ORDER BY id DESC');
$request->execute();
$mescard = $request->fetchAll(PDO::FETCH_ASSOC);
// require("config/commande.php");
// $mescard=afficher();

?>



<!DOCTYPE html>

<html lang="fr">

    <head>

        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>Via Multimedia</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto&display=swap">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" href="css/boutique.css"/>


    </head>

    <body>

        <header>

<!-- BARRE NAVIGATION  -------->

            <nav class="navbar navbar-expand-lg fixed-top justify-content-between">

                <!--- LOGO --->

                <a class="navbar-brand" href="#">
                    <img id="logo" class="rounded-pill" style="width: 60px;" src="logo.png" alt="Via Multimedia" />
                </a>
                
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="index.html" target="_blank">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="boutique.html" target="_blank">Boutique</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html" target="_blank">Contact</a>
                    </li>

                </ul>
            </nav>

        </header>

<!-- BREADCRUMB ----------------------------------- -->
        
        <div id="bread">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                <li class="breadcrumb-item">Boutique</li>
            </ul>

            <h1 class="font-weight-bold">Jeux Playstation</h1>

        </div>

<!-- PLAYSTATION ------------->    

        <section id="playstation" class="container">

        <!-- CARD 1 -------->    

            <div class="card">

        <?php foreach($mescard as $boutique): ?>

                <img class="card-img" src="<?=$boutique['photo']?>" alt="The last of us part 1 PS5">

                <h3><?=$boutique['nom']?>></h3>
                <ul>
                    <li>Type de jeux: Aventure</li>
                    <li>Age : +18 ans</li>
                    <li>Compatible : PS5</li>
                </ul>

                <a href="#" class="btn btn-primary mt-auto"><?= $boutique['nom']?></a>

         <?php endforeach; ?>

            </div>

        </section>

<!-- XBOX ------------------>

        <h1 class="xboxx font-weight-bold">Jeux Xbox</h1>

        <section id="xbox" class="container">

        <!-- CARD 1 -------->    

            <div class="card">

                <img class="card-img" src="cards_boutique/halo_infinite_xbox.webp" alt="Halo Infinte">

                <h3>Halo Infinte</h3>
                <ul>
                    <li>Type de jeux: Combats</li>
                    <li>Age : +16 ans</li>
                    <li>Compatible : Xbox One, Xbox One X, Xbox One S, Xbox Series X, Xbox Series S</li>
                </ul>

                <a href="#" class="btn btn-primary mt-auto">35€</a>

            </div>

        <!-- CARD 2 -------->    

            <div class="card">

                <img class="card-img" src="cards_boutique/just_dance_2020.webp" alt="Just Dance 2020">

                <h3>Just Dance 2020</h3>
                <ul>
                    <li>Type de jeux: Dance et Musique</li>
                    <li>Age : +3 ans</li>
                    <li>Compatible : Xbox One, Xbox One X, Xbox One S, Xbox Series X, Xbox Series S</li>
                </ul>

                <a href="#" class="btn btn-primary mt-auto">41€</a>
            
            </div>

        <!-- CARD 3 -------->

            <div class="card">

                <img class="card-img" src="cards_boutique/ghost_recon.webp" alt="Ghost Recon Breakpoint">

                <h3>Ghost Recon Breakpoint</h3>
                <ul>
                    <li>Type de jeux: Aventure</li>
                    <li>Age : +18 ans</li>
                    <li>Compatible : Xbox One, Xbox One X, Xbox One S, Xbox Series X, Xbox Series S</li>
                </ul>

                <a href="#" class="btn btn-primary mt-auto">57€</a>
                
            </div>
        
        <!-- CARD 4 -------->

            <div class="card">

                <img class="card-img" src="cards_boutique/resident_evil.webp" alt="Resident Evil Village">

                <h3>Resident Evil Village</h3>
                <ul>
                    <li>Type de jeux: Horreur</li>
                    <li>Age : +18 ans</li>
                    <li>Compatible : Xbox One, Xbox One X, Xbox One S, Xbox Series X, Xbox Series S</li>
                </ul>

                <a href="#" class="btn btn-primary mt-auto">70€</a>
                
            </div>

        <!-- CARD 5 -------->

            <div class="card">

                <img class="card-img" src="cards_boutique/rainbaw_six.webp" alt="Rainbow Six Siege Extraction">

                <h3>Rainbow Six Siege Extraction</h3>
                <ul>
                    <li>Type de jeux: Aventure</li>
                    <li>Age : +18 ans</li>
                    <li>Compatible : Xbox One, Xbox One X, Xbox One S, Xbox Series X, Xbox Series S</li>
                </ul>

                <a href="#" class="btn btn-primary mt-auto">70€</a>
                
            </div>

        <!-- CARD 6 -------->    

            <div class="card">

                <img class="card-img" src="cards_boutique/nba_2k22.webp" alt="NBA 2K22">

                <h3>NBA 2K22</h3>
                <ul>
                    <li>Type de jeux: Sport</li>
                    <li>Age : +3 ans</li>
                    <li>Compatible : Xbox One, Xbox One X, Xbox One S, Xbox Series X, Xbox Series S</li>
                </ul>

                <a href="#" class="btn btn-primary mt-auto">70€</a>
                
            </div>

        <!-- CARD 7 -------->    

            <div class="card">

                <img class="card-img" src="cards_boutique/forza_horizon_4.webp" alt="Forza Horizon 4">

                <h3>Forza Horizon 4</h3>
                <ul>
                    <li>Type de jeux: Course</li>
                    <li>Age : +3 ans</li>
                    <li>Compatible : Xbox One, Xbox One X, Xbox One S, Xbox Series X, Xbox Series S</li>
                </ul>

                <a href="#" class="btn btn-primary mt-auto">25€</a>
                
            </div>

        </section>

<!-- COPYRIGHT -------------->

        <footer class="bg-dark text-white p-4 text-center">

            <h5 class="text-uppercase">
                social network <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a> <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
            </h5>
            <p>Company © ViaMultimedia. All rights reserved.</p>

        </footer> 

    </body>

</html>