<?php

if(isset($_GET['page'])){
    switch ($_GET['page']){
        case 'accueil':
            include_once 'views/pages/accueil.php';
            break;

        // Plantes

        case 'nos-recettes':
            include_once 'controllers/nosrecettesController.php';
            break;

        case 'guide-plantes':
            include_once 'controllers/guidedesplantesController.php';
            break;

        case 'contact':
            include_once 'controllers/contactController.php';
            break;

        case 'inscription':
            include_once 'controllers/inscriptionController.php';
            break;

        case 'accueil':
            include_once 'controllers/acceuilController.php';
            break;
    }
}
else {
    include_once 'views/pages/accueil.php';
}