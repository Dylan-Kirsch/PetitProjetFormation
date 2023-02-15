<?php
session_start();
require_once './assets/models/model.php';
// require_once'./assets/models/model.php';
include_once('./assets/pages/nav.php');


$pdo = pdo_connect();
$request = $pdo ->prepare('SELECT `id`, `nom`, `prenom`, `pays`, `message` FROM contact');
$request ->execute();
$contacts = $request->fetchALL(PDO::FETCH_ASSOC);


if(isset($_POST['submit']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['pays']) && !empty($_POST['message'])){

$request = $pdo->prepare('INSERT INTO CONTACT VALUE (NULL , :nom, :prenom, :pays, :message)');
$request->execute([
    'nom' => $_POST['nom'],
    'prenom' => $_POST['prenom'],
    'pays' => $_POST['pays'],
    'message' => $_POST['message'],
]);
    header('location:profil.php');
}

?>



<?php 
foreach($contacts as $contact) {
}
?>

<?//=$contact['nom']?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="assets/css/contact.css"/>

    <title>contact</title>
</head>

<body>
    
    <div class="contact">Contact</div>
    
        <div class="container">

            <div class="map">

                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2709.6744501831568!2d2.0697614999999994!3d47.2229519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47fadbd99a7ebf89%3A0x5b20fc377422c2a5!2sPLAYMOGAMES!5e0!3m2!1sfr!2sfr!4v1666189218650!5m2!1sfr!2sfr" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
            
            <div >

                <form method="POST" >

                    <div  class="row">

                        <div class="dd">
                            <label form="fname" >Nom</label>
                        </div>
                        <div class="cc">
                            <input type="text" id="fname" name="nom" placeholder="votre nom">
                        </div>

                    </div>

                    <div class="row">

                        <div class="dd">
                            <label form="lname" >Prenom</label>
                        </div>
                        <div class="cc">
                            <input type="text" id="lname" name="prenom" placeholder="votre prenom">
                        </div>

                    </div>

                    <div class="row">

                        <div class="dd">
                            <label form="country" >Pays</label>
                        </div>

                        <div class="cc">

                            <select id="country" name="pays">
                                <option value="usa">USA</option>
                                <option value="france">France</option>
                                <option value="belgique">Belgique</option>
                            </select>
                        
                        </div>

                    </div>
                    
                    <div class="row">

                        <div class="dd">
                            <label form="message" >Message</label>
                        </div>
                        <div class="cc">
                            <textarea id="message" name="message" placeholder="Écris quelque chose.." style="height:200px"></textarea>
                        </div>

                    </div>

                    <div id="envoie" class="row">
                        <input type="submit" name="submit" value="Envoyer">
                    </div>
                    
                </form>

            </div>
        </div>
    </div>

</body>
</html>