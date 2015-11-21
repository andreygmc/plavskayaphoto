<?php
define('__INCLUDE__', "../include");
require_once(__INCLUDE__."/common.php");

$page = 'blog';
$page_name = ' - Про осень и дружбу';
?>

<!DOCTYPE html>
<html lang="ru">

<?php include __INCLUDE__.'/head.php' ?>

<body>

<?php include __INCLUDE__.'/navbar.php' ?>

<div class="container marketing">
    <div class="blogTitle"><h4>Про осень и дружбу</h4></div>
    <div class="blogDescription">
        <p>А вот и вторая часть съёмки Марии и Алексея. Прекрасный осенний день, хорошее настроение и замечательные друзья. А что еще надо для отличной фотосессии?</p>
    </div>
    <?php
    createPortfolioPhotoElements(
        array("21112015/1", "21112015/2", "21112015/3", "21112015/4", "21112015/5", "21112015/6", "21112015/7", "21112015/8", "21112015/9", "21112015/10")
    );
    ?>
    <?php include __INCLUDE__.'/footer.php' ?>

</div>

<?php include __INCLUDE__.'/js.php' ?>
</body>
</html>
