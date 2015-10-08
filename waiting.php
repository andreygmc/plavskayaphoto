<?php
define('__INCLUDE__', "../include");
require_once(__INCLUDE__."/common.php");

$page = 'portfolio';
$page_name = ' - Ожидание';
?>

<!DOCTYPE html>
<html lang="ru">

<?php include __INCLUDE__.'/head.php' ?>

<body>

<?php include __INCLUDE__.'/navbar.php' ?>

<div class="container marketing">
    <?php
    createPortfolioPhotoElements(
        array("1290", "0708", "1214")
    );
    ?>
    <?php include __INCLUDE__.'/footer.php' ?>

</div>

<?php include __INCLUDE__.'/js.php' ?>
</body>
</html>
