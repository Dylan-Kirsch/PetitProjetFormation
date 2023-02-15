<?php
session_start();
require_once '../models/model.php';
// require_once'./assets/models/model.php';
include_once('../pages/nav.php');


$pdo = pdo_connect();
$request = $pdo ->prepare('SELECT `id`, `categorie`, `model`, `marque`, `nom`, `prix`, `img`, `plateforme`, `pertinence`, `filtre`  FROM artciles');
$request ->execute();
$boutiques = $request->fetchALL(PDO::FETCH_ASSOC);

?>







<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto&display=swap">
    <link rel="stylesheet" href="../css/lectures.css"/>

    <title>Mangas/Livres/BD</title>
</head>

<body>

    <div id="mgsh">

        <h2>Mangas</h2>

        <div class="container shonen">

            <div class="new" >
                
                <h3>Shõnen</h3>
            </div>

            <?php foreach($boutiques as $boutique) {?>

            <div class="card">

                <div class="container ">

                    <img src="<?=$boutique['img']?>" alt="image">
                    <div id="types"><?=$boutique['categorie']?></div>
                    <div id="title"><?=$boutique['nom']?></div>
                    <div id="prix"><?=$boutique['prix']?>&#8364</div>

                </div>

            </div>

            <?php
            } 
            ?> 

           
                    <!-- ISEKAI -->

            <div id="isekai" class="container">
                <h3>Isekai</h3>
            </div>


            <?php foreach($boutiques as $boutique) {?>

            <div class="card">

                <div class="container ">

                    <img src="<?=$boutique['img']?>" alt="image">
                    <div id="types"><?=$boutique['categorie']?></div>
                    <div id="title"><?=$boutique['nom']?></div>
                    <div id="prix"><?=$boutique['prix']?>&#8364</div>

                </div>

            </div>

            <?php
            } 
            ?>



        </div>
    </div>

    
</body>
</html>