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
    $offerImg = $_FILES['createOfferImage'];

    $offerID = 0;
    foreach ($offers as $offer) {
        $offerID += 1;
    }

    $offers[] = array('colocationID' => $offerID, 'userEmailAddress' => $_SESSION['userEmailAddress'], "colocationAddress" => $offerRequest['createOfferAddress'],
        "colocationTitle" => $offerRequest['createOfferTitle'], "colocationDescription" => $offerRequest['createOfferDescription'],
        "colocationDate" => $offerRequest['createOfferDate'], "colocationImg" => $offerImg['name']);

    //réécrire le fichier des offers
    updateOffers($offers);
    return true;
}

function modifyOfferJSON($offerModifyRequest) {
    $result = false;
    $offers = getOffers();
    $offerImg = $_FILES['modifyOfferImage'];
    foreach ($offers as $offer) {
        if ($offer['colocationID'] == $_GET['modifyOfferID']) {
            $offerss[] = array('colocationID' => $_GET['modifyOfferID'], 'userEmailAddress' => $_SESSION['userEmailAddress'], "colocationAddress" => $offerModifyRequest['modifyOfferAddress'],
                "colocationTitle" => $offerModifyRequest['modifyOfferTitle'], "colocationDescription" => $offerModifyRequest['modifyOfferDescription'],
                "colocationDate" => $offerModifyRequest['modifyOfferDate'], "colocationImg" => $offerImg['name']);
        }
    }
    foreach ($offers as $offer => $value) {
        if (in_array($_GET['modifyOfferID'], $value)) {
            unset($offers[$offer]);
        }
    }
    updateOffers($offerss);


    return true;
}