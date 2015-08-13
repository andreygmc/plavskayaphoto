<!DOCTYPE html>
<html lang="ru">

<?php
$page_name = ' - Дети';
?>

<?php include 'head.php' ?>

<body>

<?php include 'navbar.php' ?>

<div id="myCarousel" class="carousel slide c-fade">
    <div class="carousel-inner">
        <div class="item active">
            <img src="assets/img/0858.jpg">
        </div>
		<div class="item">
            <img src="assets/img/0912.jpg">
        </div>
        <div class="item">
            <img src="assets/img/1045.jpg">
        </div>
		<div class="item">
            <img src="assets/img/1129.jpg">
        </div>
		<div class="item">
            <img src="assets/img/1139.jpg">
        </div>
		<div class="item">
            <img src="assets/img/3761.jpg">
        </div>
		<div class="item">
            <img src="assets/img/4980.jpg">
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
