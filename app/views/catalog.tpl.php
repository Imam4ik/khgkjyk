<?php require VIEWS . '/inc/header.php' ?>
<main>
    <div class="main-catalog">
        <?php if ($_SESSION['lang'] !== 'ru') : ?>
            <div class="grid-catalog">
                <?php foreach ($catalog as $k => $v) : ?>
                    <div class="service_card">
                        <div class="card_body">
                            <div class="card_image">
                                <img src="/assets/images/<?= $v['quantity'] ?>.svg" alt="">
                            </div>
                            <div class="card_title"> <?= $v['name'] ?> </div>
                            <div class="card_description"> A set of <?= $v['quantity'] ?> "General" proxies suitable for most tasks. </div>
                        </div>
                        <div class="price">
                            <img src="/assets/images/index/currencyJpy.svg" alt=""> <?= $v['price'] ?>/month
                        </div>
                        <div class="card_action">
                            <a class="order_btn" href="/proxi?id=<?= $v['id'] ?>"> Buy <img src="../assets/images/index/arrow.svg" alt=""> </a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        <?php else : ?>
            <div class="grid-catalog">
                <?php foreach ($catalog as $k => $v) : ?>
                    <div class="service_card">
                        <div class="card_body">
                            <div class="card_image">
                                <img src="/assets/images/<?= $v['quantity'] ?>.svg" alt="">
                            </div>
                            <div class="card_title"> <?= $v['name'] ?> </div>
                            <div class="card_description"> Набор из <?= $v['quantity'] ?> "Общих" прокси, подходящих для большинства задач. </div>
                        </div>
                        <div class="price">
                            <img src="/assets/images/index/currencyJpy.svg" alt=""> <?= $v['price'] ?>/месяц
                        </div>
                        <div class="card_action">
                            <a class="order_btn" href="/proxi?id=<?= $v['id'] ?>"> Купить <img src="../assets/images/index/arrow.svg" alt=""> </a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        <?php endif; ?>
    </div>
</main>
<?php require VIEWS . '/inc/footer.php' ?>