<?php

$title = 'Login';

ob_start();
?>
    <div class="text-align-center mt-5">
<br>
    <h2>Login</h2>
    <br><br><br><br>
    <div class="text-align-left">
        <form class="row g-3" method="post" action="index.php?action=login">
            <div class="mb-3 row">
                <label for="inputUserEmailAddress" class="col-sm-2 col-form-label">Email address :</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="inputUserEmailAddress" placeholder="Email address">
                </div>
            </div>
            <br><br><br>
            <div class="mb-3 row">
                <label for="inputUserPsw" class="col-sm-2 col-form-label">Password :</label>
                <div class="col-sm-10">
                    <input class="form-control" type="password" name="inputUserPsw"
                           placeholder="Password">
                </div>
            </div>
            <br><br><br><br><br><br>
            <div class="mb-3 row col-sm-10 text-align-right">
                <input type="submit" value="Login">
            </div>
        </form>

    </div>
    <span>
        <br>Pas de compte ? <a href="index.php?action=register">Inscrivez-vous</a>
    </span>
    </div>
<?php
$content = ob_get_clean();
require 'gabarit.php';
?>