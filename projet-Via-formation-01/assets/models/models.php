<?php
//debut parametre obligatoire
function pdo_connect(){
    $DATABASE_HOST = 'localhost'; // Host DB
    $DATABASE_USER = 'root'; //User DB
    $DATABASE_PASS = ''; //MDP DB
    $DATABASE_NAME = 'via multimédia'; // Nom DB
// fin parametre obligatoire

    try{
        return new PDO('mysql:host='.$DATABASE_HOST. ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch(PDOException $exception) {
        exit('failed to connect bdd');
    }
}


/* en prod = (sur un serveur publique )
catch(PDOException $e ){
    exit("une erreur est survenue.");
}
*/