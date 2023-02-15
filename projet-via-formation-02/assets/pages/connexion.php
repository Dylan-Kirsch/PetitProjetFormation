<?php

session_start();
require_once '../models/model.php';
$pdo = pdo_connect();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto&display=swap">
    <link rel="stylesheet" href="../css/connexions.css"/>

    <title>Connexion</title>
</head>
<body>

<?php
if(isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password'])){
    $username = $_POST['username'];
    $request = $pdo->prepare('SELECT * FROM membres WHERE username=:use');
    $request->execute(["use" => $username]);
    $use = $request->fetch(PDO::FETCH_ASSOC);
  
  if($use && password_verify($_POST["password"], $use['password'])){
      $_SESSION['username'] = $username;
      $_SESSION['isAdmin'] = $use['admin'] ;
      header('Location:profil.php');
  
    }else{
      echo 'error';
    }
}
?>


    <div class="connect" >

        <h1>Connexion</h1>

        <form method="POST">
            <div class="name">
                <input type="text" name="username" placeholder="Nom ">
            </div>

            <div class="pass">
                <input type="password" name="password" placeholder="mdp ">
            </div>

            <button type="submit" name="submit">Go</button>
        </form>
    </div>
</body>
</html>


