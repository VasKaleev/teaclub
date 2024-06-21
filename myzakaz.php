<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" sizes="32x32" href="favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="Продажа более 100 видов чая(со всего мира). Кофе более 30 видов(со всего мира). Добавки, аксессуары.">
    <meta name="keywords" content="Продажа в Рогачеве чай, кофе россыпью со всего мира. Оптом и в розницу.">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preload" href="./css/style2.css" as="style">
    <link rel="stylesheet" href="./css/style2.css">
    <title>Чайная лавка. Рогачев. Чай, кофе со всего мира. Оптом и в розницу.</title>
</head>

<body>
    <header>
        <div class="container">
            <div class='header-wrap'>
                <a href='index.php'><img class='logo-img' src='./img/logo.webp' title='Чайная лавка в Рогачеве' alt='Чайная лавка в Рогачеве'></a>
                <div class='invk'>
                    <a href='https://www.instagram.com/chay_nayalavka/' class='in' target="_blank">
                        <img src='./img/in.svg' title='Чайная лавка в Рогачеве в инстаграмм' alt='Чайная лавка в Рогачеве в инстаграмм'>
                    </a>
                    <a href='viber://chat?number=%2B375256992780' class='viber'>
                        <img src='./img/viber.svg' title='Чайная лавка в Рогачеве в вайбере' alt='Чайная лавка в Рогачеве в вайбере'>
                    </a>
                    <a href='https://msngr.link/tg/@chay_nayalavka' class='tg'>
                        <img src='./img/tg.svg' title='Чайная лавка в Рогачеве в телеграмм' alt='Написать в телеграмм'>
                    </a>
                </div>
                <div class='cart-super-Btn'>
                    <div><img class='header-zn' src='./img/adr.png' alt=''></div>
                    <div class='header-adres'>
                        <p>г. Рогачёв, ул. Богатырева 114/3, </p>
                        <p>завод 'Диапроектор' мини-рынок</p>
                        <p> 'Восточный'. Чайная лавка.</p>
                    </div>
                    <div><img class='header-zn' src='./img/clock.png' alt=''></div>
                    <div class='header-adres'>
                        <p>Время работы:</p>
                        <p>Пн-Вс: 9:00 - 18:00</p>
                        <p>Без перерывов и выходных.</p>
                    </div>
                    <div><img class='header-zn' src='./img/phone.png' alt=''></div>
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
    <!-- <div class="mainp"> -->
    <!-- <main>	
		<section>
			<div class="container">
				<h1 class="cat">Контакты.</h1>
				
			</div>
		</section>
	</main> -->
    <main>
        <div class='container'>
            <h1 class="cat">Мои покупоки товаров в интернет магазине</h1>
            <form name="f1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="f1">
                <input type="text" id="search_zak" required name="search_q" placeholder="Введите номер телефона..." />
                <input type="submit" id="btn-search-zak" value="Найти заказы" />
            </form>
            <?php
            if (!empty($_POST['search_q'])) {
                echo '<style>#f1 {display: none}</style>';
                $nn = 0;
                $search_q = '';
                $search_q = $_POST['search_q'];
                include('configinc.php');
                $search_q = trim($search_q);
                $search_q = strip_tags($search_q);
                $result = mysqli_query($db, "SELECT `id`,`fio`,`tel`,`email`,`datazak`, `pokup_tov`, `kol`, `cena`,`sposobdostav`,`adrdost`,`oplata` FROM `pokup` WHERE `tel` LIKE '%$search_q%'");
                echo '<table class="table" id="table2">';
                echo '<tr class="align-middle">';
                echo '<td>N</td><td>ФИО</td><td>Номер телефона</td><td>Адрес эл. почты</td><td>Адрес доствки</td><td>Дата заказа</td><td>Название товара</td><td>Колич.</td><td>Цена бел.руб.</td><td>Способ доставки</td>';
                echo '</tr>';
                echo '<tr>';
                while ($itog = mysqli_fetch_assoc($result)) {
                    $nn++;
                    $nomerzak = $itog["id"];
                    $fio = $itog["fio"];
                    $tel = $itog["tel"];
                    $email = $itog["email"];
                    $adrdost = $itog["adrdost"];
                    $datazak = $itog["datazak"];
                    $pokuptov = $itog["pokup_tov"];
                    $kol = $itog["kol"];
                    $cena = $itog["cena"];
                    $sposobdostav  = $itog["sposobdostav"];
                    $adrdost = $itog["adrdost"];
                    $oplata  = $itog["oplata"];
                    echo '<td>' . $nn . '</td><td>' . $fio . '</td><td>' . $tel . '</td><td>' . $email . '</td><td>' . $adrdost . '</td><td>' . $datazak . '</td><td>' . $pokuptov . '</td><td>' . $kol . '</td><td>' . $cena . '</td><td>' . $sposobdostav . '</td>';
                    echo '</tr>';
                }
                echo '</table>';
                mysqli_free_result($result);
                mysqli_close($db);
            }
            ?>

        </div>
    </main>
    <footer>
        <img src='./img/up.svg' alt='up' class='pageup' title='Рageup'>
        <div class='container'>
            <div>
                © Чайная лавка Рогачев, 2020 - <?php echo date('Y'); ?>.
            </div>
        </div>
    </footer>
    <script defer src="./js/script2.js"></script>
</body>

</html>