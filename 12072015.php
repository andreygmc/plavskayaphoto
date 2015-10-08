<?php
define('__INCLUDE__', "../include");
require_once(__INCLUDE__."/common.php");

$page = 'blog';
$page_name = ' - Летняя прогулка';
?>

<!DOCTYPE html>
<html lang="ru">

<?php include __INCLUDE__.'/head.php' ?>

<body>

<?php include __INCLUDE__.'/navbar.php' ?>

<div class="container marketing">
    <div class="blogTitle"><h4>Летняя прогулка</h4></div>
    <div class="blogDescription">
        <p>Здорово, когда папа окружен вот таким количеством прекрасных девочек. Знакомьтесь, Наталья, Олег и их дочки.</p>
    </div>
    <?php
    createPortfolioPhotoElements(
        array("1495", "1504", "1456", "1441", "1566", "1534", "1586", "1663", "1668", "1590", "1643", "1430", "1436", "1445", "1423")
    );
    ?>
    <?php include __INCLUDE__.'/footer.php' ?>

</div>

<?php include __INCLUDE__.'/js.php' ?>
</body>
</html>
