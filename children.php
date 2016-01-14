<?php
define('__INCLUDE__', "../include");
require_once(__INCLUDE__."/common.php");

$page = 'portfolio';
$page_name = ' - Дети';
?>

<!DOCTYPE html>
<html lang="ru">

<?php include __INCLUDE__.'/head.php' ?>

<body>

<?php include __INCLUDE__.'/navbar.php' ?>

<div class="container marketing">
    <?php
    createPortfolioPhotoElements(
        array("8341", "8681", "8799", "8811", "8875", "5696", "5530", "3920", "1768", "3707", "3738", "3659", "2800",
            "0858", "0912", "1045", "1129", "1139", "3761", "4980")
    );
    ?>
    <?php include __INCLUDE__.'/footer.php' ?>

</div>

<?php include __INCLUDE__.'/js.php' ?>
</body>
</html>
