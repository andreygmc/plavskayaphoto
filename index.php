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
            <img src="assets/img/1.jpg">
        </div>
        <div class="item">
            <img src="assets/img/2.jpg">
        </div>
        <div class="item">
            <img src="assets/img/3.jpg">
        </div>
        <div class="item">
            <img src="assets/img/4.jpg">
        </div>
        <div class="item">
            <img src="assets/img/5.jpg">
        </div>
        <div class="item">
            <img src="assets/img/6.jpg">
        </div>
        <div class="item">
            <img src="assets/img/7.jpg">
        </div>
        <!--<div class="item">
            <img src="assets/img/8.jpg">
        </div>-->
        <div class="item">
            <img src="assets/img/9.jpg">
        </div>
        <div class="item">
            <img src="assets/img/10.jpg">
        </div>
        <div class="item">
            <img src="assets/img/11.jpg">
        </div>
        <div class="item">
            <img src="assets/img/12.jpg">
        </div>
        <div class="item">
            <img src="assets/img/13.jpg">
        </div>
        <!--<div class="item">
            <img src="assets/img/14.jpg">
        </div>-->
        <!--<div class="item">
            <img src="assets/img/15.jpg">
        </div>-->
        <div class="item">
            <img src="assets/img/16.jpg">
        </div>
        <!--<div class="item">
            <img src="assets/img/17.jpg">
        </div>-->
        <div class="item">
            <img src="assets/img/18.jpg">
        </div>
        <div class="item">
            <img src="assets/img/19.jpg">
        </div>
        <div class="item">
            <img src="assets/img/20.jpg">
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
