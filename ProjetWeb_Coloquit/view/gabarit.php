<?php
/**
 * @file      gabarit.php
 * @brief     This view is designed to centralize all common graphical component like header and footer (will be call by all views)
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY & Pascal BENZONANA
 * @version   03-MAY-2020
 */

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title><?= $title; ?></title>
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="view/content/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/content/css/stylesheet.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="index.php?action=home">
        <img src="../view/content/img/colocLogo.png" width="110">
        <a/>
        <ul class="navbar-nav text-align-right-navbar btn-toolbar">
            <?php if (!isset($_SESSION['userEmailAddress'])) : ?>
                <li class="nav-item px-2">
                    <a href="index.php?action=login">
                        <button type="button" class="btn btn-secondary">Login</button>
                    </a>
                </li>

                <li class="nav-item px-2">
                    <a href="index.php?action=register">
                        <button type="button" class="btn btn-secondary">Register</button>
                    </a>
                </li>
            <?php else : ?>
                <li class="nav-item px-2">
                    <a href="index.php?action=logout">
                        <button type="button" class="btn btn-secondary">Logout</button>
                    </a>
                </li>
                <li class="nav-item px-2">
                    <a href="index.php?action=userMenu">
                        <button type="button" class="btn btn-secondary"><?= $_SESSION['userEmailAddress'] ?></button>
                    </a>
                </li>
            <?php endif; ?>

        </ul>
</div>

    <?= $content; ?>


</body>
</html>