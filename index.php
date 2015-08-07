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
        <!--div class="item">
            <img src="assets/img/5.jpg">
        </div-->
        <div class="item">
            <img src="assets/img/6.jpg">
        </div>
        <!--
        0954, 0990, 3513
        -->
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
