<?php require VIEWS . '/inc/header.php' ?>
<!-- SERVICE -->
<section class="service">
    <div class="container">
        <div class="service_swiper">
            <div class="swiper-container tabs_buttons">
                <?php if ($_SESSION['lang'] !== 'ru') : ?>
                    <div class="swiper-wrapper tabs">
                        <div class="swiper-slide">
                            <div class="tab_item">
                                What is a private proxy?
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tab_item">
                                How to get private proxies?
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tab_item">
                                How to setup private proxies?
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tab_item">
                                Where to buy private proxies?
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tab_item">
                                How do private proxies work?
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tab_item">
                                My target is not in the dropdown. Do you support it?
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tab_item">
                                Are my proxies shared with other users?
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="swiper-wrapper tabs">
                        <div class="swiper-slide">
                            <div class="tab_item">
                                Что такое приватный прокси?
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tab_item">
                                Как получить приватные прокси?
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tab_item">
                                Как настроить приватные прокси?
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tab_item">
                                Где купить приватные прокси?
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tab_item">
                                Как работают частные прокси?
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tab_item">
                                Моей цели нет в раскрывающемся списке. Вы поддерживаете это?
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tab_item">
                                Доступны ли мои прокси другим пользователям?
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
            <?php if ($_SESSION['lang'] !== 'ru') : ?>
                <select class="select" id="select">
                    <option value="0" data-display="0">What is a private proxy?</option>
                    <option value="1">How to get private proxies?</option>
                    <option value="2">How to setup private proxies?</option>
                    <option value="3">Where to buy private proxies?</option>
                    <option value="4">How do private proxies work?</option>
                    <option value="5">My target is not in the dropdown. Do you support it?</option>
                    <option value="6">Are my proxies shared with other users?</option>
                </select>
            <?php else : ?>
                <select class="select" id="select">
                    <option value="0" data-display="0">Что такое приватный прокси?</option>
                    <option value="1">Как получить приватные прокси?</option>
                    <option value="2">Как настроить приватные прокси?</option>
                    <option value="3">Где купить приватные прокси?</option>
                    <option value="4">Как работают частные прокси?</option>
                    <option value="5">Моей цели нет в раскрывающемся списке. Вы поддерживаете это?</option>
                    <option value="6">Доступны ли мои прокси другим пользователям?</option>
                </select>
            <?php endif; ?>
            <div class="swiper_big_container">
                <div class="swiper-container tabs_content">
                    <?php if ($_SESSION['lang'] !== 'ru') : ?>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slide_card">
                                    <div class="card_header">
                                        <div class="image">
                                            <img src="../assets/images/index/services_2 1.svg" alt="">
                                        </div>
                                        <div class="card_texts">
                                            <div class="title">
                                                What is a private proxy?
                                            </div>
                                            <div class="description">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card_body">
                                        A private proxy is a dedicated IP that is exclusively assigned to a single user. This exclusivity provides enhanced security, reliability, and better performance compared to shared proxies. They offer greater control and customization options for the user which makes them suitable for specific requirements. Social media tasks and data scraping are some examples.
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide_card">
                                    <div class="card_header">
                                        <div class="image">
                                            <img src="../assets/images/index/services_2 2.svg" alt="">
                                        </div>
                                        <div class="card_texts">
                                            <div class="title">
                                                How to get private proxies?
                                            </div>
                                            <div class="description">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card_body">
                                        Simply choose the number of proxies you need, your target websites, and your preferred location. After completing the checkout process, an activation email will be sent to you. This email contains your proxy account where you can access your private proxies.
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide_card">
                                    <div class="card_header">
                                        <div class="image">
                                            <img src="../assets/images/index/services_2 3.svg" alt="">
                                        </div>
                                        <div class="card_texts">
                                            <div class="title">
                                                How to setup private proxies?
                                            </div>
                                            <div class="description">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card_body">
                                        Setting up Vosov proxies is easy. After logging into your proxy account, authorize your IP. Once it’s authorized, you can start using it on your preferred browser, device, or tool. You can check our tutorials page for the complete instructions!
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide_card">
                                    <div class="card_header">
                                        <div class="image">
                                            <img src="../assets/images/index/services_2 4.svg" alt="">
                                        </div>
                                        <div class="card_texts">
                                            <div class="title">
                                                Where to buy private proxies?
                                            </div>
                                            <div class="description">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card_body">

                                        There are various online platforms where you can purchase private proxies. Specialized proxy providers, marketplaces, and reseller websites are examples. Vosov offers private dedicated proxies for a variety of purposes.
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide_card">
                                    <div class="card_header">
                                        <div class="image">
                                            <img src="../assets/images/index/services_2 5.svg" alt="">
                                        </div>
                                        <div class="card_texts">
                                            <div class="title">
                                                How do private proxies work?
                                            </div>
                                            <div class="description">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card_body">
                                        Private proxies act as intermediaries that route your online traffic through a different IP address. When you send a request through a private proxy, it masks your original IP. It provides anonymity and the ability to access geo-exclusive content.
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide_card">
                                    <div class="card_header">
                                        <div class="image">
                                            <img src="../assets/images/index/services_2 6.svg" alt="">
                                        </div>
                                        <div class="card_texts">
                                            <div class="title">
                                                My target is not in the dropdown. Do you support it?
                                            </div>
                                            <div class="description">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card_body">
                                        Our “General” proxies work with all HTTP and HTTP websites. You can try selecting it and if it doesn’t work, you can contact our support team. We’ll help find the right proxies for you or we’ll give you a full refund.
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide_card">
                                    <div class="card_header">
                                        <div class="image">
                                            <img src="../assets/images/index/services_2_7.svg" alt="">
                                        </div>
                                        <div class="card_texts">
                                            <div class="title">
                                                Are my proxies shared with other users?
                                            </div>
                                            <div class="description">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card_body">
                                        No, all our proxies are private and exclusive to one user. They are not shared with anyone else.
                                    </div>

                                </div>
                            </div>

                        </div>
                    <?php else : ?>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slide_card">
                                    <div class="card_header">
                                        <div class="image">
                                            <img src="../assets/images/index/services_2 1.svg" alt="">
                                        </div>
                                        <div class="card_texts">
                                            <div class="title">
                                                Что такое приватный прокси?
                                            </div>
                                            <div class="description">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card_body">
                                        Частный прокси — это выделенный IP-адрес, назначенный исключительно одному пользователю. Эта эксклюзивность обеспечивает повышенную безопасность, надежность и лучшую производительность по сравнению с общими прокси. Они предлагают пользователю более широкие возможности управления и настройки, что делает их подходящими для конкретных требований. Некоторые примеры — задачи в социальных сетях и сбор данных.
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide_card">
                                    <div class="card_header">
                                        <div class="image">
                                            <img src="../assets/images/index/services_2 2.svg" alt="">
                                        </div>
                                        <div class="card_texts">
                                            <div class="title">
                                                Как получить приватные прокси?
                                            </div>
                                            <div class="description">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card_body">
                                        Просто выберите количество необходимых вам прокси, целевые веб-сайты и предпочтительное местоположение. После завершения процесса оформления заказа вам будет отправлено письмо с активацией. В этом электронном письме содержится ваша учетная запись прокси, где вы можете получить доступ к своим частным прокси.
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide_card">
                                    <div class="card_header">
                                        <div class="image">
                                            <img src="../assets/images/index/services_2 3.svg" alt="">
                                        </div>
                                        <div class="card_texts">
                                            <div class="title">
                                                Как настроить приватные прокси?
                                            </div>
                                            <div class="description">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card_body">
                                        Настроить прокси Восова несложно. После входа в свою учетную запись прокси авторизуйте свой IP. Как только он будет авторизован, вы сможете начать использовать его в предпочитаемом вами браузере, устройстве или инструменте. Вы можете посетить нашу страницу руководств для получения полных инструкций!
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide_card">
                                    <div class="card_header">
                                        <div class="image">
                                            <img src="../assets/images/index/services_2 4.svg" alt="">
                                        </div>
                                        <div class="card_texts">
                                            <div class="title">
                                                Где купить приватные прокси?
                                            </div>
                                            <div class="description">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card_body">

                                        Существуют различные онлайн-платформы, на которых можно приобрести приватные прокси. Примерами могут служить специализированные прокси-провайдеры, торговые площадки и веб-сайты реселлеров. Восов предлагает частные выделенные прокси для различных целей.
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide_card">
                                    <div class="card_header">
                                        <div class="image">
                                            <img src="../assets/images/index/services_2 5.svg" alt="">
                                        </div>
                                        <div class="card_texts">
                                            <div class="title">
                                                Как работают частные прокси?
                                            </div>
                                            <div class="description">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card_body">
                                        Частные прокси действуют как посредники, которые направляют ваш онлайн-трафик через другой IP-адрес. Когда вы отправляете запрос через частный прокси, он маскирует ваш исходный IP-адрес. Он обеспечивает анонимность и возможность доступа к геоэксклюзивному контенту.
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide_card">
                                    <div class="card_header">
                                        <div class="image">
                                            <img src="../assets/images/index/services_2 6.svg" alt="">
                                        </div>
                                        <div class="card_texts">
                                            <div class="title">
                                                Моей цели нет в раскрывающемся списке. Вы поддерживаете это?
                                            </div>
                                            <div class="description">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card_body">
                                        Наши «Общие» прокси работают со всеми HTTP- и HTTP-сайтами. Вы можете попробовать выбрать его, и если он не сработает, вы можете обратиться в нашу службу поддержки. Мы поможем подобрать вам подходящие прокси или вернем вам полный возврат средств.
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide_card">
                                    <div class="card_header">
                                        <div class="image">
                                            <img src="../assets/images/index/services_2_7.svg" alt="">
                                        </div>
                                        <div class="card_texts">
                                            <div class="title">
                                                Доступны ли мои прокси другим пользователям?
                                            </div>
                                            <div class="description">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card_body">
                                        Нет, все наши прокси являются частными и эксклюзивными для одного пользователя. Они не делятся ни с кем другим.
                                    </div>

                                </div>
                            </div>

                        </div>
                    <?php endif; ?>
                    <div class="navigation">
                        <div class="prev">
                            <svg width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="21.5" cy="21.5" r="21.5" fill="white" />
                                <path d="M27 33.4803L17 23.474L27 13.4676" stroke="#4154F1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="next">
                            <svg width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="21.5" cy="21.5" r="21.5" fill="white" />
                                <path d="M18 13.4677L28 23.474L18 33.4803" stroke="#4154F1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="service_bg">
        <img src="../assets/images/service/service_bg.svg" alt="">
    </div>
</section>

<?php require VIEWS . '/inc/footer.php'; ?>