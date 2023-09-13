<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/images/index/favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="../assets/libs/izitoast/css/iziToast.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <title>Vosov - Contacts</title>
</head>
<body>
    <div class="site-preloader" id="site-preloader">
        <div class="loader-wrap">
            <div class="ring">
                <span></span>
            </div>
        </div>
        <h2>Vosov</h2>
    </div>
    <!-- WRAPPER -->
    <div class="wrapper">
        <!-- HEADER -->
        <header>
            <div class="container">
                <div class="header_row">
                    <span class="hamburger">
                        <img src="../assets/images/index/hamburger.svg" alt="">
                    </span>
                    <a href="/en" class="logo">
                        <img src="../assets/images/index/logo.png" alt="">
                    </a>
                    <nav>
                        <ul class="header_menu">
                            <li>
                                <a href="/en">HOME</a>
                            </li>
                            <li>
                                <a href="team">OUR TEAM</a>
                            </li>
                            <li>
                                <a href="service">SERVICES</a>
                            </li>
                            <li>
                                <a href="contacts">CONTACTS</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="right_block">
                        <div class="contacts">
                            <a href="#" class="wechat"><img src="../assets/images/index/wechat.png" alt=""></a>
                            <a href="#"><img src="../assets/images/index/telegram.png" alt=""></a>
                        </div>
                        <div class="langeage_switch">
                            <a href="/contacts" class="chinese">中文</a>
                            <a href="/en/contacts">en</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- HAMBURGER MENU -->
        <div class="hamburger_menu">
            <div class="close_icon">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.84912 23.4056L23.4055 7.84929" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M7.84912 7.84924L23.4055 23.4056" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <div class="hamburger_row">
                <ul class="hamburger_menu_list">
                    <li>
                        <a href="/en">HOME </a>
                    </li>
                    <li>
                        <a href="team">OUR TEAM </a>
                    </li>
                    <li>
                        <a href="service">SERVICES </a>
                    </li>
                    <li>
                        <a href="contacts">CONTACTS </a>
                    </li>
                </ul>
                <div class="contacts">
                    <a href="#" class="wechat"><img src="../assets/images/index/wechat.png" alt=""></a>
                    <a href="#"><img src="../assets/images/index/telegram.png" alt=""></a>
                </div>
            </div>
        </div>
        <main>
            <!-- BREADCRUMB -->
            <div class="breadcrumb">
                <div class="container">
                    <div class="section_title"> CONTACTS </div>
                    <div class="breadcrumb_list">
                        <ul>
                            <li>
                                <a href="/en">HOME</a>
                            </li>
                            <li> CONTACTS </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- SECTION CONTACTS -->
            <section class="page_contacts">
                <div class="container">
                    <div class="contacts_row">
                        <div class="left_card">
                            <div class="card_row">
                                <div class="card_header">
                                    <div class="section_title"> Office Location </div>
                                    <div class="address">
                                        <p>Bolshaya Novodmitrovskaya st., 36</p>
                                        <p>Moscow, Russia,</p>
                                        <p>Flacon</p>
                                    </div>
                                </div>
                                <div class="card_footer">
                                    <div class="section_title"> Contacts </div>
                                     <div class="address">
                                        <p>whatsApp:+79370922000</p>
                                        <p>Telegram: @matevosov</p>
                                        <p>weСhat ID: Matevosov134</p>
                                       <p>Email:  mate@vosov.me</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right_card">
                            <div class="card_header">
                                <div class="small_title"> Need help? </div>
                                <div class="section_title">Let's ask your questions</div>
                            </div>
                            <form action="send.php" method="post" id="order_form">
                                <input type="hidden" name="form_type" value="contacts_form">
                                <input type="text" placeholder="Name" name="name" required>
                                <div class="input_row">
                                    <input type="email" placeholder="Email" name="email">
                                    <input type="phone" placeholder="Phone" name="phone" required>
                                </div>
                                <textarea placeholder="Comment" name="title"></textarea>
                                <button>Send Massage</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="overlay">
                    <img src="../assets/images/contacts/mobile_bg.svg" alt="">
                </div>
            </section>
            <!-- SECTON MAP -->
            <section class="map">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8ac0cded6f9830a9c4f651134993269854a68b4d6f21a0365048ba00418eca2f&amp;width=100%25&amp;height=480&amp;lang=ru_RU&amp;scroll=false"></script>           
             </section>
            <!-- FOOTER -->
            <footer class="contacts_footer">
                <svg xmlns="http://www.w3.org/2000/svg" class="gray" preserveAspectRatio="none" viewBox="0 0 1070 52">
                    <path d="M0,0S247,91,505,32c261.17-59.72,565-13,565-13V0Z" fill="white"></path>
                </svg>
                <div class="container">
                    <div class="footer_row">
                        <div class="footer_actions">
                            <div class="logo">
                                <img src="../assets/images/index/footer_logo.png" alt="">
                            </div>
                            <div class="contacts">
                                
                                <a href="#">whatsApp: <span>+79370922000</span></a>
                              <a href="#">Telegram: <span>@matevosov</span></a>
                                <a href="#">weСhat ID: <span>Matevosov134</span></a>
                              <a href="#">Email: <span>mate@vosov.me</span></a>

                            </div>
                        </div>
                        <div class="footer_menu">
                            <div class="menu_title"> Company </div>
                            <ul>
                                  <li>
                                <a href="/en">Home</a>
                            </li>
                            <li>
                                <a href="team">Our team</a>
                            </li>
                            <li>
                                <a href="service">Service</a>
                            </li>
                            <li>
                                <a href="contacts">Contacts</a>
                            </li>
                            </ul>
                        </div>
                        <div class="qr_code">
                            <img src="../assets/images/index/qr_code.svg" alt="">
                        </div>
                    </div>
                </div>
            </footer>
        </main>
        <div class="modal_overlay"></div>
    </div>
  <script> 
(function(doc, scr, id) { var js, fjs = doc.getElementsByTagName(scr)[0]; if (doc.getElementById(id)) return; js = doc.createElement(scr); js.id = id; js.src = 'https://contactus.nikba.com/contactus.min.js?v=1.98'; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'contactus-sdk')); 
</script> 
<div id="contactus" call="" call-label="" viber="" viber-label="" whatsapp="+79370922000" whatsapp-label="" facebook="" facebook-label="" telegram="matevosov" telegram-label="" title="需要帮助吗？ 联系我们！!" position="" ></div>
  <script> 
(function(doc, scr, id) { var js, fjs = doc.getElementsByTagName(scr)[0]; if (doc.getElementById(id)) return; js = doc.createElement(scr); js.id = id; js.src = 'https://contactus.nikba.com/contactus.min.js?v=1.98'; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'contactus-sdk')); 
</script> 
<div id="contactus" call="" call-label="" viber="" viber-label="" whatsapp="+79370922000" whatsapp-label="" facebook="" facebook-label="" telegram="matevosov" telegram-label="" title="Need help? Contact us!" position="" ></div>
    <script src="../assets/libs/jquery/jquery-3.6.3.min.js"></script>
    <script src="../assets/libs/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/libs/jquery-nice-select-1.1.0/js/jquery.nice-select.js"></script>
    <script src="../assets/libs/izitoast/js/iziToast.min.js"></script>
    <script src="../assets/js/scripts.js"></script>
</body>
</html>