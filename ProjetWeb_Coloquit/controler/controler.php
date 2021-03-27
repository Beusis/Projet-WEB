<?php

function home()
{
    require_once "model/offersManager.php";
    $offers = getOffers();
    $_GET['action'] = "home";
    require "view/home.php";
}

function register($registerRequest)
{
    if (isset($registerRequest['inputUserEmailAddress']) && isset($registerRequest['inputUserPsw']) && isset($registerRequest['inputUserPswConfirm'])) {

        //extract register parameters
        $userEmailAddress = $registerRequest['inputUserEmailAddress'];
        $userPsw = $registerRequest['inputUserPsw'];
        $userPswConfirm = $registerRequest['inputUserPswConfirm'];

        if ($userPsw == $userPswConfirm) {
            require_once "model/usersManager.php";
            if (registerNewAccount($userEmailAddress, $userPsw) == true) {
                createSession($userEmailAddress);
                $registerErrorMessage = null;
                home();
            } else {
                $registerErrorMessage = "L'inscription n'est pas possible avec les valeurs saisies !";
                $_GET['action'] = "register";
                require "view/register.php";
            }
        } else {
            $registerErrorMessage = "Les mots de passe ne sont pas similaires !";
            $_GET['action'] = "register";
            require "view/register.php";
        }
    } else {
        $registerErrorMessage = null;
        $_GET['action'] = "register";
        require "view/register.php";
    }
}

function createSession($userEmailAddress)
{
    $_SESSION['userEmailAddress'] = $userEmailAddress;
}

function login($loginRequest)
{
    //if a login request was submitted
    if (isset($loginRequest['inputUserEmailAddress']) && isset($loginRequest['inputUserPsw'])) {
        //extract login parameters
        $userEmailAddress = $loginRequest['inputUserEmailAddress'];
        $userPsw = $loginRequest['inputUserPsw'];
        //try to check if user/psw are matching with the database
        require_once "model/usersManager.php";
        if (isLoginCorrect($userEmailAddress, $userPsw)) {
            $loginErrorMessage = null;
            createSession($userEmailAddress);
            home();
        } else { //if the user/psw does not match, login form appears again
            $loginErrorMessage = "L'adresse email et/ou le mot de passe ne correspondent pas !";
            $_GET['action'] = "login";
            require "view/login.php";
        }
    } else { //the user does not yet fill the form
        $_GET['action'] = "login";
        require "view/login.php";
    }
}

function logout()
{
    $_SESSION = array();
    session_destroy();
    home();
}

function userMenu()
{
    $_GET['action'] = "userMenu";
    require "view/user_menu.php";
}

function displayOffer()
{
    require_once "model/offersManager.php";
    $offers = getOffers();
    $_GET['action'] = "displayOffer";
    require "view/offers.php";
}

function displayContact()
{
    $_GET['action'] = "contact";
    require "view/contact.php";
}

function createOffer($offerRequest)
{
    if (!isset($offerRequest['createOfferAddress'])) {
        $_GET['action'] = "createOffer";
        require "view/create_offer.php";
    } else {
        fileUpload('createOfferImage');
        fileUpload('createOfferImage2');
        fileUpload('createOfferImage3');
        require_once "model/offersManager.php";
        $result = createOfferJSON($offerRequest);
        home();
        echo "<div class='alert alert-primary position-absolute top-0 start-50 translate-middle mt-5' role='alert'>
            Votre offre a été créée !
        </div>";
    }
}

function modifyOffer($offerModifyRequest)
{
    if (!isset($_GET['modifyOfferID'])) {
        require_once "model/offersManager.php";
        $offers = getOffers();
        require "view/modifyOffer_menu.php";
    } else if (!isset($_POST['modifyOfferAddress'])) {
        require_once "model/offersManager.php";
        $offers = getOffers();
        require "view/modify_offer.php";
    } else {
        fileUpload('modifyOfferImage');
        require_once "model/offersManager.php";
        $result = modifyOfferJSON($offerModifyRequest);
        home();
        echo "<div class='alert alert-primary position-absolute top-0 start-50 translate-middle mt-5' role='alert'>
            Votre offre a été modifiée !
        </div>";
    }
}

function fileUpload($formImage)
{
    $file_name = $_FILES[$formImage]['name'];
    $file_tmp = $_FILES[$formImage]['tmp_name'];
    $extension = pathinfo($_FILES[$formImage]["name"], PATHINFO_EXTENSION);
    if ($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png' || $extension == 'gif' | $extension == 'JPG' || $extension == 'JPEG' || $extension == 'PNG' || $extension == 'GIF') {
        move_uploaded_file($file_tmp, "view/content/img/" . $file_name);
    }
}