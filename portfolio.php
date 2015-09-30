<!DOCTYPE html>
<html lang="ru">

<?php
$page = 'portfolio';
$page_name = ' - Портфолио';
?>

<?php include 'head.php' ?>

<body>

<?php include 'navbar.php' ?>

<div class="container marketing">

    <div class="row">
        <ul class="thumbnails">
            <li class="span3">
                <a href="waiting.php" class="thumbnail">
                    <img style="width: auto; height: auto;" src="assets/img/1290-th.jpg" alt="">
                    ОЖИДАНИЕ
                </a>
            </li>

            <li class="span3">
                <a href="newborns.php" class="thumbnail">
                    <img style="width: auto; height: auto;" src="assets/img/5111-th.jpg" alt="">
                    НОВОРОЖДЕННЫЕ
                </a>
            </li>

            <li class="span3">
                <a href="children.php" class="thumbnail">
                    <img style="width: auto; height: auto;" src="assets/img/3307-th.jpg" alt="">
                    ДЕТИ
                </a>
            </li>

            <li class="span3">
                <a href="family.php" class="thumbnail">
                    <img style="width: auto; height: auto;" src="assets/img/1560-th.jpg" alt="">
                    СЕМЬЯ
                </a>
            </li>

            <li class="span3">
                <a href="portraits.php" class="thumbnail">
                    <img style="width: auto; height: auto;" src="assets/img/1794-th.jpg" alt="">
                    ПОРТРЕТЫ
                </a>
            </li>
        </ul>
    </div>

    <?php include 'footer.php' ?>

</div>

<?php include 'js.php' ?>

</body>
</html>
