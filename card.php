<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- <meta http-equiv="cache-control" content="no-cache"> -->
    <meta http-equiv="expires" content="0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" sizes="32x32" href="favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="Продажа более 100 видов чая(со всего мира). Кофе более 30 видов(со всего мира). Добавки, аксессуары.">
    <meta name="keywords" content="Продажа в Рогачеве чай, кофе россыпью со всего мира. Оптом и в розницу.">
    <link rel="preload" href="css/bootstrap.min.css" as="style">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preload" href="./css/style.css" as="style">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preload" href="./css/style2.css" as="style">
    <link rel="stylesheet" href="./css/style2.css">
    <title>Чайная лавка. Рогачев. Чай, кофе со всего мира. Оптом и в розницу.</title>
</head>
<body>
    <header>
        <div class="container">
            <div class='header-wrap'>
                <a href='index.php'><img class='logo-img' src='./img/logo.webp' title='Чайная лавка в Рогачеве' alt='Чайная лавка в Рогачеве' loading="lazy"></a>
                <div class='invk'>
                    <a href='https://www.instagram.com/chay_nayalavka/' class='in' target="_blank">
                        <img src='./img/in.svg' title='Чайная лавка в Рогачеве в инстаграмм' alt='Чайная лавка в Рогачеве в инстаграмм' loading="lazy">
                    </a>
                    <a href='viber://chat?number=%2B375256992780' class='viber'>
                        <img src='./img/viber.svg' title='Чайная лавка в Рогачеве в вайбере' alt='Чайная лавка в Рогачеве в вайбере' loading="lazy">
                    </a>
                    <a href='https://t.me/chay_nayalavka' class='tg'>
                        <img src='./img/tg.svg' title='Чайная лавка в Рогачеве в телеграмм' alt='Написать в телеграмм' loading="lazy">
                    </a>
                </div>
                <div class='cart-super-Btn'>
                    <div><img class='header-zn' src='./img/adr.png' alt='г. Рогачёв, ул. Богатырева 114/3' loading="lazy"></div>
                    <div class='header-adres'>
                        <p>г. Рогачёв, ул. Богатырева 114/3, </p>
                        <p>завод 'Диапроектор' мини-рынок</p>
                        <p> 'Восточный'. Чайная лавка.</p>
                    </div>
                    <div><img class='header-zn' src='./img/clock.png' alt='Время работы' loading="lazy"></div>
                    <div class='header-adres'>
                        <p>Время работы:</p>
                        <p>Пн-Вс: 9:00 - 18:00</p>
                        <p>Без перерывов и выходных.</p>
                    </div>
                    <div><img class='header-zn' src='./img/phone.png' alt='Онлайн консультация' loading="lazy"></div>
                    <div class='header-adres'><a class='header-adres' href=”tel:+375296218749”>+375 ( 25 )
                            699-27-80</a><br>Онлайн консультация:<br> с 9:00 до 18:00 </div>
                </div>
            </div>
            <div class="header-wrap1">
                <div>
                    <div>Чай, кофе россыпью со всего мира. Оптом и в розницу.</div>
                    <div>Чай чёрный, зелёный, красный, улун, габа, пуэр,</div>
                    <div>связной, травяной, фруктовый, добавки к чаю, кофе в зёрнах.</div>
                    <div><a class="price" href="/price/price.xls" download>Скачать прайс лист</a></div>
                </div>
                <form class="search">
                    <div class="search-wrapper">
                        <input id="searchGoods" class="search-wrapper_input" type="text" aria-label="Поиск товаров" role='search' placeholder="Поиск в каталоге, например 'цейлон'">
                    </div>
                    <div class="search-wrap-btn">
                        <button type="submit" class="search-btn" id="search-btn" aria-label="Поиск товаров"></button>
                    </div>
                </form>
                <div class="moizakCart">
                    <div>
                        <button id='btn-zakaz'>Мои заказы</button>
                    </div>
                    <div class='cart'>
                        <p class='cartsc'>0</p>
                        <img class='cartimg' src='./img/cart.svg' alt='Cart' title="Перейти к оформлению товаров в корзине">
                        <p>корзина</p>
                    </div>
                </div>
            </div>
            <nav class="top-menu">
                <div class="wrapper">
                    <ul class="hidden-small">
                        <li class="scroll"><a href="hitpr.php">Хит продаж</a></li>
                        <li class="scroll"><a href="pst.php">Полезные статьи</a></li>
                        <li class="scroll"><a href="contakt.php">Контакты</a></li>
                        <li class="scroll"><a href="otzkom.php">Отзывы</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <section>
            <div class="container">
                <div class="row">
                    <h1 class="cat">Корзина</h1>
                    <table class="table" id="table2">
                        <thead>
                            <tr class="">
                                <th data-type="number">№</th>
                                <th data-type="string">Название</th>
                                <th data-type="number">Цена, бел.руб.</th>
                                <th data-type="number">Количество, гр</th>
                                <th data-type="number"></th>
                            </tr>
                        </thead>
                        <tbody class="cartt">
                            <!-- Строки с товарами в корзине -->
                        </tbody>
                    </table>
                    <div id="tovar_kuplen">
                    </div>
                    <div class="price_result">
                    </div>
                </div>
            </div>
            <!-- Модальный -->
            <div id="myModal" class="modal">
                <!-- Модальное содержание -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h5>Заполните форму заявки</h5>
                    <h5>мы перезвоним вам</h5>
                    <form class="feed-form" action="card.php" method="post">
                        <label for="modalzag">Заказ товара:</label>
                        <input name="modalzag" id="modalzag" type="text" readonly />
                        <label for="kol">Количество товара грамм:</label>
                        <input name="kol" id="kol" type="text" readonly />
                        <label for="cena">Цена товара бел. руб.:</label>
                        <input name="cena" id="cena" type="text" readonly />
                        <input name="fio" required="required" placeholder="Ваше имя" type="text" />
                        <input name="phone" required="required" placeholder="Ваш телефон" />
                        <input name="email" required="required" placeholder="Ваш E-mail" type="email" />
                        <textarea name="adres" id="adres" required="required" placeholder="Введите адрес доставки товара" rows="3" cols="43" name="text"></textarea>
                        <select id="mod_dost" name="modal_dost" required="required">
                            <option selected value="">Выберите способ доставки</option>
                            <option value="Почта">Почта</option>
                            <option value="Европочта">Европочта</option>
                            <option value="Курьерская служба">Курьерская служба</option>
                            <option value="Срочная курьерская служба">Срочная курьерская служба</option>
                            <option value="Транспортная компания">Транспортная компания</option>
                            <option value="Самовывоз">Самовывоз</option>
                        </select>
                        <h3 id="modal_dos"></h3>
                        <button class="button_modal_cart">Купить</button>
                    </form>
                    <?php
                    $fio = $_POST['fio'];
                    $tel = $_POST['phone'];
                    $email = $_POST['email'];
                    $modal_dost = $_POST['modal_dost'];
                    $adres = $_POST['adres'];
                    $pokuptov = $_POST['modalzag'];
                    $kol = $_POST['kol'];
                    $cena = $_POST['cena'];
                    $sposobdostav = $_POST['modal_dost'];
                    $fio = htmlspecialchars($fio);
                    $email = htmlspecialchars($email);
                    $tel = htmlspecialchars($tel);
                    $modal_dost = htmlspecialchars($modal_dost);
                    $adres = htmlspecialchars($adres);
                    $pokuptov = htmlspecialchars($pokuptov);
                    $kol = htmlspecialchars($kol);
                    $cena = htmlspecialchars($cena);
                    $sposobdostav = htmlspecialchars($sposobdostav);
                    $fio = urldecode($fio);
                    $email = urldecode($email);
                    $tel = urldecode($tel);
                    $modal_dost = urldecode($modal_dost);
                    $adres = urldecode($adres);
                    $pokuptov = urldecode($pokuptov);
                    $kol = urldecode($kol);
                    $cena = urldecode($cena);
                    $sposobdostav = urldecode($sposobdostav);
                    $to = 'sakyri151@gmail.com'; // адрес получателя
                    $subject = 'Сообщение с сайта teaclub.by о покупке товара. '; // тема письма
                    // текст письма
                    $message = "Имя: " . $fio . "<br/>";
                    $message .= "E-mail пользователя: " . $email . ' номер телефона ' . $tel . "<br/>";
                    $message = "Наименование товара: " . $pokuptov . "<br/>";
                    $message = "Количество товара: " . $kol . "<br/>";
                    $message = "Цена товара: " . $cena . "<br/>";
                    $message .= "Адрес покупателя: " . $adres;
                    $message .= "Способ доставки: " . $sposobdostav;
                    $headers = "MIME-Version: 1.0\r\n";
                    $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
                    $headers .= "From: Тестовое письмо <no-reply@test.com>\r\n"; // от кого письмо
                    if (isset($_POST['fio']) and isset($_POST['email'])) {
                        mail($to, $subject, $message, $headers);
                        //Запись сообщения в таблицу otzk БД
                        include('configinc.php');
                        $datazak = date("Y-m-d H:i:s");
                        if (isset($_POST["fio"])) {
                            $sql = mysqli_query($db, "INSERT INTO `pokup` (`fio`, `email`, `tel`, `pokup_tov`, `kol`, `cena`,`adrdost`, `datazak`, `sposobdostav`) VALUES ('{$_POST['fio']}', '{$_POST['email']}', '{$_POST['phone']}', '{$_POST['modalzag']}', '{$_POST['kol']}','{$_POST['cena']}','{$_POST['adres']}', '{$datazak}', '{$sposobdostav}')");
                            echo "<script>
                    setTimeout(function(){
                         document.getElementById('tovar_kuplen').innerHTML = '$pokuptov ' +'в количестве ' +' $kol' + ' шт ' + 'на сумму' + ' $cena' + ' бел. руб.';
                        window.location.href = 'card.php';
                         document.getElementById('tovar_kuplen').innerHTML = '$pokuptov ' +'в количестве ' +' $kol' + ' шт ' + 'на сумму' + ' $cena' + ' бел. руб.';
                      }, 2000);   
                      document.getElementsByClassName('nazvCart')[0].innerHTML = 'Товар заказан!!!';
                      document.getElementById('tovar_kuplen').innerHTML = '$pokuptov ' +'в количестве ' +' $kol' + ' шт ' + 'на сумму' + ' $cena' + ' бел. руб.';
                     </script>";
                        }
                        echo "<script>
                     document.querySelector('#tovar_kuplen').innerHTML =
                     `Товар заказан!!!'$pokuptov ' +'в количестве ' +' $kol' + ' гр. '`
                      </script>";
                        mysqli_free_result($result);
                        mysqli_close($db);
                        echo "Товар заказан!";
                    } else {
                        echo "<div></div>";
                    }
                    ?>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <img src='./img/up.svg' alt='up' class='pageup' title='Рageup' loading="lazy">
        <div class='container'>
            <div>
                © Чайная лавка Рогачев, 2020 - <?php echo date('Y'); ?>.
            </div>
        </div>
    </footer>
    <script defer src="./js/script1.js"></script>
    <script defer src="./js/script2.js"></script>
    <script>
        setTimeout(() => {
            location.reload(true);
            //location.assign(document.URL);
            //location.href="javascript:void(0);"
        }, 3000000);
    </script>
</body>

</html>