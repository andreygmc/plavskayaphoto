<?php
define('__INCLUDE__', "../include");
require_once(__INCLUDE__."/common.php");

$page = 'blog';
$page_name = ' - Зимняя прогулка';
?>

<!DOCTYPE html>
<html lang="ru">

<?php include __INCLUDE__.'/head.php' ?>

<body>

<?php include __INCLUDE__.'/navbar.php' ?>

<div class="container marketing">
    <div class="blogTitle"><h4>Зимняя прогулка</h4></div>
    <?php
    createPortfolioPhotoElements(
        array("01032016/1", "01032016/2", "01032016/3", "01032016/4", "01032016/5", "01032016/6", "01032016/7", "01032016/8", "01032016/9", "01032016/10", "01032016/11", "01032016/12", "01032016/13")
    );
    ?>
    <?php include __INCLUDE__.'/footer.php' ?>

</div>

<?php include __INCLUDE__.'/js.php' ?>
</body>
</html>
