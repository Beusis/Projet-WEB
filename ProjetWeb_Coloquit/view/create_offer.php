<?php
$title = "Create an offer";
ob_start();
?>


    <div class="text-align-center mt-5">
        <br>
        <h2>Create an offer</h2>
        <br><br><br><br>
        <div class="text-align-left">
            <form class="row g-3" method="post" action="index.php?action=createOffer">
                <div class="mb-3 row">
                    <label for="createOfferAddress" class="col-sm-2 col-form-label">Address :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="createOfferAddress"
                               placeholder="Address of the colocation offer" required>
                    </div>
                </div>
                <br><br><br>
                <div class="mb-3 row">
                    <label for="createOfferDescription" class="col-sm-2 col-form-label">Description :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="createOfferDescription"
                               placeholder="Description of the colocation offer" required>
                    </div>
                </div>
                <br><br><br>
                <div class="mb-3 row">
                    <label for="createOfferDate" class="col-sm-2 col-form-label">Date :</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="createOfferDate"
                               placeholder="First date of disponibility" required>
                        <span>First date of disponibilty</span>
                    </div>
                </div>
                <br><br><br>
                <div class="mb-3 row">
                    <label for="createOfferImage" class="col-sm-2 col-form-label">Image(s) :</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="createOfferImage" accept="image/*" required>
                    </div>
                    <label for="createOfferImage2" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="createOfferImage2" accept="image/*">
                    </div>
                    <label for="createOfferImage3" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="createOfferImage3" accept="image/*">
                    </div>
                </div>
                <br><br><br><br>
                <div class="mb-3 row col-sm-10 text-align-right">
                    <input type="submit" value="Post the offer">
                </div>
            </form>
        </div>
    </div>


<?php
$content = ob_get_clean();
require "gabarit.php";