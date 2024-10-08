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
            <h1 class="cat">Отзывы и комментарии</h1>
            <!-- <section> -->
            <form class='comment' action='otzkom.php' method='post'>
                <input class='form-control' type='text' name='fio' placeholder='Укажите Фамилию Имя Отчество' required pattern='[A-Za-zА-Яа-я .]*'>
                <input class='form-control' type='text' name='tel' placeholder='Укажите номер телефона (Не публикуется)' required>
                <textarea class='form-control' rows='3' cols='10' name='comment' placeholder='Напишите ваше сообщение сюда...'></textarea>
                <p class="personal-data">
                    <input type="checkbox" id="check1">
                    <label for="check1">Я согласен на обработку персональных данных</label>
                </p>
                <!-- <div class='g-recaptcha' data-sitekey='6Lcx2rYpAAAAADt6RH1YCMjbQXGv59HXYa_ZsSe1'></div> -->
                <input type='submit' value='Отправить' class='btn btn-primary'>
            </form>
            <?php
            if (!empty($_POST['fio'])) {
                $fio = '';
                $tel = '';
                $comment = '';
                include('configinc.php');
                $fio = $_POST['fio'];
                $tel = $_POST['tel'];
                $comment = $_POST['comment'];
                $fio = htmlspecialchars($fio);
                $tel = htmlspecialchars($tel);
                $comment = htmlspecialchars($comment);
                $fio = urldecode($fio);
                $tel = urldecode($tel);
                $comment = urldecode($comment);
                $to = 'kaleev.fam@mail.ru';
                // адрес получателя
                $subject = 'Пользователь на сайте памятники в Рогачеве оставил комментарий ';
                // текст письма
                $message = 'ФИО: ' . $fio . '<br/>';
                $message .= 'Номер телефона ' . $tel . '<br/>';
                $message .= 'Крмментарий пользователя: ' . $comment;
                $headers = 'MIME-Version: 1.0\r\n';
                $headers .= 'Content-type: text/html; charset=utf-8\r\n';
                // кодировка письма
                $headers .= 'From: Тестовое письмо с сайта памятники в Рогачеве\r\n';
                // от кого письмо
                if (isset($_POST['fio']) and isset($_POST['tel'])) {
                    mail($to, $subject, $message, $headers);
                    //Запись сообщения в таблицу otzkom БД
                    include('configinc.php');
                    $datazv = date('Y-m-d H:i:s');
                    if (isset($_POST['fio'])) {
                        //вставляем данные, подставляя их в запрос
                        $sql = mysqli_query($db, "INSERT INTO `otzkom` (`fio`, `tel`, `comment`, `datazv`) VALUES ('{$_POST['fio']}', '{$_POST['tel']}', '{$_POST['comment']}', '{$datazv}')");
                        //echo "Данные добавлены в таблицу";
                    }
                    //Если вставка прошла успешно
                    // if ($sql) {
                    //     echo '<div>Данные добавлены в таблицу отзывов!</div>';
                    // } else {
                    //     echo '<p>Произошла ошибка добавления данных в таблицу отзывов: </p>';
                    // }
                    // echo '<div>Сообщение успешно отправлено на email администратора сайта!</div>';
                    //mysqli_free_result($result);
                    //mysqli_close($db); 
                }
            }
            ?>
            <?php
            //Получаем данные для отображения на странице отзывов
            include('configinc.php');
            $sort = 'ORDER by `datazv` DESC';
            $result = mysqli_query($db, 'SELECT `fio`,`tel`,`comment`,`datazv` FROM `otzkom` ' . $sort . ''); // запрос на выборку
            $np = 0;
            while ($row = mysqli_fetch_array($result)) {
                $fio = $row['fio'];
                if ($fio) {
                    $np++;
                    /*  echo '<div class="commenb"';
                    echo '<div class="commentv" align="left" style="background: color=#FFF);"><font color=#73888e size="3pt"></font><font color=#c70101 size="4pt"> &nbsp;' . $row["fio"] . '</font>&nbsp;<font color=#73888e size="4pt">' . $row["datazv"] . ' </font></div>';
                    echo '<div class="commentv"><p id="ot" align="justify" style="background-color:#FFF;">&nbsp;<font coor=#911E42 size="3pt">' . $row["comment"] . '</font></p></div>';
                    echo '</div>'; */

                    // echo '<div class="commenb"></div>';
                    echo '<div class="commentb" align="left" style="background: color=#FFF);"><font color=#73888e size="3pt"></font><font color=#c70101 size="4pt"> &nbsp;' . $row["fio"] . '</font>&nbsp;<font color=#73888e size="4pt">' . $row["datazv"] . ' </font></div>';
                    echo '<div class="commentv"><p id="ot" align="justify" style="background-color:#FFF;">&nbsp;<font coor=#911E42 size="3pt">' . $row["comment"] . '</font></p></div>';
                    // echo '';
                }
            }
            echo '<div class="comitog"><h4><font color=#c70101 size="4pt">Всего отзывов: &nbsp;&nbsp;' . $np . '</font></h4></div>';
            mysqli_free_result($result);
            mysqli_close($db);
            echo "<script>window.location.href = ''></script>";
            ?>
            <!-- </section> -->
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
    <script src="./js/script2.js" defer></script>
    <script src="./js/script1.js" defer></script>
</body>

</html>