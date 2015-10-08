<?php
define('__INCLUDE__', "../include");
require_once(__INCLUDE__."/common.php");

$page = 'blog';
$page_name = ' - Однажды на лесной опушке';
?>

<!DOCTYPE html>
<html lang="ru">

<?php include __INCLUDE__.'/head.php' ?>

<body>

<?php include __INCLUDE__.'/navbar.php' ?>

<div class="container marketing">
    <div class="blogTitle"><h4>Однажды на лесной опушке</h4></div>
    <div class="blogDescription">
        <p>Теплый летний вечер прекрасно подошел для прогулки по лесу очаровательной Натальи и ее дочки Александры. А прекрасный мягкий свет сделал нашу съемку волшебной.</p>
    </div>
    <?php
    createPortfolioPhotoElements(
        array("1683", "1703", "1741", "1757", "1748", "1768", "1721", "1699", "1819", "1837")
    );
    ?>
    <?php include __INCLUDE__.'/footer.php' ?>

</div>

<?php include __INCLUDE__.'/js.php' ?>
</body>
</html>
