<?php


function setBDD(){
    try {
        //connection à notre BDD
        $pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");
        //Gestion des erreurs
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        
    } catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
    return $pdo;
}

function getBDD(){
    $pdo=setBDD();
    if($pdo === null){
        setBDD();
    }
    return $pdo;
}

