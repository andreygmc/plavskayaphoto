<!DOCTYPE html>
<html lang="ru">
<?php
    $page_name = '';
?>

<?php include 'head.php' ?>

<body>

<?php include 'navbar.php' ?>

<div id="myCarousel" class="carousel slide">
    <div class="carousel-inner">
        <div class="item active">
            <img src="assets/img/0810.jpg">
        </div>
        <div class="item">
            <img src="assets/img/0954.jpg">
        </div>
        <div class="item">
            <img src="assets/img/0990.jpg">
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
            <img src="assets/img/2582.jpg">
        </div>
        <div class="item">
            <img src="assets/img/3286.jpg">
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
            // carousel demo
            $('#myCarousel').carousel()
        })
    }(window.jQuery)
</script>
</body>
</html>
