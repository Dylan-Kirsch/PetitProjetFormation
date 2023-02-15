<?php
session_start();
require_once './assets/models/model.php';
// require_once'./assets/models/model.php';
include_once('./assets/pages/nav.php');



$pdo = pdo_connect();
$request = $pdo ->prepare('SELECT `id`, `categorie`, `model`, `marque`, `nom`, `prix`, `img`, `plateforme`, `pertinence`, `filtre`  FROM artciles');
$request ->execute();
$boutiques = $request->fetchALL(PDO::FETCH_ASSOC);

?>


<?php
foreach($boutiques as $boutique) {
}
?>

<?//=$boutique['model']?>
<?//=$boutique['prix']?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="assets\css\accueil.css"/>

    <!-- js -->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" >
    <link rel="stylesheet" href="assets\js\accueil.js"/>

    <title>Accueil</title>
</head>

<body>

    <img src="assets\images\carousel-img\God-of-War-Ragn.jpg.png" alt="God of war" >



<!-- CARD BOUTIQUE NOUVEAUTE -->

    <div id="bn">

        <div class="container new" >
            <h2>Nouveaux produits dans nos boutiques</h2>
            <button class="dropbtn" ><a href="assets\pages\boutiques.php">VOIR TOUT</a></button>
        </div>

        <div class="card">

            <div class="container ">

                <img src="assets\images\beyond-good-and-evil.jpg" alt="image">
                <div id="title">Beyond Good and Evil PS2</div>
                <div id="prix">5 &#8364</div>
                <button class="dropbtn" >AJOUTER AU PANIER</button>

            </div>

        </div>

        <div class="card">

            <div class="container">

                <img src="assets\images\cluedo-harry.jpg.png" alt="image">
                <div id="title">Cluedo Harry</div>
                <div id="prix">15 &#8364</div>
                <button class="dropbtn" >AJOUTER AU PANIER</button>

            </div>

        </div>

        <div class="card">

            <div class="container">

                <img src="assets\images\bayblade.jpg.png" alt="image">
                <div id="title">Bayblade</div>
                <div id="prix">7 &#8364</div>
                <button class="dropbtn" >AJOUTER AU PANIER</button>

            </div>

        </div>

        <div class="card">

            <div class="container">

                <img src="assets\images\figurine-pop.jfif.png" alt="image">
                <div id="title">Figurine POP</div>
                <div id="prix">20 &#8364</div>
                <button class="dropbtn" >AJOUTER AU PANIER</button>

            </div>

        </div>

        <div class="card">

            <div class="container">

                <img src="assets\images\wii-blanche.jpg.png" alt="image">
                <div id="title">Wii Blanche</div>
                <div id="prix">90 &#8364</div>
                <button class="dropbtn" >AJOUTER AU PANIER</button>

            </div>

        </div>

        <i class="fa fa-caret-right" style="font-size:36px"></i>

    </div>

<!-- CARD BOUTIQUE MANGAS/LIVRE -->

    <div id="bnl">

        <div class="container new new2" >
            <h2>Mangas/livres/BD</h2>
            <button class="dropbtn" ><a href="assets\pages\mangas-livre-bd.php">VOIR TOUT</a></button>
        </div>

        <div class="card">

            <div class="container ">

                <img src="assets\images\mangas-fairytail.jpg" alt="image">
                <div id="title">Fairy Tail - Tome 41</div>
                <div id="prix">13 &#8364</div>
                <button class="dropbtn" >AJOUTER AU PANIER</button>

            </div>

        </div>

        <div class="card">

            <div class="container">

                <img src="assets\images\coffret-one-piece-alabasta.jpg.png" alt="image">
                <div id="title">Coffret One Piece Alabasta</div>
                <div id="prix">75 &#8364</div>
                <button class="dropbtn" >AJOUTER AU PANIER</button>

            </div>

        </div>

        <div class="card">

            <div class="container">

                <img src="assets\images\coffret-one-piece.jpg.png" alt="image">
                <div id="title">Coffret One Piece East Blue</div>
                <div id="prix">80 &#8364</div>
                <button class="dropbtn" >AJOUTER AU PANIER</button>

            </div>

        </div>

        <div class="card">

            <div class="container">

                <img src="assets\images\promised-neverland.jpg" alt="image">
                <div id="title">The Promised Neverland - Tome 19</div>
                <div id="prix">15 &#8364</div>
                <button class="dropbtn" >AJOUTER AU PANIER</button>

            </div>

        </div>

        <div class="card">

            <div class="container">

                <img src="assets\images\spy-family.jpg" alt="image">
                <div id="title">Spy & family - Tome 6</div>
                <div id="prix">15 &#8364</div>
                <button class="dropbtn" >AJOUTER AU PANIER</button>

            </div>

        </div>

        <i class="fa fa-caret-right" style="font-size:36px"></i>

    </div>

    <?php include_once('./assets/pages/footer.php');?>


</body>
</html>











