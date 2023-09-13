<?php
require VIEWS . '/inc/header.php'; ?>
<main>
    <div class="main-cart">
        <?php if (isset($_SESSION['user'])) : ?>
            <?php if ($_SESSION['lang'] != 'ru') : ?>
                <?php if (isset($_SESSION['promo'])) : ?>
                    <div class="cartpage-promo">
                        <p><?= "The promo code is activated. Discount: {$_SESSION['promo']} $" ?></p>
                    </div>
                <?php else : ?>
                    <div class="cartpage-promo">
                        <a href="/enterpromo">Activate promocode</a>
                    </div>
                <?php endif ?>
            <?php else : ?>
                <?php if (isset($_SESSION['promo'])) : ?>
                    <div class="cartpage-promo">
                        <p><?= "Промокод активирован. Скидка: {$_SESSION['promo']} $" ?></p>
                    </div>
                <?php else : ?>
                    <div class="cartpage-promo">
                        <a href="/enterpromo">Активировать промокод</a>
                    </div>
                <?php endif ?>
            <?php endif ?>
        <? endif ?>
        <?php if ($_SESSION['lang'] !== 'ru') : ?>
            <div class="cartpage-cart">
                <div class="cartpage-ul">
                    <?php if (isset($_SESSION['cart'])) : ?>
                        <?php foreach ($_SESSION['cart'] as $k => $v) : ?>
                            <?php $product = $db->query("SELECT * FROM proxi WHERE id = ?", [$v['id']])->find() ?>
                            <div class="cartpage-li">
                                <div class="cart-name"><?= $product['name'] ?></div>
                                <div class="cart-price"><?= $product['price'] ?>$</div>
                                <div class="cart-price"><?= $v['target'] ?></div>
                                <div class="cart-price"><?= $v['count'] ?></div>
                                <div class="cart-delete"><a href="/cart?do=delete&id=<?= $product['id'] ?>">Remove</a></div>
                                <?php $_SESSION['topay'] += $product['price'] ?>
                            </div>
                        <?php endforeach ?>
                    <? else : ?>
                        <div class="cartpage-li">
                            So far there's nothing here
                        </div>
                    <? endif ?>
                </div>
                <div class="cartpage-btns">
                    <?php if (isset($_SESSION['cart'])) : ?>
                        <div class="cartpage-btns-price"><?= substr($_SESSION['topay'], 0, 1) == '-' ? "0" : $_SESSION['topay'] ?> $</div>
                        <div class="cartpage-btns-pay"><a href="/topay">Pay</a></div>
                        <div class="cartpage-btns-deleteall"><a href="/cart?do=deleteall">Remove all</a></div>
                    <? endif ?>
                </div>
            </div>
        <?php else : ?>
            <div class="cartpage-cart">
                <div class="cartpage-ul">
                    <?php if (isset($_SESSION['cart'])) : ?>
                        <?php foreach ($_SESSION['cart'] as $k => $v) : ?>
                            <?php $product = $db->query("SELECT * FROM proxi WHERE id = ?", [$v['id']])->find() ?>
                            <div class="cartpage-li">
                                <div class="cart-name"><?= $product['name'] ?></div>
                                <div class="cart-price"><?= $product['price'] ?>$</div>
                                <div class="cart-price"><?= $v['target'] ?></div>
                                <div class="cart-price"><?= $v['count'] ?></div>
                                <div class="cart-delete"><a href="/cart?do=delete&id=<?= $product['id'] ?>">Убрать</a></div>
                                <?php $_SESSION['topay'] += $product['price'] ?>
                            </div>
                        <?php endforeach ?>
                    <? else : ?>
                        <div class="cartpage-li">
                            Пока что тут ничего нет
                        </div>
                    <? endif ?>
                </div>
                <div class="cartpage-btns">
                    <?php if (isset($_SESSION['cart'])) : ?>
                        <div class="cartpage-btns-price"><?= substr($_SESSION['topay'], 0, 1) == '-' ? "0" : $_SESSION['topay'] ?> $</div>
                        <div class="cartpage-btns-pay"><a href="/topay">Оплатить</a></div>
                        <div class="cartpage-btns-deleteall"><a href="/cart?do=deleteall">Удалить все</a></div>
                    <? endif ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</main>
<?php require VIEWS . '/inc/footer.php'; ?>