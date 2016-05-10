<?php
define('__INCLUDE__', "../include");
require_once(__INCLUDE__."/common.php");

$page = 'blog';
$page_name = ' - Начало весны';
?>

<!DOCTYPE html>
<html lang="ru">

<?php include __INCLUDE__.'/head.php' ?>

<body>

<?php include __INCLUDE__.'/navbar.php' ?>

<div class="container marketing">
    <div class="blogTitle"><h4>Начало весны</h4></div>
    <?php
    createPortfolioPhotoElements(
        array("26032016/1", "26032016/2", "26032016/3", "26032016/4", "26032016/5", "26032016/6", "26032016/7", "26032016/8", "26032016/9", "26032016/10", "26032016/11", "26032016/12", "26032016/13")
    );
    ?>
    <?php include __INCLUDE__.'/footer.php' ?>

</div>

<?php include __INCLUDE__.'/js.php' ?>
</body>
</html>
