<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROOMLY</title>
    <link rel="stylesheet" href="../../ cs/reset.css">
    <link rel="stylesheet" href="css/apartaments.css">
    <link rel="stylesheet" href="../air-datepicker.css">
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
                        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Бронирование</button>

                        <div id="id01" class="modal">
                            
                            <form class="modal-content animate" action="/action_page.php">

                                <div class="container">
                                <label for="uname"><b>Username</b></label>
                                <input type="text" placeholder="Enter Username" name="uname" required>

                                <label for="psw"><b>Password</b></label>
                                <input type="password" placeholder="Enter Password" name="psw" required>
                                    
                                <button type="submit">Login</button>
                                </div>

                                <div class="container" style="background-color:#f1f1f1">
                                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                                <span class="psw">Forgot <a href="#">password?</a></span>
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

       <!-- Title start -->
       <section class="title">
        <div class="numbers_title">
            <h3 class="numbers-title">Номера и цены</h3>
        </div>
       </section>
       <!-- Title end -->

       <!-- Search start -->
       <section class="search">
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
       </section>
       <!-- Search end -->

       <!-- Numbers start -->
       <section class="numbers">
        <div class="wrapper_numbers">
            <div class="numbers_cards">
                <div class="numbers_card">
                    <div class="numbers_card_pic">
                        <img src="./img/standart_main.jpeg" alt="Standart" class="numbers_pic">
                    </div>
                    <div class="numbers_card_info">
                        <p class="numbers_info_name">Стандартный номер</p>
                        <p class="numbers_info_prise">От 339,9 BYN за сутки</p>
                        <p class="numbers_info_info">Просторный однокомнатный номер располагает всем необходимым для комфортного размещения в самом центре Минска. Солнечные и светлые Стандартные номера декорированы мебелью в классическом стиле. Ванные комнаты оборудованы отдельной ванной и душевой кабиной, гостям предлагаются все необходимые банные принадлежности.</p>
                    </div>
                    <div class="numbers_info_more">
                        <a href="" class="number_button_booking">ЗАБРОНИРОВАТЬ</a>
                        <a href="./apartament/standart.php" class="numbers_button_more">ПОДРОБНЕЕ</a>
                    </div>
                </div>

                <div class="numbers_card">
                    <div class="numbers_card_pic">
                        <img src="./img/delux.jpeg" alt="Delux" class="numbers_pic">
                    </div>
                    <div class="numbers_card_info">
                        <p class="numbers_info_name">Делюкс</p>
                        <p class="numbers_info_prise">От 365,9 BYN за сутки</p>
                        <p class="numbers_info_info">Комфортабельный однокомнатный номер Делюкс с видом на парк располагает всем необходимым для размещения в самом центре Минска. Делюксы декорированы мебелью в классическом стиле. Ванные комнаты оборудованы отдельной ванной и душевой кабиной, гостям предлагаются все необходимые банные принадлежности.</p>
                    </div>
                    <div class="numbers_info_more">
                        <a href="" class="number_button_booking">ЗАБРОНИРОВАТЬ</a>
                        <a href="./apartament/delux.php" class="numbers_button_more">ПОДРОБНЕЕ</a>
                    </div>
                </div>

                <div class="numbers_card">
                    <div class="numbers_card_pic">
                        <img src="./img/family2.jpeg" alt="Family" class="numbers_pic">
                    </div>
                    <div class="numbers_card_info">
                        <p class="numbers_info_name">Семейный полулюкс</p>
                        <p class="numbers_info_prise">От 563,9 BYN за сутки</p>
                        <p class="numbers_info_info">Просторный cемейный полулюкс отлично подойдет для комфортного размещения семьи до 4 человек в зависимости от возраста детей в тихом центре Минска. В семейном номере отеля «ROOMLY» есть все, что необходимо вашим детям, от детских зубных щеток до детского стульчика-подставки для умывания.</p>
                    </div>
                    <div class="numbers_info_more">
                        <a href="" class="number_button_booking">ЗАБРОНИРОВАТЬ</a>
                        <a href="./apartament/family.php" class="numbers_button_more">ПОДРОБНЕЕ</a>
                    </div>
                </div>

                <div class="numbers_card">
                    <div class="numbers_card_pic">
                        <img src="./img/business.jpeg" alt="Business" class="numbers_pic">
                    </div>
                    <div class="numbers_card_info">
                        <p class="numbers_info_name">Бизнес-номер</p>
                        <p class="numbers_info_prise">От 456,9 BYN за сутки</p>
                        <p class="numbers_info_info">Просторный бизнес номер идеально подойдет для ваших деловых поездок в Минск. Благодаря удобному расположению отеля «ROOMLY», вы без труда сможете попасть в центр Минска и его бизнес кварталы. Бизнес номера оборудованы всем необходимым для комфортабельного размещения деловых людей. Некоторые номера данной категории имеют балкон.</p>
                    </div>
                    <div class="numbers_info_more">
                        <a href="" class="number_button_booking">ЗАБРОНИРОВАТЬ</a>
                        <a href="./apartament/business.php" class="numbers_button_more">ПОДРОБНЕЕ</a>
                    </div>
                </div>

                <div class="numbers_card">
                    <div class="numbers_card_pic">
                        <img src="./img/lux.jpeg" alt="Lux" class="numbers_pic">
                    </div>
                    <div class="numbers_card_info">
                        <p class="numbers_info_name">Люкс</p>
                        <p class="numbers_info_prise">От 1068,0 BYN за сутки</p>
                        <p class="numbers_info_info">Элегантный двухкомнатный люкс с гостиной и уютной спальней идеально подойдет для комфортного размещения в самом центре Минска. Со вкусом оформленная гостиная c центральной диванной зоной для отдыха дополнительно оборудована письменным столом. В спальне расположены кровать размера king и отдельная просторная гардеробная.</p>
                    </div>
                    <div class="numbers_info_more">
                        <a href="" class="number_button_booking">ЗАБРОНИРОВАТЬ</a>
                        <a href="./apartament/lux.php" class="numbers_button_more">ПОДРОБНЕЕ</a>
                    </div>
                </div>

                <div class="numbers_card">
                    <div class="numbers_card_pic">
                        <img src="./img/prez_lux.jpeg" alt="Prez lux" class="numbers_pic">
                    </div>
                    <div class="numbers_card_info">
                        <p class="numbers_info_name">Президентский люкс</p>
                        <p class="numbers_info_prise">От 5473,9 BYN за сутки</p>
                        <p class="numbers_info_info">Президентский люкс «ROOMLY», расположенный на седьмом этаже гостиницы, предлагает своим гостям неподражаемую обстановку с высокими потолками, большими окнами и элегантной мебелью. Президентский люкс включает две спальни, просторную гостиную с обеденной зоной и террасой. Люкс идеально подойдет для размещения делегации, а также отдыха всей семьей.</p>
                    </div>
                    <div class="numbers_info_more">
                        <a href="" class="number_button_booking">ЗАБРОНИРОВАТЬ</a>
                        <a href="./apartament/prez_lux.php" class="numbers_button_more">ПОДРОБНЕЕ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Numbers end -->

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
                        <a href="apartaments.php" class="footer_link">Номера и цены</a>
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

    <script src="/html/airdatepecker/air-datepicker.js"></script>

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