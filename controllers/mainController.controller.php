<?php
//Controller peut être fait en POO mais ce n'est pas une obligation
// ici, nous sommes en procédural


require_once("./controllers/functionController.controller.php");
require_once("./models/mainManager.model.php");


function pageAccueil()
{
    // avec extract de genererPage
    //la variable $variable_de_demo aura la valeur "demo de variable"
    // génial non
    $data_page = [
        "page_description" => "Description accueil",
        "page_title" => "titre accueil",
        "view"=>"views/pages/public/accueil.view.php",
        // on met un template variable au cas où une page en necessiterait un différent
        "template"=>"views/commons/template.php",
        "variable_de_demo" => "demo de variable",

    ];
    genererPage($data_page);
}
function pageErreur($msg)
{

    $data_page = [
        "page_description" => "Erreur !",
        "page_title" => "Erreur !",
        "view"=>"views/pages/public/erreur.view.php",
        "template"=>"views/commons/template.php",
        "msg"=>$msg,

    ];

    genererPage($data_page);


    $page_description = "page d'erreur";
    $page_title = "page d'erreur";
    ob_start();
    require_once("views/pages/public/erreur.view.php");
    $page_content = ob_get_clean();

    require_once("views/commons/template.php");
}
function page1()
{
    //on récupère les datas de mainManager, function getDataX()
    $datas = getDataX();

    $data_page = [
        "page_description" => "Description Page 1",
        "page_title" => "titre page 1",
        "view"=>"views/pages/public/page1.view.php",
        "template"=>"views/commons/template.php",
        "datas"=>$datas,

    ];
    genererPage($data_page);
}
function page2()
{
    $datas = getDatas();
    $data_page = [
        "page_description" => "Description Page 2",
        "page_title" => "titre page 2",
        "view"=>"views/pages/public/page2.view.php",
        "template"=>"views/commons/template.php",
        "datas"=>$datas,


    ];
    genererPage($data_page);
}
function page3()
{
    $data_page = [
        "page_description" => "Description Page 3",
        "page_title" => "titre page 3",
        "view"=>"views/pages/public/page3.view.php",
        "template"=>"views/commons/template.php"

    ];
    genererPage($data_page);
}
