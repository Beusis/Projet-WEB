<?php
$title = "Accueil";
ob_start();
?>

<div class="text-align-center">
    <table id="userMenu" class="position-absolute top-50">
        <tbody>
            <tr>
                <td class="align-middle">
                    <a href="index.php?action=createOffer" class="text-align-left">
                        <button class="btn btn-secondary">Create offer</button></a>
                </td>
                <td class="align-middle">
                    <a href="index.php?action=modifyOffer" class="text-align-right">
                        <button class="btn btn-secondary">Modify offer</button>
                    </a>
                </td>
            </tr>
        </tbody>
     </table>
</div>

<?php
$content = ob_get_clean();
require "gabarit.php";