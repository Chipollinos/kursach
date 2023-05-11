<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROOMLY</title>
    <link rel="stylesheet" href="../../ cs/reset.css">
    <link rel="stylesheet" href="css/registration.css">
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
                                <a href="../../about/about.php" class="header_link">Об отеле</a>
                            </li>
                            <li class="header_item">
                                <a href="../apartaments.php" class="header_link">Номера и цены</a>
                            </li>
                            <li class="header_item">
                                <a href="../../restaurants/restaurants.php" class="header_link">Рестораны и бары</a>
                            </li>
                            <li class="header_item">
                                <a href="../../simulators/simulators.php" class="header_link">Спа и фитнес</a>
                            </li>
                            <li class="header_item">
                                <a href="../../services/services.php" class="header_link">Услуги</a>
                            </li>
                        </ul>
                    </nav>
    
                    <div class="header_booking">
                        <a href="/" class="header_booking-link">
                            <h1>БРОНИРОВАНИЕ</h1>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header end -->

    <main class="main">
   
        <!-- Registration form start-->
        <section class="registration">
            <div class="container">
                <h1 class="title">Регистрация</h1>
                <p>Пожалуйста, заполните эту форму, чтобы создать учетную запись.</p>
                <hr>
                <form action="check.php" method="post">

                    <label for="psw"><b>Ваше имя</b></label>
                    <input type="text" placeholder="Enter name" name="name_user" required>

                    <label for="login"><b>Логин</b></label>
                    <input type="text" placeholder="Enter login" name="login" required>
                
                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" required>
                
                    <label for="psw"><b>Пароль</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>
                
                    <label for="psw-repeat"><b>Повторите пароль</b></label>
                    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                    <hr>

                    <button type="submit" class="registerbtn">Регистрация</button>
                </form>
              </div>
        </section>
        <!-- Registration form end-->

    </main>
    <footer class="footer">
        <div class="wrapper_full">
            <h3 class="footer_title">Отель «ROOMLY»</h3>
            <nav class="footer_nav">
                <ul class="footer_list">
                    <li class="footer_item">
                        <a href="../../about/about.php" class="footer_link">Об отеле</a>
                    </li>
                    <li class="footer_item">
                        <a href="../apartaments/apartaments.php" class="footer_link">Номера и цены</a>
                    </li>
                    <li class="footer_item">
                        <a href="../../restaurants/restaurants.php" class="footer_link">Рестораны и бары</a>
                    </li>
                    <li class="footer_item">
                        <a href="../../simulators/simulators.php" class="footer_link">Спа и фитнес</a>
                    </li>
                    <li class="footer_item">
                        <a href="../../services/services.php" class="footer_link">Услуги</a>
                    </li>
                    <li class="footer_item">
                        <a href="../../pay_card/pay_card.php" class="footer_link">Как оплачивать картой?</a>
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
</body>
</html>