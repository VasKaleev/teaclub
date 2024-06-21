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
	<main>
		<section>
			<div class="container">
				<h1 class="cat">Полезные статьи</h1>
				<div class="cardsp-wrapper">
					<div class="cardp">
						<h5>История чая</h5>
						<img src="./db/img-mini/pst/history.webp" alt="История чая" title="История чая" loading="lazy">
						<p class="cardp__history">История чая насчитывает свыше 5000 лет. На всей нашей планете не найдется ни одного человека</p>
						<a href="https://www.tea.moscow/istoriya-chaya" target="_blank">Читать далее...</a>
					</div>
					<div class="cardp">
						<h5>Чай для похудения</h5>
						<img src="./db/img-mini/pst/teaforpo.webp" alt="Чай для похудения" title="Чай для похудения" loading="lazy">
						<p class="cardp__history">В сочетании со здоровым образом жизни и регулярными физическими нагрузками фиточай</p>
						<a href="https://aptechestvo.ru/interes/articles/kakoy_chay_pit_dlya_pokhudeniya/" target="_blank">Читать далее...</a>
					</div>
					<div class="cardp">
						<h5>Как выбрать зелёный чай?</h5>
						<img src="./db/img-mini/pst/viborzel.webp" alt="Как выбрать зелёный чай?" title="Как выбрать зелёный чай?" loading="lazy">
						<p class="cardp__history">В этой статье мы расскажем вам о том, как выбрать зелёный чай и что нужно знать перед его покупкой.</p>
						<a href="https://artoftea.ru/kak-vybrat-zeleniy-chai" target="_blank">Читать далее...</a>
					</div>
					<div class="cardp">
						<h5>Кофе: польза и вред.</h5>
						<img src="./db/img-mini/pst/polzakofe.webp" alt="Кофе: польза и вред." title="Кофе: польза и вред." loading="lazy">
						<p class="cardp__history">Кофе – это напиток, который вызывает множество дискуссий и споров относительно его полезности</p>
						<a href="https://belcoffee.by/polza-i-vred-kofe-dlya-organizma/" target="_blank">Читать далее...</a>
					</div>
					<div class="cardp">
						<h5>Полезные свойства Пуэра.</h5>
						<img src="./db/img-mini/pst/pyer.webp" alt="Полезные свойства Пуэра." title="Полезные свойства Пуэра." loading="lazy">
						<p class="cardp__history">В Китае говорят: «Ежедневное употребление чашки чая приведет к исчезновению аптечного дела».</p>
						<a href="https://101tea.ru/blog/poleznye_svoystva_i_protivopokazaniya_chaya_puer/" target="_blank">Читать далее...</a>
					</div>
					<div class="cardp">
						<h5>Гранулированный чай</h5>
						<img src="./db/img-mini/pst/granul.webp" alt="Гранулированный чай" title="Гранулированный чай" loading="lazy">
						<p class="cardp__history">Гранулированный чай точно так же, как и листовой, может быть любого качества – от самого низкого до премиального</p>
						<a href="https://tea.ru/article/pit-ili-ne-pit-granulirovannyy-chernyy-chay-istoriya-i-fakty/" target="_blank">Читать далее...</a>
					</div>
				</div>
			</div>
		</section>
	</main>
	<footer>
		<img src='./img/up.svg' alt='up' class='pageup' title='Рageup'>
		<div class='container'>
			<div>
				© Чайная лавка Рогачев, 2020 - <?php echo date('Y'); ?>.
				<!-- © Чайная лавка Рогачев, 2024. -->
			</div>
		</div>
	</footer>
	<script src="./js/script2.js" defer></script>
	<script src="./js/script1.js" defer></script>
</body>

</html>