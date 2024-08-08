<!DOCTYPE html>
<html lang="ru">

<head>
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" type="image/x-icon" sizes="32x32" href="favicon/favicon.ico">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#ffffff">
	<meta name="description"
		content="Продажа более 100 видов чая(со всего мира). Кофе более 30 видов(со всего мира). Добавки, аксессуары.">
	<meta name="keywords" content="Продажа в Рогачеве чай, кофе россыпью со всего мира. Оптом и в розницу.">
	<link rel="preload" href="css/bootstrap.min.css" as="style">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="preload" href="./css/style.css" as="style">
	<link rel="stylesheet" href="./css/style.css">
	<link rel="preload" href="./css/style2.css" as="style">
	<link rel="stylesheet" href="./css/style2.css">
	<title>Чайная лавка. Рогачев. Чай, кофе со всего мира. Оптом и в розницу.</title>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
		(function (m, e, t, r, i, k, a) {
			m[i] = m[i] || function () {
				(m[i].a = m[i].a || []).push(arguments)
			};
			m[i].l = 1 * new Date();
			for (var j = 0; j < document.scripts.length; j++) {
				if (document.scripts[j].src === r) {
					return;
				}
			}
			k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
		})
			(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

		ym(97397210, "init", {
			clickmap: true,
			trackLinks: true,
			accurateTrackBounce: true
		});
	</script>
	<noscript>
		<div><img src="https://mc.yandex.ru/watch/97397210" style="position:absolute; left:-9999px;" alt="" /></div>
	</noscript>
	<!-- /Yandex.Metrika counter -->
</head>

<body>
	<header>
		<div class="container">
			<div class='header-wrap'>
				<a href='index.php'><img class='logo-img' src='./img/logo.webp' title='Чайная лавка в Рогачеве'
						alt='Чайная лавка в Рогачеве' loading="lazy"></a>
				<div class='invk'>
					<a href='https://www.instagram.com/chay_nayalavka/' class='in' target="_blank">
						<img src='./img/in.svg' title='Чайная лавка в Рогачеве в инстаграмм'
							alt='Чайная лавка в Рогачеве в инстаграмм' loading="lazy">
					</a>
					<a href='viber://chat?number=%2B375256992780' class='viber'>
						<img src='./img/viber.svg' title='Чайная лавка в Рогачеве в вайбере'
							alt='Чайная лавка в Рогачеве в вайбере' loading="lazy">
					</a>
					<a href='https://t.me/chay_nayalavka' class='tg'>
						<img src='./img/tg.svg' title='Чайная лавка в Рогачеве в телеграмм' alt='Написать в телеграмм'
							loading="lazy">
					</a>
				</div>
				<div class='cart-super-Btn'>
					<div><img class='header-zn' src='./img/adr.png' alt='г. Рогачёв, ул. Богатырева 114/3'
							loading="lazy"></div>
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
						<input id="searchGoods" class="search-wrapper_input" type="text" aria-label="Поиск товаров"
							role='search' placeholder="Поиск в каталоге, например 'цейлон'">
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
						<img class='cartimg' src='./img/cart.webp' alt='Cart'
							title="Перейти к оформлению товаров в корзине">
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
		<div class="container">
			<div class="row justify-content-center justify-content-sm-between">
				<div class="col-10 col-sm-4 col-md-3 col-xl-2">
					<div class="category">
						<div class="category-title">
							<h5>Категории</h5>
						</div>
						<ul class="category-list">
							<li><img class="imgMenu" src="./img/tea1.png" loading="lazy" alt='Категория чая' /><a
									href="javascript:void(0);" class="category-item category-item__teakit"
									data-category="teakitw">Китайский белый чай</a>
							</li>
							<li><img class="imgMenu" src="./img/tea1.png" loading="lazy" alt='Категория чая' /><a
									href="javascript:void(0);" class="category-item category-item__teakit"
									data-category="teakitgreen">Китайский зелёный чай</a>
							</li>
							<li><img class="imgMenu" src="./img/tea1.png" loading="lazy" alt='Категория чая' /><a
									href="javascript:void(0);" class="category-item category-item__teakit"
									data-category="teakitred">Китайский красный чай</a>
							</li>
							<li><img class="imgMenu" src="./img/tea1.png" loading="lazy" alt='Категория чая' /><a
									href="javascript:void(0);" class="category-item category-item__teakit"
									data-category="teakitshpu">Китайский чай Шу Пуэр прессованный</a>
							</li>
							<li><img class="imgMenu" src="./img/tea1.png" loading="lazy" alt='Категория чая' /><a
									href="javascript:void(0);" class="category-item category-item__teakit"
									data-category="teakitshrass">Китайский чай Шу Пуэр рассыпной</a>
							</li>
							<li><img class="imgMenu" src="./img/tea1.png" loading="lazy" alt='Категория чая' /><a
									href="javascript:void(0);" class="category-item category-item__teakit"
									data-category="teakitshen">Китайский чай Шен Пуэр прессованный</a>
							</li>
							<li><img class="imgMenu" src="./img/tea1.png" loading="lazy" alt='Категория чая' /><a
									href="javascript:void(0);" class="category-item category-item__teakit"
									data-category="teakitspras">Китайский чай Шен Пуэр рассыпной</a>
							</li>
							<li><img class="imgMenu" src="./img/tea1.png" loading="lazy" alt='Категория чая' /><a
									href="javascript:void(0);" class="category-item category-item__teakit"
									data-category="teakitul">Китайский чай улун</a>
							</li>
							<li><img class="imgMenu" src="./img/tea1.png" loading="lazy" alt='Категория чая' /><a
									href="javascript:void(0);" class="category-item category-item__teakit"
									data-category="teatay">Тайванский чай улун Габа</a>
							</li>
							<li><img class="imgMenu" src="./img/tea1.png" loading="lazy" alt='Категория чая' /><a
									href="javascript:void(0);" class="category-item category-item__teakit"
									data-category="teakitzh">Китайский чай жасминовый</a>
							</li>
							<li><img class="imgMenu" src="./img/tea1.png" loading="lazy" alt='Категория чая' /><a
									href="javascript:void(0);" class="category-item category-item__teakit"
									data-category="teakitsv">Китайский чай связанный</a>
							</li>
							<li><img class="imgMenu" src="./img/tea.png" loading="lazy" alt='Категория чая' /><a
									href="javascript:void(0);" class="category-item category-item__teaind"
									data-category="teaindas">Индийский чай Ассам</a>
							</li>
							<li><img class="imgMenu" src="./img/tea.png" loading="lazy" alt='Категория чая' /><a
									href="javascript:void(0);" class="category-item category-item__teaind"
									data-category="teacey">Цейлонский чай</a>
							</li>
							<li><img class="imgMenu" src="./img/teajap.png" loading="lazy" alt='Категория чая' /><a
									href="javascript:void(0);" class="category-item category-item__teajap"
									data-category="teajap">Японский чай</a>
							</li>
							<li><img class="imgMenu" src="./img/tea.png" loading="lazy" alt='Категория чая' /><a
									href="javascript:void(0);" class="category-item category-item__teaind"
									data-category="teaindarombl">Ароматизированный чай черный Индия</a>
							</li>
							<li><img class="imgMenu" src="./img/tea.png" loading="lazy" alt='Категория чая' /><a
									href="javascript:void(0);" class="category-item category-item__teaind"
									data-category="teakitarzel">Ароматизированный зелены чай Китай</a>
							</li>
							<li><img class="imgMenu" src="./img/tea.png" loading="lazy" alt='Категория чая' /><a
									href="javascript:void(0);" class="category-item category-item__teaind"
									data-category="teakitarpr">Ароматизированный чай Премиальный</a>
							</li>
							<li><img class="imgMenu" src="./img/tea.png" loading="lazy" alt='Категория чая' /><a
									href="javascript:void(0);" class="category-item category-item__teadob"
									data-category="travy">Травы, добавки, ягоды</a></li>
							<li><img class="imgMenu" src="./img/coffemono.png" loading="lazy" alt='Категория кофе' /><a
									href="javascript:void(0);" class="category-item category-item__coffemono"
									data-category="coffemono">Кофе
									моносорта</a></li>
							<li><img class="imgMenu" src="./img/coffe3.png" loading="lazy" alt='Категория кофе' /><a
									href="javascript:void(0);" class="category-item category-item__coffearomo"
									data-category="coffearomo">Ароматизированный кофе</a></li>
							<li><img class="imgMenu" src="./img/chaynik.png" loading="lazy"
									alt='Торговые аксессуары' /><a href="javascript:void(0);"
									class="category-item category-item__acsess" data-category="acsess">Торговые
									аксессуары</a></li>
						</ul>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-9 col-xl-10">
					<h1 class="cat">Каталог чая, кофе, аксессуаров</h1>
					<h6 class="cat">Наличие ассортимента уточняйте у продавца</h6>
					<div class="container">
						<div class="row no-gutters goods-wrapper justify-content-center">
							<!-- КАРТОЧКИ ТОВАРОВ -->
							<!-- <div class="card-wrapper col-12 col-md-6 col-lg-4 col-xl-3 pb-3">
								<div class="card">
									<div class="card-img-wrapper">
										<img class="card-img-top" src="img/temp.png" alt="">
										<button class="card-add-wishlist"></button>
									</div>
									<div class="card-body justify-content-between">
										<a href="#" class="card-title">Имя товара</a>
										<div class="card-price">100000 ₽</div>
										<div>
											<button class="card-add-cart">Оставить заявку</button>
										</div
									</div>
								</div>
							</div> -->
							<!-- END КАРТОЧКИ ТОВАРОВ -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<footer>
		<img src='./img/up.svg' alt='up' class='pageup' title='Рageup' loading="lazy">
		<div class='container'>
			<div>
				© Чайная лавка Рогачев, 2020 - <?php echo date('Y'); ?>.
			</div>
		</div>
	</footer>
	<script defer src="./js/script.js"></script>
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