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
    $offerImg2 = $_FILES['createOfferImage2'];
    $offerImg3 = $_FILES['createOfferImage3'];


    $offerID = 0;
    foreach ($offers as $offer) {
        $offerID += 1;
    }

    $offers[] = array('colocationID' => $offerID, 'userEmailAddress' => $_SESSION['userEmailAddress'], "colocationAddress" => $offerRequest['createOfferAddress'],
        "colocationTitle" => $offerRequest['createOfferTitle'], "colocationDescription" => $offerRequest['createOfferDescription'],
        "colocationDate" => $offerRequest['createOfferDate'], "colocationImg" => $offerImg['name'], "colocationImg2" => $offerImg2['name'], "colocationImg3" => $offerImg3['name']);

    //réécrire le fichier des offers
    updateOffers($offers);
    return true;
}

function modifyOfferJSON($offerModifyRequest)
{
    $offerImg = $_FILES['modifyOfferImage'];
    $offerImg2 = $_FILES['modifyOfferImage2'];
    $offerImg3 = $_FILES['modifyOfferImage3'];

    $data = file_get_contents("data/offers.json");
    $data = json_decode($data, true);
    $arr_index = array();

    foreach ($data as $key => $value) {
        if ($value['colocationID'] == $_GET['modifyOfferID']) {
            $arr_index[] = $key;
        }
    }

    foreach ($arr_index as $i) {
        $data[$i]['colocationAddress'] = $offerModifyRequest['modifyOfferAddress'];
        $data[$i]['colocationTitle'] = $offerModifyRequest['modifyOfferTitle'];
        $data[$i]['colocationDescription'] = $offerModifyRequest['modifyOfferDescription'];
        $data[$i]['colocationDate'] = $offerModifyRequest['modifyOfferDate'];
        $data[$i]['colocationImg'] = $offerImg['name'];
        $data[$i]['colocationImg2'] = $offerImg2['name'];
        $data[$i]['colocationImg3'] = $offerImg3['name'];
    }

    $data = array_values($data);

    $data = json_encode($data, JSON_PRETTY_PRINT);

    file_put_contents("data/offers.json", $data);
}