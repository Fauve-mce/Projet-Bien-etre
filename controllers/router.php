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

        case 'connexion':
            include_once 'controllers/connexionController.php';
            break;

        case 'create-account':
            include_once 'controllers/createaccountController.php';
            break;

        case 'accueil':
            include_once 'controllers/acceuilController.php';
            break;

        case 'découvrirrecettes':
            include_once 'controllers/découvrirrecettesController.php';
            break;

        case 'découvrirplantes':
            include_once 'controllers/découvrirplantesController.php';
            break;

        case 'profile-user':
            include_once 'controllers/profileuserController.php';
            break;

        case 'about':
            include_once 'controllers/aboutController.php';
            break;
    }
}
else {
    include_once 'views/pages/accueil.php';
}