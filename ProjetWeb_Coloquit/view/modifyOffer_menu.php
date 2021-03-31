<?php
$title = "Accueil";
ob_start();
?>

    <div class="text-align-center mt-5">
        <h2>Choisissez une offre a modifier</h2>
        <?php foreach ($offers as $offer) :
            if ($_SESSION['userEmailAddress'] == $offer['userEmailAddress']) :
                $offer['colocationTitle'] = htmlentities($offer['colocationTitle']) ?>
                <br><br><br><a href="index.php?action=modifyOffer&modifyOfferID=<?=$offer['colocationID']?>"><button class="btn btn-secondary" value="<?=$offer['colocationID']?>">Modifier "<?=$offer['colocationTitle']?>"</button></a>
            <?php endif;
        endforeach;
        $modifyOfferChoice = 1;?>
    </div>


<?php
$content = ob_get_clean();
require "gabarit.php";