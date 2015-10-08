<?php
define('__INCLUDE__', "../include");
require_once(__INCLUDE__."/common.php");

$page = 'contacts';
$page_name = ' - Контакты';
?>

<!DOCTYPE html>
<html lang="ru">

<?php include __INCLUDE__.'/head.php' ?>

<body>

<?php include __INCLUDE__.'/navbar.php' ?>

<div class="container marketing">

    <p class="contactInfo">
        Детский и семейный фотограф <b>Екатерина Плавская</b><br/>
        Фотосессии в Москве и Московской области<br/><br/>

        + 7 (926) 409-67-47 <br/><br/>

        <a href="https://instagram.com/plavskaya_ekaterina">Instagram</a><br/>
        <a href="https://vk.com/ekaterina.plavskaya">Страница ВКонтакте</a><br/>
        <a href="https://vk.com/plavskayaphoto">Сообщество ВКонтакте</a><br/>
        <a href="mailto:ekaterina.plavskaya@gmail.com">ekaterina.plavskaya@gmail.com</a>

    </p>

    <?php include __INCLUDE__.'/footer.php' ?>

</div>

<?php include __INCLUDE__.'/js.php' ?>

</body>
</html>
