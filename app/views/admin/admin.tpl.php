<?php require_once VIEWS . '/inc/header.php' ?>
<main>
    <div class="main-admin">
        <div class="admin-btns">
            <?php if ($_SESSION['lang'] !== 'ru') : ?>
                <div class="admin-form">
                    <span class="admin-span">SET BALANCE TO USER</span>
                    <ul class="error-form-title">
                        <li><?= $errLog ?? '' ?></li>
                    </ul>
                    <form action="/admin/add" method="post">
                        <input type="hidden" name="do" value="addbalance">
                        <input type="text" name="email" placeholder="User Email" value="<?= old('email') ?>">
                        <input type="number" name="balance" placeholder="Balance" value="<?= old('balance') ?>">
                        <input type="submit" value="Send">
                    </form>
                </div>
                <div class="admin-form">
                    <span class="admin-span">ADD PROMOCODE</span>
                    <ul class="error-form-title">
                        <li><?= $errPromo ?? '' ?></li>
                    </ul>
                    <form action="/admin/add" method="post">
                        <input type="hidden" name="do" value="addpromo">
                        <input type="text" name="promo" placeholder="Enter promocode" value="<?= old('promo') ?>">
                        <input type="number" name="promoNum" placeholder="Number of uses" value="<?= old('promoNum') ?>">
                        <input type="number" name="promoSale" placeholder="Discount in $" value="<?= old('promoSale') ?>">
                        <input type="submit" value="Send">
                    </form>
                </div>
                <div class="admin-form">
                    <span class="admin-span">ADD ACCOUNT FOR USER PAYMENTS</span>
                    <ul class="error-form-title">
                        <li><?= $errAddCard ?? '' ?></li>
                    </ul>
                    <form action="/admin/add" method="post">
                        <input type="hidden" name="do" value="addcard">
                        <input type="text" name="card" placeholder="Account number" value="<?= old('card') ?>">
                        <input type="submit" value="Send">
                    </form>
                </div>
                <div class="admin-form">
                    <span class="admin-span">REMOVE ACCOUNT FOR USER PAYMENTS</span>
                    <ul class="error-form-title">
                        <li><?= $errDelCard ?? '' ?></li>
                    </ul>
                    <form action="/admin/add" method="post">
                        <input type="hidden" name="do" value="delcard">
                        <input type="text" name="delcardname" placeholder="Account number" value="<?= old('delcardname') ?>">
                        <input type="submit" value="Send">
                    </form>
                </div>
            <?php else : ?>
                <div class="admin-form">
                    <span class="admin-span">ЗАДАТЬ БАЛАНС ПОЛЬЗОВАТЕЛЮ</span>
                    <ul class="error-form-title">
                        <li><?= $errLog ?? '' ?></li>
                    </ul>
                    <form action="/admin/add" method="post">
                        <input type="hidden" name="do" value="addbalance">
                        <input type="text" name="email" placeholder="Email пользователя" value="<?= old('email') ?>">
                        <input type="number" name="balance" placeholder="Баланс" value="<?= old('balance') ?>">
                        <input type="submit" value="Отправить">
                    </form>
                </div>
                <div class="admin-form">
                    <span class="admin-span">ДОБАВИТЬ ПРОМОКОД</span>
                    <ul class="error-form-title">
                        <li><?= $errPromo ?? '' ?></li>
                    </ul>
                    <form action="/admin/add" method="post">
                        <input type="hidden" name="do" value="addpromo">
                        <input type="text" name="promo" placeholder="Введите промокод" value="<?= old('promo') ?>">
                        <input type="number" name="promoNum" placeholder="Количество использований" value="<?= old('promoNum') ?>">
                        <input type="number" name="promoSale" placeholder="Скидка в $" value="<?= old('promoSale') ?>">
                        <input type="submit" value="Отправить">
                    </form>
                </div>
                <div class="admin-form">
                    <span class="admin-span">ДОБАВИТЬ СЧЕТ ДЛЯ ОПЛАТЫ ПОЛЬЗОВАТЕЛЕЙ</span>
                    <ul class="error-form-title">
                        <li><?= $errAddCard ?? '' ?></li>
                    </ul>
                    <form action="/admin/add" method="post">
                        <input type="hidden" name="do" value="addcard">
                        <input type="text" name="card" placeholder="Номер счета" value="<?= old('card') ?>">
                        <input type="submit" value="Отправить">
                    </form>
                </div>
                <div class="admin-form">
                    <span class="admin-span">УДАЛИТЬ СЧЕТ ДЛЯ ОПЛАТЫ ПОЛЬЗОВАТЕЛЕЙ</span>
                    <ul class="error-form-title">
                        <li><?= $errDelCard ?? '' ?></li>
                    </ul>
                    <form action="/admin/add" method="post">
                        <input type="hidden" name="do" value="delcard">
                        <input type="text" name="delcardname" placeholder="Номер счета" value="<?= old('delcardname') ?>">
                        <input type="submit" value="Отправить">
                    </form>
                </div>
            <?php endif; ?>
        </div>

        <div class="admin-panel">
            <?php if ($_SESSION['lang'] !== 'ru') : ?>
                <div class="admin-check-services">
                    <a href="/admin/services">User Services</a>
                </div>
                <div class="admin-check-services">
                    <a href="/admin/showusers">A list of users</a>
                </div>
            <?php else : ?>
                <div class="admin-check-services">
                    <a href="/admin/services">Услуги пользователей</a>
                </div>
                <div class="admin-check-services">
                    <a href="/admin/showusers">Список пользователей</a>
                </div>
            <?php endif ?>

            <div class="admin-ul">
                <?php if ($_SESSION['lang'] !== 'ru') : ?>
                    <? if (empty($allRecen)) : ?>
                        <div class="admin-li">
                            <p>So far there are no requests for replenishment</p>
                        </div>
                    <? else : ?>
                        <?php foreach ($allRecen as $k) : ?>
                            <div class="admin-li">
                                <p>User <?= $k['email'] ?> requests a check for replenishment in the amount <b><?= $k['paymentsum'] ?></b> hash: <b><?= $k['hash'] ?></b></p> <a class="admin-accept" href="/admin/confirm?type=accept&email=<?= $k['email'] ?>&sum=<?= $k['paymentsum'] ?>&id=<?= $k['id'] ?>">Accept</a><a class="admin-deny" href="/admin/confirm?type=deny&email=<?= $k['email'] ?>&sum=<?= $k['paymentsum'] ?>&id=<?= $k['id'] ?>">Deny</a>
                            </div>
                        <?php endforeach; ?>
                    <?php endif ?>
                <?php else : ?>
                    <? if (empty($allRecen)) : ?>
                        <div class="admin-li">
                            <p>Пока что запросы на пополнение отсутствуют</p>
                        </div>
                    <? else : ?>
                        <?php foreach ($allRecen as $k) : ?>
                            <div class="admin-li">
                                <p>Пользователь <b><?= $k['email'] ?></b> запрашивает проверку на пополнение в размере <?= $k['paymentsum'] ?> хэш: <b><?= $k['hash'] ?></b></p> <a class="admin-accept" href="/admin/confirm?type=accept&email=<?= $k['email'] ?>&sum=<?= $k['paymentsum'] ?>&id=<?= $k['id'] ?>">Принять</a><a class="admin-deny" href="/admin/confirm?type=deny&email=<?= $k['email'] ?>&sum=<?= $k['paymentsum'] ?>&id=<?= $k['id'] ?>">Отклонить</a>
                            </div>
                        <?php endforeach; ?>
                    <?php endif ?>
                <?php endif; ?>


            </div>
        </div>
    </div>




</main>
<?php require_once VIEWS . '/inc/footer.php' ?>