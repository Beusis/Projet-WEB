<?php
$title = "Accueil";
ob_start();
?>
    <div id="offresMenu">
        <div class="row row-cols-1 row-cols-md-3 g-4 m-5">
            <div class="col">
                <a href="index.php?action=displayOffer">
                    <button class="border-0 p-0">
                        <div class="card h-100">
                            <img src="view/content/img/colocLogo.png" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in
                                    to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </button>
                </a>
            </div>
            <div class="col">
                <a href="index.php?action=displayOffer">
                    <button class="border-0 p-0">
                        <div class="card h-100">
                            <img src="view/content/img/Landscape-Color.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a short card.</p>
                            </div>
                        </div>
                    </button>
                </a>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="index.php?action=displayOffer">
                        <button class="border-0 p-0">
                            <img src="view/content/img/colocLogo.png" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to
                                    additional content.</p>
                            </div>
                        </button>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="view/content/img/Landscape-Color.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
$content = ob_get_clean();
require "gabarit.php";