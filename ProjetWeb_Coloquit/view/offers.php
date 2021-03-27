<?php
$title = "Offre";
ob_start();
?>

    <div class="text-align-center">
        <?php
        foreach ($offers as $offer) :
            if ($offer['colocationID'] = $_GET['offerID']) :
                ?>
                <br>
                <h4>Ceci est une offre de colocation</h4>

                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                    </div>

                    <div class="carousel-inner border-2 mt-3 offersImg">
                        <div class="carousel-item active">
                            <img src="view/content/img/<?= $offer['colocationImage'] ?>" class="d-block w-100 h-100">
                        </div>
                        <div class="carousel-item">
                            <img src="view/content/img/<?= $offer['colocationImage2'] ?>" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="view/content/img/<?= $offer['colocationImage3'] ?>" class="d-block w-100">
                        </div>
                    </div>
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
                </div>


                <div class="mt-5">
                    <p id="offerText">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Fusce ac ipsum sit amet mauris finibus molestie.
                        Aliquam metus est, feugiat id fringilla eget, consectetur a est.</p>
                </div>

            <?php
            endif;
        endforeach;
        ?>
        <?php if (isset($_SESSION['userEmailAddress'])) : ?>
            <a href="index.php?action=contact">
                <button class="btn btn-secondary">Contact the member</button>
            </a>
        <?php else: ?>
            <div class="alert alert-primary mt-5" role="alert">
                Connectez-vous afin de pouvoir prendre contact avec ce membre
            </div>
        <?php endif; ?>
    </div>


<?php
$content = ob_get_clean();
require "gabarit.php";