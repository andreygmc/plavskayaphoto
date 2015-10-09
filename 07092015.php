<?php
define('__INCLUDE__', "../include");
require_once(__INCLUDE__."/common.php");

$page = 'blog';
$page_name = ' - Встреча';
?>

<!DOCTYPE html>
<html lang="ru">

<?php include __INCLUDE__.'/head.php' ?>

<body>

<?php include __INCLUDE__.'/navbar.php' ?>

<div class="container marketing">
    <div class="blogTitle"><h4>Встреча</h4></div>
    <div class="blogDescription">
        <p>Замечательные герои съемки, очень эмоциональные. Мои постоянные герои) Тёплые денечки помогли реализовать нам две идеи. Вот одна из них. Спасибо Марии и Алексею!</p>
    </div>
    <?php
    createPortfolioPhotoElements(
        array("07092015/1", "07092015/2", "07092015/3", "07092015/4", "07092015/5", "07092015/6", "07092015/7", "07092015/8",
            "07092015/9", "07092015/10", "07092015/11", "07092015/12", "07092015/13", "07092015/14", "07092015/15", "07092015/16", "07092015/17", "07092015/18")
    );
    ?>
    <?php include __INCLUDE__.'/footer.php' ?>

</div>

<?php include __INCLUDE__.'/js.php' ?>
</body>
</html>
