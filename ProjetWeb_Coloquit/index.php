<?php

session_start();
require "controler/controler.php";

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home' :
            home();
            break;
        case 'register' :
            register($_POST);
            break;
        case 'login' :
            login($_POST);
            break;
        case 'logout' :
            logout();
            break;
        case 'userMenu' :
            userMenu();
            break;
        case 'displayOffer' :
            displayOffer();
            break;
        case 'contact' :
            contact();
            break;
        case 'createOffer' :
            createOffer($_POST);
            break;
        case 'modifyOffer' :
            modifyOffer($_POST);
            break;
        case 'deleteOffer' :
            deleteOffer();
            break;
        default :
            home();
    }
} else {
    home();
}

?>