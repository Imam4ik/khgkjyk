<?php
if ($_SESSION['lang'] !== 'ru') {
    $title = 'ERROR';
} else {
    $title = 'ОШИБКА';
}
require_once VIEWS . '/inc/header.php';
?>
<main>
    <div class="main-error effect-block">
        <div class="text-error">Error #500 - Internal Server Error</div>
        <a href="/">To Home Page</a>
    </div>
</main>
<?php require_once VIEWS . '/inc/footer.php' ?>