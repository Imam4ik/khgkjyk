<?php
if ($_SESSION['lang'] !== 'ru') {
    $title = 'ERROR';
} else {
    $title = 'ОШИБКА';
}
require_once VIEWS . '/inc/header.php';
?>
<main>
    <?php if ($_SESSION['lang'] !== 'ru') : ?>
        <div class="main-error">
            <div class="text-error">Error #404 - Page not found</div>
            <a href="/">To Home Page</a>
        </div>
    <?php else : ?>
        <div class="main-error">
            <div class="text-error">Ошибка #404 - Страница не найдена</div>
            <a href="/">На главную</a>
        </div>
    <?php endif; ?>
</main>
<?php require_once VIEWS . '/inc/footer.php' ?>