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
        array("3636", "2152", "1560", "3171", "1456", "1683", "0678", "0789", "1331", "1495", "6005")
    );
    ?>
    <?php include __INCLUDE__.'/footer.php' ?>

</div>

<?php include __INCLUDE__.'/js.php' ?>
</body>
</html>
