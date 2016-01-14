<?php
define('__INCLUDE__', "../include");
require_once(__INCLUDE__."/common.php");

$page = 'portfolio';
$page_name = ' - Семья';
?>

<!DOCTYPE html>
<html lang="ru">

<?php include __INCLUDE__.'/head.php' ?>

<body>

<?php include __INCLUDE__.'/navbar.php' ?>

<div class="container marketing">
    <?php
    createPortfolioPhotoElements(
        array("fam-1", "fam-2", "fam-3", "fam-4", "fam-5", "fam-6", "fam-7", "8623", "6331", "5749", "3431", "5637",
            "5657", "5686", "3636", "2152", "1560", "3171", "1456", "1683", "0678", "0789", "1331", "1495", "6005")
    );
    ?>
    <?php include __INCLUDE__.'/footer.php' ?>

</div>

<?php include __INCLUDE__.'/js.php' ?>
</body>
</html>
