<?php require VIEWS . '/inc/header.php'; ?>
<main>
    <div class="main-admin-services">
        <?php if ($_SESSION['lang'] !== 'ru') : ?>
            <div class="admin-services-ul">
                <?php if (empty($services)) : ?>
                    So far, there's nothing here.
                <?php else : ?>
                    <ul>
                        <?php foreach ($services as $k) : ?>
                            <li><a href="/admin/service?id=<?= $k['id'] ?>"><?= $k['useremail'] ?> | <?= $k['service'] ?> | <?= $k['target'] ?> | <?= $k['count'] ?></a></li>
                        <?php endforeach ?>
                    </ul>
                <?php endif ?>
            </div>
        <?php else : ?>
            <div class="admin-services-ul">
                <?php if (empty($services)) : ?>
                    Пока что тут ничего нет.
                <?php else : ?>
                    <ul>
                        <?php foreach ($services as $k) : ?>
                            <li><a href="/admin/service?id=<?= $k['id'] ?>"><?= $k['useremail'] ?> | <?= $k['service'] ?> | <?= $k['target'] ?> | <?= $k['count'] ?></a></li>
                        <?php endforeach ?>
                    </ul>
                <?php endif ?>
            </div>
        <?php endif; ?>

    </div>
</main>
<?php require VIEWS . '/inc/footer.php'; ?>