<?php

$title = 'Register';

ob_start();
?>
    <div class="text-align-center mt-5">
    <br>
    <h2>Register</h2>
    <br><br><br><br>
    <div class="text-align-left">
        <form class="row g-3" method="post" action="index.php?action=register">
            <div class="mb-3 row">
                <label for="inputUserFirstname" class="col-sm-2 col-form-label">Firstname :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="inputUserFirstname" placeholder="Firstname">
                </div>
            </div>
            <br><br><br>
            <div class="mb-3 row">
                <label for="inputUserLastname" class="col-sm-2 col-form-label">Lastname :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="inputUserLastname"
                           placeholder="Lastname">
                </div>
            </div>
            <br><br><br>
            <div class="mb-3 row">
                <label for="inputUserEmailAddress" class="col-sm-2 col-form-label">Email address :</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="inputUserEmailAddress"
                           placeholder="Email address">
                </div>
            </div>
            <br><br><br>
            <div class="mb-3 row">
                <label for="inputUserPsw" class="col-sm-2 col-form-label">Password :</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="inputUserPsw"
                           placeholder="Password">
                </div>
            </div>
            <br><br><br>
            <div class="mb-3 row">
                <label for="inputUserPswConfirm" class="col-sm-2 col-form-label">Confirm password :</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="inputUserPswConfirm"
                           placeholder="Confirm password">
                </div>
            </div>
            <br><br><br>
            <div class="mb-3 row">
                <label for="inputUserPhoneNumber" class="col-sm-2 col-form-label">Phone number :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="inputUserPhoneNumber"
                           placeholder="Phone number">
                </div>
            </div>
            <br><br><br><br><br><br>
            <div class="mb-3 row col-sm-10 text-align-right">
                <input type="submit" value="Register">
            </div>
        </form>

    </div>
    <span>
        <br>Déja un compte ? <a href="index.php?action=login">Identifiez-vous</a>
    </span>
    </div>

<?php
$content = ob_get_clean();
require 'gabarit.php';
?>