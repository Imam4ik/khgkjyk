<?php require VIEWS . '/inc/header.php' ?>
<main>
    <?php if ($_SESSION['lang'] != 'ru') : ?>
        <div class="form-container-add">
            <ul class="error-form-title">
                <li><?= $errLog ?? '' ?></li>
            </ul>
            <form action="/checkemail" method="post">
                <label for="email">Email</label>
                <input type="email" value="<?= old('email') ?>" name="email" placeholder="Your email" id="email">
                <div class="g-recaptcha" data-sitekey="6LckmdwnAAAAAGMHigqONikaLnV8-5QZ3yRIACZV"></div>
                <input type="submit" value="Restore password">
            </form>
        </div>
    <?php else : ?>
        <div class="form-container-add">
            <ul class="error-form-title">
                <li><?= $errLog ?? '' ?></li>
            </ul>
            <form action="/checkemail" method="post">
                <label for="email">Почта</label>
                <input type="email" value="<?= old('email') ?>" name="email" placeholder="Ваша почта" id="email">
                <div class="g-recaptcha" data-sitekey="6LckmdwnAAAAAGMHigqONikaLnV8-5QZ3yRIACZV"></div>
                <input type="submit" value="Восстановить пароль">
            </form>
        </div>
    <?php endif ?>
</main>
<?php require VIEWS . '/inc/footer.php' ?>