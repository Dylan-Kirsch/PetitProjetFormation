<?php
session_start();
require_once '../models/model.php';
//include_once('../pages/nav.php');
$pdo = pdo_connect();

if(isset($_SESSION["isAdmin"])) {
    if(isset($_POST['submit']) && !empty($_POST['categorie']) && !empty($_POST['nom']) && !empty($_POST['prix']) && !empty($_POST['img'])){
        $request = $pdo->prepare('INSERT INTO artciles VALUE (NULL , :categorie,:model,:marque,:nom,:prix,:img,:plateforme,:pertinence,:filtre)');
        $request->execute([
            'categorie' => $_POST['categorie'],
            'model' => $_POST['model'],
            'marque' => $_POST['marque'],
            'nom' => $_POST['nom'],
            'prix' => $_POST['prix'],
            'img' => $_POST['img'],
            'plateforme' => $_POST['plateforme'],
            'pertinence' => $_POST['pertinence'],
            'filtre' => $_POST['filtre'],
        ]);
            header('location:profil.php');
        } 
    } else {
            header("location:dd.html");
        
}

?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>

    <form method="POST" >
        <div>
            <span class="categorie"> catégorie</span>
            <input type="text" name="categorie">
        </div>

        <div>
            <span class="categorie"> model</span>
            <input type="text" name="model">
        </div>

        <div>
            <span class="categorie"> marque</span>
            <input type="text" name="marque">
        </div>

        <div>
            <span class="nom"> titre</span>
            <input type="text" name="nom">
        </div>

        <div>
            <span class="prix"> prix</span>
            <input type="text" name="prix">
        </div>

        <div>
            <span class="img"> Img</span>
            <input type="text" name="img">
        </div>

        <div>
            <span class="categorie"> plateforme</span>
            <input type="text" name="plateforme">
        </div>

        <div>
            <span class="categorie"> pertinence</span>
            <input type="text" name="pertinence">
        </div>

        <div>
            <span class="categorie"> filtre</span>
            <input type="text" name="filtre">
        </div>

        <div>
            <input type="submit" name="submit" value="new">
        </div>
    </form>



    
</body>
</html>