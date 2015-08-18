<!DOCTYPE html>
<html lang="ru">
<?php
    $page_name = '';
?>

<?php include 'head.php' ?>

<body>

<?php include 'navbar.php' ?>

<div id="myCarousel" class="carousel slide c-fade">
    <div class="carousel-inner">
        <div class="item active">
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
