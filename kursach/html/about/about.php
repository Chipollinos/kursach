<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROOMLY</title>
    <link rel="stylesheet" href="../../ cs/reset.css">
    <link rel="stylesheet" href="css/about.css">
</head>
<body>
    <!-- Header start -->
    <header class="header">
        <div class="other_header">
            <div class="wrapper">
                <nav class="header_nav">
                    <ul class="header_list">
                        <li class="other_header_item">
                            Ул. Якуба Коласа 28, г. Минск, Беларусь
                        </li>
                        <li class="other_header_item">
                            psudnikovic@gmail.com
                        </li>
                        <li class="other_header_item">
                            +375 25 774-75-28
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="wrapper">
            <div class="main_header">
                <div class="header_wrapper">
                    <div class="header_logo">
                        <a href="../main/main.php" class="header_logo-link">
                            <h1>ROOMLY</h1>
                        </a>
                    </div>
        
                    <nav class="header_nav">
                        <ul class="header_list">
                            <li class="header_item">
                                <a href="about.php" class="header_link">Об отеле</a>
                            </li>
                            <li class="header_item">
                                <a href="../apartaments/apartaments.php" class="header_link">Номера и цены</a>
                            </li>
                            <li class="header_item">
                                <a href="../restaurants/restaurants.php" class="header_link">Рестораны и бары</a>
                            </li>
                            <li class="header_item">
                                <a href="../simulators/simulators.php" class="header_link">Спа и фитнес</a>
                            </li>
                            <li class="header_item">
                                <a href="../services/services.php" class="header_link">Услуги</a>
                            </li>
                        </ul>
                    </nav>
    
                    <div class="header_booking">
                    <?php
                            if($_COOKIE['user'] == ''): 
                        ?>
                        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="header_booking-link">Бронирование</button>

                        <div id="id01" class="modal">

                            <form class="modal-content animate" action="../authefication/auth_user.php" method="post">

                                <div class="container">
                                    <label for="uname"><b>Логин</b></label>
                                    <input type="text" placeholder="Enter login" name="login" required>

                                    <label for="psw"><b>Пароль</b></label>
                                    <input type="password" placeholder="Enter Password" name="psw" required>
                                        
                                    <button type="submit">Login</button>
                                </div>

                                <div class="container" style="background-color:#f1f1f1">
                                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                                <span class="psw">Зарегистироваться можно <a href="../registration/registration.php">здесь</a></span>
                                </div>
                            </form>
                        </div>
                        <?php else: ?>
                            <div class="header_booking">
                                <a href="../authefication/exit_user.php" class="header_booking-link">
                                    <h1>Выход</h1>
                                </a>
                            </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header end -->

    <main class="main">
        <!-- About img start -->
       <section class="about_img">
            <div class="wrapper_full">
                <div class="about_sm_img">
                    <img src="img/about_fitness.jpeg" alt="Fitness" class="sm_img">
                    <img src="img/about_spa.jpeg" alt="Spa" class="sm_img">
                    <img src="img/about_reception.jpeg" alt="Reception" class="sm_img">
                </div>
                <div class="about_main_img">
                    <img src="img/about_restaurant.jpeg" alt="Reception" class="lg_img">
                </div>
            </div>
       </section>
       <!-- About img end -->

       <!-- Information start -->
       <section class="information">
        <div class="wrapper_full">
            <div class="information_main">
                <div class="main_text">
                    <h3 class="information_title">Об отеле «ROOMLY»</h3>
                    <p>Отель «ROOMLY» в центре Минска - это современный отель 5 звезд бизнес-класса, который входит в китайскую сеть отелей BTG-Jianguo Hotels & Resorts. На официальном сайте можно забронировать один из 180 уютных номеров различных категорий от стандарта до президентского люкса.</p>
                    <p>Отель «ROOMLY» - лучший отель Беларуси 2018, 2019 и 2020 в номинации World Travel Awards.</p>
                    <p>Отель находится в живописной парковой зоне на берегу реки Свислочь недалеко от центра города Минска. Особенностью гостиничного комплекса является гармоничное сочетание китайских традиций и европейского комфорта с высоким уровнем обслуживания. В отеле есть уникальный ресторан аутентичной китайской кухни в исполнении профессиональной команды поваров из Китая. Кроме этого к услугам гостей работает кафе европейской кухни, лобби-бар, СПА и фитнес-центр, салон красоты и казино, круглосуточный обменный пункт и банкомат.</p>
                    <p>Для всех гостей на территории отеля работает бесплатный WI-FI. Постояльцам бесплатно предоставляются услуги СПА и фитнес-центра, на территории которого расположена детская игровая комната для маленьких гостей отеля.</p>
                    <p>Отель предоставляет широкий спектр услуг для проведения бизнес-мероприятий. Конференц-залы различной площади позволяют организовать деловые встречи и банкетные мероприятия в центре Минска. Залы отеля легко трансформируются и подходят для проведения фуршета, банкета и корпоратива на любое количество гостей. Также в отеле возможно проведение масштабных мероприятий, таких как пышная свадьба или показ мод.</p>
                    <p style="font-weight: bold;">О конфиденциальности и защите персональных данных</p>
                    <p>Мы стремимся уважать информацию личного характера, касающуюся наших клиентов. На нашем сайте размещено Положение об обработке и защите персональных данных, которое разработано во исполнение требований Закона Республики Беларусь от 07.05.2021 № 99-З «О защите персональных данных» в целях обеспечения защиты прав и свобод человека и гражданина при обработке его персональных данных, в том числе защиты прав на неприкосновенность частной жизни, личной и семейной тайны. В данном документе разъяснены некоторые меры, которые мы предпринимаем для защиты вашей частной жизни.</p>
                </div>
                <div class="information_cards">
                    <figure class="information_card information_card_size">
                        <img src="img/business.jpeg" alt="Business" class="information_card_pic">
                        <figcaption class="information_card_title">
                            Номера и цены
                        </figcaption>
                        <a href="../apartaments/apartaments.html" class="information_card_link"></a>
                    </figure>

                    <figure class="information_card information_card_size">
                        <img src="img/rectaurant2.jpeg" alt="Restaurant" class="information_card_pic">
                        <figcaption class="information_card_title">
                            Рестораны и бары
                        </figcaption>
                        <a href="../restaurants/restaurants.html" class="information_card_link"></a>
                    </figure>
                </div>
            </div>
        </div>
       </section>
    </main>

    <!-- Footer start -->
    <footer class="footer">
        <div class="wrapper_full">
            <h3 class="footer_title">Отель «ROOMLY»</h3>
            <nav class="footer_nav">
                <ul class="footer_list">
                    <li class="footer_item">
                        <a href="about.php" class="footer_link">Об отеле</a>
                    </li>
                    <li class="footer_item">
                        <a href="../apartaments/apartaments.php" class="footer_link">Номера и цены</a>
                    </li>
                    <li class="footer_item">
                        <a href="../restaurants/restaurants.php" class="footer_link">Рестораны и бары</a>
                    </li>
                    <li class="footer_item">
                        <a href="../simulators/simulators.php" class="footer_link">Спа и фитнес</a>
                    </li>
                    <li class="footer_item">
                        <a href="../services/services.php" class="footer_link">Услуги</a>
                    </li>
                    <li class="footer_item">
                        <a href="../pay_card/pay_card.php" class="footer_link">Как оплачивать картой?</a>
                    </li>
                    <li class="footer_item">
                        <a href="#!" class="footer_link">БРОНИРОВАНИЕ</a>
                    </li>
                </ul>
            </nav>
            <div class="footer_end">
                <p class="footer_name">Отель «ROOMLY» | © 2020 Официальный сайт</p>
                <p class="footer_name">Отель «ROOMLY» находится под управлением компании BTG-JIANGUO Hotels Resorts</p>
            </div>
        </div>
        <div class="footer_card">
            <div class="footer_pic">
                <img src="footer-img/visa.jpeg" alt="Visa" class="footer_img">
            </div>
            <div class="footer_pic">
                <img src="footer-img/mastercard.png" alt="Mastercard" class="footer_img">
            </div>
            <div class="footer_pic">
                <img src="footer-img/belkart.png" alt="Belcard" class="footer_img">
            </div>
            <div class="footer_pic">
                <img src="footer-img/mir.jpeg" alt="Mir" class="footer_img">
            </div>
            <div class="footer_pic">
                <img src="footer-img/raschet.png" alt="Raschet" class="footer_img">
            </div>
            <div class="footer_pic">
                <img src="footer-img/travelsoft.png" alt="Tarvelsoft" class="footer_img">
            </div>
            <div class="footer_pic">
                <img src="footer-img/UnionPay.png" alt="UnionPay" class="footer_img">
            </div>
        </div>
    </footer>
    <!-- Footer end -->

    <script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
    </script>
</body>
</html>