<?php
//Controller peut être fait en POO mais ce n'est pas une obligation
// ici, nous sommes en procédural



    function pageAccueil()
    {
        $page_description = "Description accueil";
        $page_title = "titre accueil";
        $page_content = "contenu de l'accueil par controller";

        require_once("views/commons/template.php");
    }
    function pageErreur($msg)
    {
        $page_description = "page d'erreur";
        $page_title = "page d'erreur";
        $page_content = $msg;

        require_once("views/commons/template.php");
    }
    function page1()
    {        
        $page_description = "Description accueil";
        $page_title = "titre accueil";
        $page_content = "contenu de la page 1";

        require_once("views/commons/template.php");
    }
    function page2()
    {
        $page_description = "Description accueil";
        $page_title = "titre accueil";
        $page_content = "contenu de la page 2";

        require_once("views/commons/template.php");
    }
    function page3()
    {
        $page_description = "Description accueil";
        $page_title = "titre accueil";
        $page_content = "contenu de la page 3";

        require_once("views/commons/template.php");
    }