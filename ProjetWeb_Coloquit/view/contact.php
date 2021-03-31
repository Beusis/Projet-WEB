<?php
$title = 'Contact';
ob_start();
?>
<div class="text-align-center mt-5">
    <br>
    <h2>Contact</h2>
    <br><br><br><br>
    <div class="text-align-center">
        <?php
        require_once "model/usersManager.php";
        $users = getUsers();
        foreach ($users

                 as $user) :
            if ($user['userEmailAddress'] == $_GET['userEmailAddressOfTheOffer']) : ?>

                <p class="offerText">Email address : <?= $user['userEmailAddress'] ?></p>
                <p class="offerText">Phone number : <?= $user['userPhoneNumber'] ?></p>

            <?php endif;
        endforeach; ?>
    </div>
</div>
<?php
$content = ob_get_clean();
require 'gabarit.php';
?>

