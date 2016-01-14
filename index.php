<?php
define('__INCLUDE__', "../include");
require_once(__INCLUDE__."/common.php");

$page = 'home';
$page_name = '';
?>

<!DOCTYPE html>
<html lang="ru">

<?php include __INCLUDE__.'/head.php' ?>

<body>

<?php include __INCLUDE__.'/navbar.php' ?>

<div id="myCarousel" class="carousel slide c-fade">
    <div class="carousel-inner">
        <div class="item active">
            <img src="assets/img/8866.jpg">
        </div>
        <div class="item">
            <img src="assets/img/nat-1.jpg">
        </div>
        <div class="item">
            <img src="assets/img/lar-1.jpg">
        </div>
        <div class="item">
            <img src="assets/img/8792.jpg">
        </div>
        <div class="item">
            <img src="assets/img/nat-2.jpg">
        </div>
        <!--div class="item">
            <img src="assets/img/8962.jpg">
        </div-->
        <div class="item">
            <img src="assets/img/3307.jpg">
        </div>
        <div class="item">
            <img src="assets/img/3455.jpg">
        </div>
        <div class="item">
            <img src="assets/img/3467.jpg">
        </div>
        <div class="item">
            <img src="assets/img/2819.jpg">
        </div>
        <div class="item">
            <img src="assets/img/1908.jpg">
        </div>
        <div class="item">
            <img src="assets/img/2810.jpg">
        </div>
        <div class="item">
            <img src="assets/img/1872.jpg">
        </div>
        <div class="item">
            <img src="assets/img/1703.jpg">
        </div>
        <div class="item">
            <img src="assets/img/1381.jpg">
        </div>
        <div class="item">
            <img src="assets/img/0938.jpg">
        </div>
		<div class="item">
            <img src="assets/img/1131.jpg">
        </div>
        <div class="item">
            <img src="assets/img/3286.jpg">
        </div>
        <div class="item">
            <img src="assets/img/0810.jpg">
        </div>
        <div class="item">
            <img src="assets/img/1076.jpg">
        </div>
        <div class="item">
            <img src="assets/img/1214.jpg">
        </div>
        <div class="item">
            <img src="assets/img/1441.jpg">
        </div>
        <div class="item">
            <img src="assets/img/0954.jpg">
        </div>
        <div class="item">
            <img src="assets/img/2582.jpg">
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>

<div class="container marketing">
    <?php include __INCLUDE__.'/footer.php' ?>
</div>

<?php include __INCLUDE__.'/js.php' ?>
<script>
    !function ($) {
        $(function () {
            $('#myCarousel').carousel()
        })
    }(window.jQuery)
</script>
</body>
</html>
