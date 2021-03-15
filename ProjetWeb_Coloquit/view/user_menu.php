<?php
$title = "Accueil";
ob_start();
?>

<div class="text-align-center">
    <span class="text-align-middle-center">
        <a href="index.php?action=createAnnonce" class="text-align-left">
            <button class="btn btn-secondary">Create offer</button>
       </a>
        <a href="index.php?action=modifyAnnonce" class="text-align-right">
            <button class="btn btn-secondary">Modify offer</button>
        </a>
     </span>
</div>

<?php
$content = ob_get_clean();
require "gabarit.php";