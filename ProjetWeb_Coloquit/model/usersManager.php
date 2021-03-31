<?php

function getUsers()
{
    //Cette fonction renvoie un tableau avec les users
    $tab = json_decode(file_get_contents("data/users.json"), true); // by default, return everything as an associative array
    return $tab; //renvoi du tableau
}

function updateUsers($users)
{

    //Cette fonction réécrit tout le fichier users.json à partir du tableau associatif
    file_put_contents("data/users.json", json_encode($users));

}

function isLoginCorrect($userEmailAddress, $userPsw)
{
    $result = false;
    //lire tous les users
    $users = getUsers();

    foreach ($users as $user) {
        if ($user["userEmailAddress"] == $userEmailAddress) {
            $result = password_verify($userPsw, $user["userHashPsw"]);
        }
    }

    return $result;
}

function registerNewAccount($userEmailAddress, $userPsw, $userFirstName, $userLastName, $userPhoneNumber)
{
    //lire le fichier des users

    $result = false;
    $users = getUsers();
    $userHashPsw = password_hash($userPsw, PASSWORD_DEFAULT);

    $users[] = array('userEmailAddress' => $userEmailAddress, "userHashPsw" => $userHashPsw, "userFirstName" => $userFirstName, "userLastName" => $userLastName, "userPhoneNumber" => $userPhoneNumber);

    //réécrire le fichier des users
    file_put_contents("data/users.json", json_encode($users));

    return true;
}