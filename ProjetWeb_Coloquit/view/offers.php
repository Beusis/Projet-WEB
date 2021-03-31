<?php
$title = "Offre";
ob_start();
?>

    <div class="text-align-center">
<?php
foreach ($offers as $offer) :
    if ($offer['colocationID'] == $_GET['offerID']) :
        $offer['colocationTitle'] = htmlentities($offer['colocationTitle']);
        $offer['colocationDescription'] = htmlentities($offer['colocationDescription']);
        $offer['colocationAddress'] = htmlentities($offer['colocationAddress']);
        ?>
        <br>
        <h4><?= $offer['colocationTitle'] ?></h4>

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

            <?php if ((isset($offer['colocationImg2'])) && (isset($offer['colocationImg3']))) : ?>
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                </div>
            <?php endif; ?>

            <div class="carousel-inner border-2 mt-3 offersImg">
                <div class="carousel-item active">
                    <img src="view/content/img/<?= $offer['colocationImg'] ?>" class="d-block h-100 w-100">
                </div>
                <?php if ($offer['colocationImg2'] != "") : ?>
                    <div class="carousel-item">
                        <img src="view/content/img/<?= $offer['colocationImg2'] ?>" class="d-block w-100">
                    </div>
                <?php endif;
                if ($offer['colocationImg3'] != "") : ?>
                    <div class="carousel-item">
                        <img src="view/content/img/<?= $offer['colocationImg3'] ?>" class="d-block w-100">
                    </div>
                <?php endif; ?>
            </div>
            <?php if (($offer['colocationImg2'] != "") && ($offer['colocationImg3'] != "")) : ?>
                <button class="carousel-control-prev btn-dark" type="button"
                        data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next btn-dark" type="button"
                        data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            <?php endif; ?>

        </div>


        <div class="mt-5">
            <p id="offerText"><?= $offer['colocationDescription'] ?></p>
        </div>
        <div class="mt-5">
            <p id="offerText"><?= $offer['colocationAddress'] ?></p>
        </div>


        <?php if (isset($_SESSION['userEmailAddress'])) : ?>
        <a href="index.php?action=contact&userEmailAddressOfTheOffer=<?= $offer['userEmailAddress'] ?>">
            <button class="btn btn-secondary">Contact the member</button>
        </a>
    <?php else: ?>
        <div class="alert alert-primary mt-5" role="alert">
            Connectez-vous afin de pouvoir prendre contact avec ce membre
        </div>
    <?php endif; ?>
        </div>
    <?php
    endif;
endforeach;
?>


<?php
$content = ob_get_clean();
require "gabarit.php";