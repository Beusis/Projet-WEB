<?php

$title = 'Contact';

ob_start();
?>
    <div class="text-align-center mt-5">
        <br>
        <h2>Contact</h2>
        <br><br><br><br>
        <div class="text-align-center">
            <form class="row g-3" method="post" action="index.php?action=contact">
                <div class="mb-3 row">
                    <label for="inputUserName" class="col-sm-2 col-form-label">Name :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="inputUserName" placeholder="Name" required>
                    </div>
                </div>
                <br><br><br>
                <div class="mb-3 row">
                    <label for="inputUserEmailAddress" class="col-sm-2 col-form-label">Email :</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="inputUserEmailAddress"
                               placeholder="Email address" required>
                    </div>
                </div>
                <br><br><br>
                <div class="mb-3 row">
                    <label for="inputUserSubject" class="col-sm-2 col-form-label">Subject :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="inputUserSubject"
                               placeholder="Subject of the message" required>
                    </div>
                </div>
                <br><br><br>
                <div class="mb-3 row">
                    <label for="inputUserMessage" class="col-sm-2 col-form-label">Message :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="inputUserMessage"
                               placeholder="Message" required>
                    </div>
                </div>
                <br><br><br>
                <div class="mb-3 row col-sm-10 text-align-center">
                    <input id="inputContact" type="submit" value="Contact">
                </div>
            </form>
        </div>
    </div>
<?php
$content = ob_get_clean();
require 'gabarit.php';
?>

