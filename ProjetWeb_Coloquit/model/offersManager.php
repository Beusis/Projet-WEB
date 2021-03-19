<?php

function getOffers()
{
    //Cette fonction renvoie un tableau avec les offres
    $tab = json_decode(file_get_contents("data/offers.json"), true); // by default, return everything as an associative array
    return $tab; //renvoi du tableau
}

function updateOffers($offers)
{

    //Cette fonction réécrit tout le fichier offers.json à partir du tableau associatif
    file_put_contents("data/offers.json", json_encode($offers));

}

function createOfferJSON($offerRequest)
{
    //lire le fichier des offres

    $result = false;
    $offers = getOffers();

    //Ajouter la ligne de l'email(on pourrait vérifier s'il existe)
    $offers[] = array('userEmailAddress' => $_SESSION['userEmailAddress'], "colocationAddress" => $offerRequest['createOfferAddress'],
        "colocationTitle" => $offerRequest['createOfferTitle'], "colocationDescription" => $offerRequest['createOfferDescription'],
        "colocationDate" => $offerRequest['createOfferDate']);

    //réécrire le fichier des offers
    updateOffers($offers);
    return true;
}