<?php require VIEWS . '/inc/header.php'; ?>
<main>
    <div class="main-admin-services">
        <?php if ($_SESSION['lang'] !== 'ru') : ?>
            <div class="admin-services-ul">
                <ul>
                    <?php foreach ($users as $k) : ?>
                        <li>
                            <p>NAME: <?= $k['username'] ?></p>
                            <p>EMAIL: <?= $k['email'] ?></p>
                            <p>BALANCE: <?= $k['balance'] ?? 0 ?> $</p>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        <?php else : ?>
            <div class="admin-services-ul">
                <ul>
                    <?php foreach ($users as $k) : ?>
                        <li>
                            <p>ИМЯ: <?= $k['username'] ?></p>
                            <p>ПОЧТА: <?= $k['email'] ?></p>
                            <p>БАЛАНС: <?= $k['balance'] ?? 0 ?> $</p>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        <?php endif; ?>

    </div>
</main>
<?php require VIEWS . '/inc/footer.php'; ?>