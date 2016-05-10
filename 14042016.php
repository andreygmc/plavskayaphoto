<?php
define('__INCLUDE__', "../include");
require_once(__INCLUDE__."/common.php");

$page = 'blog';
$page_name = ' - В волшебном парке';
?>

<!DOCTYPE html>
<html lang="ru">

<?php include __INCLUDE__.'/head.php' ?>

<body>

<?php include __INCLUDE__.'/navbar.php' ?>

<div class="container marketing">
    <div class="blogTitle"><h4>В волшебном парке</h4></div>
    <?php
    createPortfolioPhotoElements(
        array("14042016/1", "14042016/2", "14042016/3", "14042016/4", "14042016/5", "14042016/6", "14042016/7", "14042016/8", "14042016/9", "14042016/10", "14042016/11", "14042016/12", "14042016/13")
    );
    ?>
    <?php include __INCLUDE__.'/footer.php' ?>

</div>

<?php include __INCLUDE__.'/js.php' ?>
</body>
</html>
