<?php
// les modelsManager permettent la récupéretion, le traitement des données
// ils gèrent aussi la partie logique du site.

// fonction qui simule recup de datas.
require_once("./models/pdo.model.php");


function getDataX(){
    $data=[
        "data1"=>"Données de la data1",
        "data2"=>"Données de la data2",
        "data3"=>"Données de la data3",
    ];
    return $data;

}

function getDatas(){
    $req = getBDD()->prepare("SELECT * from bd_mvc");
    $req -> execute();
    $datas = $req ->fetchAll(PDO::FETCH_ASSOC);
    $req -> closeCursor();
    return $datas;


}



