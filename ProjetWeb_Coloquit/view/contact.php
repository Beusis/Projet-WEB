
<?php

$title = 'Contact';

ob_start();
?>
    <div class="text-align-center mt-5">
        <br>
        <h2>Contact</h2>
        <br><br><br><br>
        <div class="text-align-left">
            <form class="row g-3" method="post" action="index.php?action=register">
                <div class="mb-3 row">
                    <label for="inputUserFirstname" class="col-sm-2 col-form-label">Name :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="inputUserFirstname" placeholder="Name" required>
                    </div>
                </div>
                <br><br><br>
                <div class="mb-3 row">
                    <label for="inputUserLastname" class="col-sm-2 col-form-label">Email :</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="inputUserLastname"
                               placeholder="Email address" required>
                    </div>
                </div>
                <br><br><br>
                <div class="mb-3 row">
                    <label for="inputUserEmailAddress" class="col-sm-2 col-form-label">Subject :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="inputUserEmailAddress"
                               placeholder="Subject of the message">
                    </div>
                </div>
                <br><br><br>
                <div class="mb-3 row">
                    <label for="inputUserPsw" class="col-sm-2 col-form-label">Message :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="inputUserPsw"
                               placeholder="Message" required>
                    </div>
                </div>
                </div>
                <br><br><br><br><br><br>
                <div class="mb-3 row col-sm-10 text-align-right">
                    <input type="submit" value="Contact">
                </div>
            </form>
    </div>



<?php
$content = ob_get_clean();
require 'gabarit.php';
?>