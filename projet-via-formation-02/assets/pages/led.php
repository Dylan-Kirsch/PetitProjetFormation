<?php
require_once '../models/model.php';
// require_once'./assets/models/model.php';
include_once('../pages/nav.php');


$pdo = pdo_connect();
$request = $pdo ->prepare('SELECT `id`, `categorie`, `model`, `marque`, `nom`, `prix`, `img`, `plateforme`, `pertinence`, `filtre`  FROM artciles');
$request ->execute();
$boutiques = $request->fetchALL(PDO::FETCH_ASSOC)

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table,
td {
    border: 1px solid #333;
}

thead,
tfoot {
    background-color: #333;
    color: #fff;
}

    </style>
</head>
<body>
<table>
    <thead>
        <tr>
            
            <th> categorie</th>
            <th>Model</th>
        </tr>
    </thead>

    <tbody>
    <?php foreach($boutiques as $boutique){ ?>

       
        <tr>
            <td><?=$boutique['categorie'] ?></td>
            <td><?=$boutique['model'] ?></td>
        </tr>
<?php
} 
?> 
    </tbody>
</table>

</body>
</html>