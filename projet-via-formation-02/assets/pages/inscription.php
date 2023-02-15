<?php
session_start();
require_once '../models/model.php';
include_once('../pages/nav.php');
$pdo = pdo_connect();

if(isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['f_name']) && !empty($_POST['l_name']) && !empty($_POST['img'])){


$hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
$request = $pdo->prepare('INSERT INTO membres VALUE (NULL , :username,:password,:f_name,:l_name,:admin,:img)');
$request->execute([
    'username' => $_POST['username'],
    'password' => $hash,
    'f_name' => $_POST['f_name'],
    'l_name' => $_POST['l_name'],
    'admin' => (int)isset($_POST['admin']),
    'img' => $_POST['img'],
]);
    header('location:profil.php');
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="../css/boutiques.css"/>
    <link rel="stylesheet" href="../css/index.css"/>
    <title>inscrition</title>

</head>
<body>
    <form method="POST" >
        <div>
            <span class="user"> Nom user</span>
            <input type="text" placeholder="Votre nom" name="username">
        </div>

        <div>
            <span class="mdp">Mot de passe</span>
            <input type="password" placeholder="Votre mdp" name="password">
        </div>

        <div>
            <span class="prenom"> Prénom</span>
            <input type="text" placeholder="Votre prenom" name="f_name">
        </div>

        <div>
            <span class="nom"> Nom</span>
            <input type="text" placeholder="Votre nom" name="l_name">
        </div>

        <div>
            <span class="img"> Img</span>
            <input type="text" placeholder="Votre url" name="img">
        </div>

        <div>
            <input type="checkbox" name="admin" id="dot-1" value="1">
            <span class="admin">Admin</span>
        </div>

        <div>
            <input type="submit" name="submit" value="new">
        </div>
    </form>
</body>
</html>