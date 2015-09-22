<!DOCTYPE html>
<html lang="ru">

<?php
$page_name = ' - Семья';
?>

<?php include 'head.php' ?>

<body>

<?php include 'navbar.php' ?>

<div id="myCarousel" class="carousel slide c-fade">
    <div class="carousel-inner">
        <div class="item active">
            <img src="assets/img/3171.jpg">
        </div>
        <div class="item">
            <img src="assets/img/1456.jpg">
        </div>
        <div class="item">
            <img src="assets/img/1683.jpg">
        </div>
        <div class="item">
            <img src="assets/img/0678.jpg">
        </div>
		<div class="item">
            <img src="assets/img/0789.jpg">
        </div>
        <div class="item">
            <img src="assets/img/1331.jpg">
        </div>
		<div class="item">
            <img src="assets/img/1495.jpg">
        </div>
		<div class="item">
            <img src="assets/img/6005.jpg">
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>

<div class="container marketing">

    <?php include 'footer.php' ?>

</div>

<?php include 'js.php' ?>
<script>
    !function ($) {
        $(function () {
            $('#myCarousel').carousel()
        })
    }(window.jQuery)
</script>
</body>
</html>
