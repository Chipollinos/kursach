<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROOMLY</title>
    <link rel="stylesheet" href="../../ cs/reset.css">
    <link rel="stylesheet" href="../main/css/main.css">
    <link rel="stylesheet" href="../airdatepecker/air-datepicker.css">
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
                        <a href="main.php" class="header_logo-link">
                            <h1>ROOMLY</h1>
                        </a>
                    </div>
        
                    <nav class="header_nav">
                        <ul class="header_list">
                            <li class="header_item">
                                <a href="../about/about.php" class="header_link">Об отеле</a>
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
                        <a onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="header_booking-link">Бронирование</a>

                        <div id="id01" class="modal">
                        
                            <form class="modal-content animate" action="../authefication/auth_user.php" method="post">
                                <div class="imgcontainer">
                                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                                </div>

                                <div class="container">
                                <label for="uname"><b>Логин</b></label>
                                <input type="text" placeholder="Enter login" name="login" required>

                                <label for="psw"><b>Пароль</b></label>
                                <input type="password" placeholder="Enter Password" name="psw" required>
                                    
                                <button type="submit">Login</button>
                                <label>
                                    <input type="checkbox" checked="checked" name="remember"> Remember me
                                </label>
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

        <!-- Intro start -->

        <!-- <section class="intro">
            <div class="img"></div>
            <div class="intro_search">
                <div class="intro_cards">
                    <div class="intro_card">
                        <p>Дата заезда</p>
                        <div class="intro_calendar">
                            <input type="text" id="airdatepicker-1" class="form-control">
                        </div>
                    </div>
                    <div class="intro_card">
                        <p>Дата выезда</p>
                        <div class="intro_calendar">
                            <input type="text" id="airdatepicker-2" class="form-control">
                        </div>
                    </div>
                    <div class="intro_card">
                        <p>Гости</p>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Intro end -->

        <!-- About us start -->
        <section class="about">
            <div class="wrapper_full">
                <div class="about_card">
                    <div class="about_info">
                        <h3 class="about_title_card">
                            Об отеле «ROOMLY»
                        </h3>
                        <p class="about_paragraf_card">
                            Отель «Roomly» в центре Минска - это современный отель 5 звезд бизнес-класса, который входит в китайскую сеть отелей BTG-Jianguo Hotels & Resorts. 
                        </p>
                        <br>
                        <p class="about_paragraf_card">
                            К Вашим услугам: 180 номеров различных категорий, ресторан китайской кухни, кафе европейской кухни, лобби-бар, спа и фитнес-центр, салон красоты и казино, обменный пункт и банкомат, бесплатная парковка. Вы можете забронировать номера различных категорий от стандарта до президентского люкса.
                        </p>
                    </div>

                    <div class="about_pic">
                        <img src="../main/img/about.jpeg" alt="Hostel" class="pic">
                    </div>
                </div>
            </div>
        </section>
        <!-- About us end -->

        <!-- Numbers start -->
        <section class="numbers">
            <div class="wrapper_numbers">
                <div class="numbers_title">
                    <h3 class="numbers-title">Номера</h3>
                </div>
                <div class="numbers_cards">
                    <div class="numbers_card">
                        <div class="numbers_card_pic">
                            <img src="../main/img/standart.jpeg" alt="Standart" class="numbers_pic">
                        </div>
                        <div class="numbers_card_info">
                            <p class="numbers_info_name">Стандартный номер</p>
                            <p class="numbers_info_prise">От 339,9 BYN за сутки</p>
                            <p class="numbers_info_info">Просторный однокомнатный номер располагает всем необходимым для комфортного размешения в самом центре Минска.</p>
                        </div>
                        <div class="numbers_info_more">
                            <a href="../apartaments/apartament/standart.php" class="numbers_button_more">ПОДРОБНЕЕ</a>
                        </div>
                    </div>

                    <div class="numbers_card">
                        <div class="numbers_card_pic">
                            <img src="../main/img/delux.jpeg" alt="Delux" class="numbers_pic">
                        </div>
                        <div class="numbers_card_info">
                            <p class="numbers_info_name">Делюкс</p>
                            <p class="numbers_info_prise">От 365,9 BYN за сутки</p>
                            <p class="numbers_info_info">Однокомнатный номер Делюкс с видом на парк располагает всем необходимым для размещения в самом центре Минска.</p>
                        </div>
                        <div class="numbers_info_more">
                            <a href="../apartaments/apartament/delux.php" class="numbers_button_more">ПОДРОБНЕЕ</a>
                        </div>
                    </div>

                    <div class="numbers_card">
                        <div class="numbers_card_pic">
                            <img src="../main/img/family.jpeg" alt="Family" class="numbers_pic">
                        </div>
                        <div class="numbers_card_info">
                            <p class="numbers_info_name">Семейный полулюкс</p>
                            <p class="numbers_info_prise">От 563,9 BYN за сутки</p>
                            <p class="numbers_info_info">Просторный семейный полулюкс отлично подойдет для комфортного размещения семьи до 4 человек в зависимости от возраста детей.</p>
                        </div>
                        <div class="numbers_info_more">
                            <a href="../apartaments/apartament/family.php" class="numbers_button_more">ПОДРОБНЕЕ</a>
                        </div>
                    </div>

                    <div class="numbers_card">
                        <div class="numbers_card_pic">
                            <img src="../main/img/business.jpeg" alt="Business" class="numbers_pic">
                        </div>
                        <div class="numbers_card_info">
                            <p class="numbers_info_name">Бизнес-номер</p>
                            <p class="numbers_info_prise">От 456,9 BYN за сутки</p>
                            <p class="numbers_info_info">Просторный бизнес номер идеально подойдет для наших деловых поездок к Минск. <br><br></p>
                        </div>
                        <div class="numbers_info_more">
                            <a href="../apartaments/apartament/business.php" class="numbers_button_more">ПОДРОБНЕЕ</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Numbers end -->

        <!-- Info start -->
        <section class="info">
            <div class="wrapper_full">
                <div class="info_full">
                    <div class="info_information">
                        <h3 class="info_title">Отель «ROOMLY»</h3>
                        <p class="info_paragraf">
                            Лучший отель Беларуси 2018-2022 в номинации World Travel Awards. 
                            Его особенностью является гармоничное сочетание китайских традиций и европейского комфорта.
                        </p>
                        <h3 class="info_title">
                            Почему стоит выбрать именно отель «ROOMLY»:
                        </h3>
                        <ul class="info_list">
                            <li class="info_list_bold">Хорошее расположение</li>
                            <p>Отель находится в 1,5 км от центра Минска</p>
                            <li class="info_list_bold">Близость вокзала и метро</li>
                            <p>От минского центрального ж/д вокзала всего 20 минут, </p>
                            <p>от ст. метро «Академия наук» – 5 минут</p>
                            <li class="info_list_bold">Исторические достопримечательности</li>
                            <p>В шаговой доступности располагаются памятники архитектуры города Минска</p>
                            <li class="info_list_bold">Китайская кухня от шеф-повара из Поднебесной</li>
                            <p>Уникальный ресторан аутентичной китайской кухни «Сезоны» с </p>
                            <p>профессиональной командой поваров из Китая</p>
                            <li class="info_list_bold">Бесплатные услуги спа и фитнес-центра для постояльцев отеля</li>
                            <li class="info_list_bold">Бесплатный Wi-Fi</li>
                            <li class="info_list_bold">Детская игровая комната для маленьких гостей отеля</li>
                        </ul>
                        <p class="info_paragraf">Отель предоставляет широкий спектр услуг для проведения бизнес-мероприятий. Конференц-залы различной площади позволяют организовать деловые встречи и банкетные мероприятия в центре Минска. Залы отеля легко трансформируются и подходят для проведения фуршета, банкета и корпоратива на любое количество гостей. Также в отеле возможно проведение масштабных мероприятий, таких как пышная свадьба или показ мод.</p>
                        <h3 class="info_title">
                            О конфиденциальности и защите персональных данных
                        </h3>
                        <p class="info_paragraf">Мы стремимся уважать информацию личного характера, касающуюся наших клиентов. На нашем сайте размещено Положение об обработке и защите персональных данных, которое разработано во исполнение требований Закона Республики Беларусь от 07.05.2021 № 99-З «О защите персональных данных» в целях обеспечения защиты прав и свобод человека и гражданина при обработке его персональных данных, в том числе защиты прав на неприкосновенность частной жизни, личной и семейной тайны. В данном документе разъяснены некоторые меры, которые мы предпринимаем для защиты вашей частной жизни.</p>
                        <br>
                        <p class="info_paragraf">С Положением о конфиденциальности можно ознакомиться путем нажатия на гипертекстовую ссылку: "Положение об обработке и защите персональных данных".</p>
                    </div>
                    <div class="info_map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d593.4743978899787!2d27.593791575615978!3d53.92565604263606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbcf095840a8a3%3A0x74724d3d8e812c70!2z0J7QsdGJ0LXQttC40YLQuNC1IOKEljEg0JHQk9Cj0JjQoA!5e0!3m2!1sru!2sby!4v1681650161631!5m2!1sru!2sby" width="550" height="1390" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    </div>
                </div>
            </div>
        </section>
        <!-- Info end -->
    </main>
    <footer class="footer">
        <div class="wrapper_full">
            <h3 class="footer_title">Отель «ROOMLY»</h3>
            <nav class="footer_nav">
                <ul class="footer_list">
                    <li class="footer_item">
                        <a href="../about/about.php" class="footer_link">Об отеле</a>
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
                    <?php
                            if($_COOKIE['admin'] == ''): 
                        ?>
                        <a onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="header_booking-link">Админ</a>

                        <div id="id01" class="modal">
                        
                            <form class="modal-content animate" action="../authefication/auth_admin.php" method="post">
                                <div class="imgcontainer">
                                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                                </div>

                                <div class="container">
                                <label for="uname"><b>Логин</b></label>
                                <input type="text" placeholder="Enter login" name="login" required>

                                <label for="psw"><b>Пароль</b></label>
                                <input type="password" placeholder="Enter Password" name="psw" required>
                                    
                                <button type="submit">Login</button>
                                <label>
                                    <input type="checkbox" checked="checked" name="remember"> Remember me
                                </label>
                                </div>

                                <div class="container" style="background-color:#f1f1f1">
                                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                                <span class="psw">Зарегистироваться можно <a href="../registration/registration.php">здесь</a></span>
                                </div>
                            </form>
                        </div>
                        <?php else: ?>
                            <div class="header_booking">
                                <a href="../authefication/exit_admin.php" class="header_booking-link">
                                    <h1>Выход</h1>
                                </a>
                            </div>
                        <?php endif;?>
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

    <script src="../airdatepecker/air-datepicker.js"></script>

    <script>
    let dpMin, dpMax;

    dpMin = new AirDatepicker('#airdatepicker-1', {
        onSelect({date}) {
            dpMax.update({
                minDate: date
            })
        }
    })

    dpMax = new AirDatepicker('#airdatepicker-2', {
        onSelect({date}) {
            dpMin.update({
                maxDate: date
            })
        }
    })

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