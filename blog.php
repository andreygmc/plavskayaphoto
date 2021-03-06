<?php
define('__INCLUDE__', "../include");
require_once(__INCLUDE__."/common.php");

$page = 'blog';
$page_name = ' - Блог';
?>

<!DOCTYPE html>
<html lang="ru">

<?php include __INCLUDE__.'/head.php' ?>

<body>

<?php include __INCLUDE__.'/navbar.php' ?>

<div class="container marketing">
    <?php
    $post7 = new BlogPreview();
    $post7->page_name = "14042016";
    $post7->title = "В волшебном парке";
    $post7->preview = '14042016/1';
    $post7->date = '14-04-2016';

    $post6 = new BlogPreview();
    $post6->page_name = "26032016";
    $post6->title = "Начало весны";
    $post6->preview = '26032016/4';
    $post6->date = '26-03-2016';

    $post5 = new BlogPreview();
    $post5->page_name = "01032016";
    $post5->title = "Зимняя прогулка";
    $post5->preview = '01032016/5';
    $post5->date = '01-03-2016';

    $post4 = new BlogPreview();
    $post4->page_name = "21112015";
    $post4->title = "Про осень и дружбу";
    $post4->preview = '21112015/1';
    $post4->date = '21-11-2015';

    $post3 = new BlogPreview();
    $post3->page_name = "07092015";
    $post3->title = "Встреча";
    $post3->preview = '07092015/16';
    $post3->date = '07-09-2015';

    $post2 = new BlogPreview();
    $post2->page_name = "05082015";
    $post2->title = "Однажды на лесной опушке";
    $post2->preview = '1703';
    $post2->date = '05-08-2015';

    $post1 = new BlogPreview();
    $post1->page_name = "12072015";
    $post1->title = "Летняя прогулка";
    $post1->preview = '1441';
    $post1->date = '12-07-2015';

    createBlogPreviewElements(array($post7, $post6, $post5, $post4, $post3, $post2, $post1));

    ?>

    <?php include __INCLUDE__.'/footer.php' ?>

</div>

<?php include __INCLUDE__.'/js.php' ?>

</body>
</html>
