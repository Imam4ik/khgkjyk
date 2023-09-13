<?php require VIEWS . '/inc/header.php' ?>
<main>
    <div class="main-service">
        <?php if ($_SESSION['lang'] !== 'ru') : ?>
            <div class="service-title">
                PROXI: <?php echo "{$service['useremail']} | {$service['service']} | {$service['count']} | {$service['target']}"  ?>
            </div>
            <div class="service-forms">
                <div class="service-ips">
                    User IPs:
                    <?php if (empty($service['ips'])) : ?>
                        So far they are not
                    <?php else : ?>
                        <?php $ips = explode(';', trim($service['ips'], ';')) ?>
                        <ul>
                            <?php foreach ($ips as $k) : ?>
                                <li><?= $k ?></li>
                            <?php endforeach ?>
                        </ul>
                    <?php endif ?>
                </div>
                <div class="service-proxis">
                    Proxy user:
                    <?php if (empty($service['proxis'])) : ?>
                        So far they are not
                    <?php else : ?>
                        <?php $proxis = explode(';', trim($service['proxis'], ';')) ?>
                        <ul>
                            <?php foreach ($proxis as $k) : ?>
                                <li><?= $k ?></li>
                            <?php endforeach ?>
                        </ul>
                    <?php endif ?>
                </div>
            </div>
            <form action="/addipsadm" method="post">
                <input type="hidden" name="id" value="<?= $service['id'] ?>">
                <input type="hidden" name="proxis" value="<?= $service['proxis'] ?>">
                <input type="text" name="proxi" placeholder="Enter Proxy">
                <input type="submit" value="Add">
            </form>
        <?php else : ?>
            <div class="service-title">
                ПРОКСИ: <?php echo "{$service['useremail']} | {$service['service']} | {$service['count']} | {$service['target']}"  ?>
            </div>
            <div class="service-forms">
                <div class="service-ips">
                    IP пользоватея:
                    <?php if (empty($service['ips'])) : ?>
                        Пока что их нет
                    <?php else : ?>
                        <?php $ips = explode(';', trim($service['ips'], ';')) ?>
                        <ul>
                            <?php foreach ($ips as $k) : ?>
                                <li><?= $k ?></li>
                            <?php endforeach ?>
                        </ul>
                    <?php endif ?>
                </div>
                <div class="service-proxis">
                    Прокси пользователя:
                    <?php if (empty($service['proxis'])) : ?>
                        Пока что их нет
                    <?php else : ?>
                        <?php $proxis = explode(';', trim($service['proxis'], ';')) ?>
                        <ul>
                            <?php foreach ($proxis as $k) : ?>
                                <li><?= $k ?></li>
                            <?php endforeach ?>
                        </ul>
                    <?php endif ?>
                </div>
            </div>
            <form action="/addipsadm" method="post">
                <input type="hidden" name="id" value="<?= $service['id'] ?>">
                <input type="hidden" name="proxis" value="<?= $service['proxis'] ?>">
                <input type="text" name="proxi" placeholder="Введите Прокси">
                <input type="submit" value="Добавить">
            </form>
        <?php endif; ?>

    </div>
</main>
<?php require VIEWS . '/inc/footer.php' ?>