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
	<title>Чайная лавка. Рогачев. Чай, кофе со всего мира. Оптом и в розницу.</title>
	<link rel="stylesheet" href="./css/style1.css">
	<link rel="preload" href="./css/style2.css" as="style">
	<link rel="stylesheet" href="./css/style2.css">
	<link rel="stylesheet" href="./css/glide.core.min.css">
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
	<main>
		<section>
			<div class="container">
				<h1 class="cat">Хит продаж</h1>
				<div class="glide__container">
					<div class="glide">
						<div class="glide__track" data-glide-el="track">
							<ul class="glide__slides">
								<li class="glide__slide">
									<div class="cards">
										<div class="img__container">
											<img src="img_slider/hitblgo.webp" alt="salad" class="card__img">
										</div>
										<p class="card__txt">Черный чай Граф Орлофский</p>
									</div>
								</li>
								<li class="glide__slide">
									<div class="cards">
										<div class="img__container">
											<img src="img_slider/hitgrli.webp" alt="pancake" class="card__img">
										</div>
										<p class="card__txt">Зеленый чай Лимон с имбирем</p>
									</div>
								</li>
								<li class="glide__slide">
									<div class="cards">
										<div class="img__container">
											<img src="img_slider/hittrm.webp" alt="donuts" class="card__img">
										</div>
										<p class="card__txt">Травяной чай - Монастырский сбор №2</p>
									</div>
								</li>
								<li class="glide__slide">
									<div class="cards">
										<div class="img__container">
											<img src="img_slider/hittrv.webp" alt="pancakes" class="card__img">
										</div>
										<p class="card__txt">Травяной чай - Вечерний</p>
									</div>
								</li>
								<li class="glide__slide">
									<div class="cards">
										<div class="img__container">
											<img src="img_slider/hityag.webp" alt="pizza" class="card__img">
										</div>
										<p class="card__txt">Ягоды Годжи</p>
									</div>
								</li>
								<li class="glide__slide">
									<div class="cards">
										<div class="img__container">
											<img src="img_slider/kitgreen9374.webp" alt="hot dog" class="card__img">
										</div>
										<p class="card__txt">Зеленый чай - Ганпаудер крупный лист 9374</p>
									</div>
								</li>
								<li class="glide__slide">
									<div class="cards">
										<div class="img__container">
											<img src="img_slider/tiakitgresen.webp" alt="hamburger" class="card__img">
										</div>
										<p class="card__txt">Зеленый чай - Е Шэн Люй Ча (чай китайский)</p>
									</div>
								</li>
								<li class="glide__slide">
									<div class="cards">
										<div class="img__container">
											<img src="img_slider/teakitgrcr.webp" alt="oreo shake" class="card__img">
										</div>
										<p class="card__txt">Зеленый чай - крупнолистовой OP (чай китайский)</p>
									</div>
								</li>
								<li class="glide__slide">
									<div class="cards">
										<div class="img__container">
											<img src="img_slider/teakitgrvi.webp" alt="shake" class="card__img">
										</div>
										<p class="card__txt">Чай зелёный - Высокогорный (чай китайский)</p>
									</div>
								</li>

							</ul>
						</div>
						<div class="glide__arrows" data-glide-el="controls">
							<button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fas fa-chevron fa-chevron-left">&#60;</i></button>
							<button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fas fa-chevron fa-chevron-right">&#62;</i></button>
						</div>
					</div>

				</div>
				<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
				<script>
					new Glide('.glide', {
						type: 'carousel',
						startAt: 0,
						perView: 5
					}).mount()
				</script>
			</div>
	</main>
	</section>
	<footer>
		<img src='./img/up.svg' alt='up' class='pageup' title='Рageup'>
		<div class='container'>
			<div>
				© Чайная лавка Рогачев, 2020 - <?php echo date('Y'); ?>.
			</div>
		</div>
	</footer>
	<script defer src="./js/script2.js"></script>
	<script defer src="./js/script1.js"></script>
</body>

</html>