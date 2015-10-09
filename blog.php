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

    createBlogPreviewElements(array($post3, $post2, $post1));

    ?>

    <?php include __INCLUDE__.'/footer.php' ?>

</div>

<?php include __INCLUDE__.'/js.php' ?>

</body>
</html>
