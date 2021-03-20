<?php
$title = "Modify an offer";
ob_start();
?>


    <div class="text-align-center mt-5">
        <br>
        <h2>Modify an offer</h2>
        <br><br><br><br>
        <div class="text-align-left">
            <form class="row g-3" method="post" action="index.php?action=modifyOffer">
                <div class="mb-3 row">
                    <label for="modifyOfferChoice" class="col-sm-2 col-form-label">Choose an offer to modify :</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="modifyOfferChoice" required>
                            <option value="logoColoquit">ColoquitLogo</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="modifyOfferAddress" class="col-sm-2 col-form-label">Address :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="modifyOfferAddress"
                               placeholder="Address of the colocation offer" required>
                    </div>
                </div>
                <br><br><br>
                <div class="mb-3 row">
                    <label for="modifyOfferDescription" class="col-sm-2 col-form-label">Description :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="modifyOfferDescription"
                               placeholder="Description of the colocation offer" required>
                    </div>
                </div>
                <br><br><br>
                <div class="mb-3 row">
                    <label for="modifyOfferDate" class="col-sm-2 col-form-label">Date :</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="modifyOfferDate"
                               placeholder="First date of disponibility" required>
                        <span>First date of disponibilty</span>
                    </div>
                </div>
                <br><br><br>
                <div class="mb-3 row">
                    <label for="modifyOfferImage" class="col-sm-2 col-form-label">Image(s) :</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="modifyOfferImage" accept="image/*" required>
                    </div>
                    <label for="modifyOfferImage2" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="modifyOfferImage2" accept="image/*">
                    </div>
                    <label for="modifyOfferImage3" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="modifyOfferImage3" accept="image/*">
                    </div>
                </div>
                <br><br><br><br>
                <div class="mb-3 row col-sm-10 text-align-right">
                    <input type="submit" value="Modify the offer">
                    <input type="button" value="Delete the offer">
                </div>
            </form>
        </div>
    </div>


<?php
$content = ob_get_clean();
require "gabarit.php";