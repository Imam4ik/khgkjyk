<?php
require VIEWS . '/inc/header.php' ?>
<main>
    <?php if ($_SESSION['lang'] != 'ru') : ?>
        <div class="form-container-add">
            <form method="POST" action="https://aaio.io/merchant/pay">
                <label for="pay">Amount payable: <?= $amount ?> RUB. (<?= $sum ?> $)</label>
                <input type="hidden" name="merchant_id" value="<?php echo $merchant_id ?>">
                <input type="hidden" name="amount" value="<?php echo $amount ?>">
                <input type="hidden" name="currency" value="<?php echo $currency ?>">
                <input type="hidden" name="order_id" value="<?php echo $order_id ?>">
                <input type="hidden" name="sign" value="<?php echo $sign ?>">
                <input type="hidden" name="desc" value="<?php echo $desc ?>">
                <input type="hidden" name="lang" value="<?php echo $lang ?>">
                <input type="submit" name="pay" id="pay" value="Пополнить">
            </form>
        </div>
    <?php else : ?>
        <div class="form-container-add">
            <form method="POST" action="https://aaio.io/merchant/pay">
                <label for="pay">Сумма к оплате: <?= $amount ?> RUB. (<?= $sum ?> $)</label>
                <input type="hidden" name="merchant_id" value="<?php echo $merchant_id ?>">
                <input type="hidden" name="amount" value="<?php echo $amount ?>">
                <input type="hidden" name="currency" value="<?php echo $currency ?>">
                <input type="hidden" name="order_id" value="<?php echo $order_id ?>">
                <input type="hidden" name="sign" value="<?php echo $sign ?>">
                <input type="hidden" name="desc" value="<?php echo $desc ?>">
                <input type="hidden" name="lang" value="<?php echo $lang ?>">
                <input type="submit" name="pay" id="pay" value="Пополнить">
            </form>
        </div>
    <?php endif ?>

</main>

<?php require VIEWS . '/inc/footer.php' ?>