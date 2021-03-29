<?php
$title = "Accueil";
ob_start();
?>
    <div id="offresMenu">
        <div class="row row-cols-1 row-cols-md-3 g-4 m-5">

            <?php foreach ($offers as $offer) :?>
                <div class="col">
                <div class="card h-100">
                    <img src="view/content/img/<?=$offer['colocationImg']?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?=$offer['colocationTitle'] ?></h5>
                        <p class="card-text"><?=$offer['colocationDescription'] ?></p>
                        <a href="index.php?action=displayOffer&offerID=<?=$offer['colocationID'] ?>">
                            <button class="btn btn-secondary">Voir en détail</button>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>


<?php
$content = ob_get_clean();
require "gabarit.php";