<?php

session_start();
require_once '../models/model.php';

$pdo = pdo_connect();

if(isset($_SESSION["isAdmin"])) {
    $req = $pdo->prepare('SELECT * FROM MEMBRES WHERE username = :username');
    $req->execute(['username' => $_SESSION['username']]);
    $user = $req->fetch();
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
    <title>Document</title>
</head>
<body>
<p><?=$user['l_name'] ?></p>
    
</body>
</html>