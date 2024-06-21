document.addEventListener('DOMContentLoaded', () => {
	const search = document.querySelector('.search');
	const whishlistBtn = document.getElementById('whishlist');
	const categoryList = document.querySelector('.category-list');
	const goodsWrapper = document.querySelector('.goods-wrapper');
	const cat = document.querySelector('.cat');
function cartbtn_reload() {
		let goods = JSON.parse(localStorage.getItem('goodst'))
		let cartsc = document.querySelector('.cartsc');
		if (localStorage.getItem('goodst')) {
			cartsc.innerHTML = `${goods.length}`;
		}
	  }; 
const loading = () => {
		goodsWrapper.innerHTML = `<div id="spinner"><div class="spinner-loading"><div><div><div></div>
		</div><div><div></div></div><div><div></div></div><div><div></div></div></div></div></div>`;
	}; 
	const createCardGoods = (id, title, price, img, opisan) => {
		const card = document.createElement('div');
		card.className = 'card-wrapper col-12 col-md-6 col-lg-4 col-xl-3 pb-3';
		card.innerHTML = `
						<!-- Модальный -->
						<div id="myModal" class="modal">
							<!-- Модальное содержание -->
							<div class="modal-content">
								<span class="close">&times;</span>
								<p class="modal-content-p">${title}</p>
								<p>${opisan}</p>
							    <img class="modal-content-img" src="${img}" title="Подробное фото" loading="lazy" > 
							</div>
						</div> 
		                <div class="card mx-sm-0">
							<div class="card-img-wrapper">
								<img class="card-img-top" src="${img}" title="Нажмите на картинку для подробного описания товара!" loading="lazy" draggable="false">
							</div>
							<div class="card-body justify-content-between">
								<a href="javascript:void(0);" class="card-title">${title}</a>
								<div class="card-price">${price}</div>
								<div>
									<button class="card-add-cart" data-goods-id="${id}">В корзину</button>
								</div>
								<span class='aler'></span>
							</div>
						</div>`;
						  //////////////////////////////////////
						    let cardW = document.querySelectorAll('.card-img-top');	
							let modalContentImg = document.querySelectorAll('.modal-content-img');		  
							let cardAdd = document.getElementsByClassName('card-add-cart');
							var modal = document.getElementsByClassName("modal");
							var span = document.getElementsByClassName("close");
							let name = document.querySelectorAll('.card-title');
							let aler = document.getElementsByClassName('aler');
						     cardW.forEach(function(item, i, cardW) {
								cardW[i].onclick = function () {
									modal[i].style.display = "block";
									modal[i].style.zIndex = "5";
									modalContentImg[i].src = modalContentImg[i].src;
								}
								cardAdd[i].onclick = function () {
									name = name[i].innerHTML;
									cena = "по запросу"
									kolvo =  parseInt("50");
									if (name[i]) {
										// Добавить товар в локальное хранилище
										if (!localStorage.getItem('goodst')) {
										localStorage.setItem('goodst', JSON.stringify([]))
										}
										let goods = JSON.parse(localStorage.getItem('goodst'))
										goods.push(['good_' + goods.length, name, cena, kolvo])
										localStorage.setItem('goodst', JSON.stringify(goods))
										cartbtn_reload();
									}
									aler[i].textContent = "Товар добавлен в корзину.";
									aler[i].style.backgroundColor = '#dff0d8';
								 //Обновляем страницу
								    cardAdd[i].onmouseout = function () {
										location.reload();
									}
								}
								span[i].onclick = function() {
									modal[i].style.display = "none";
								  }
								  window.onclick = function(event) {
									if (event.target == modal[i]) {
									  modal[i].style.display = "none";
									}
								  }   
							  });   
							  cartbtn_reload()
		return card;
	};
	const renderCard = items => {
		goodsWrapper.textContent = '';
		if (items.length) {
			items.forEach(({ id, title, price, imgMin, opisan }) =>
				goodsWrapper.appendChild(createCardGoods(id, title, price, imgMin, opisan)));
		} else {
			goodsWrapper.innerHTML = '❌ Извините, мы не нашли товаров по Вашему запросу. Пожалуйста, попробуйте поискать снова.';
		}
	};
	const getGoods = (handler, filter) => {
		loading();
		fetch('db/db.json')
			.then(response => response.json())
			.then(filter)
			.then(handler);
	};
	const choiceCategory = event => {
		const target = event.target;
		if (target.classList.contains('category-item')) {
			const category = target.dataset.category;
			cat.innerHTML = `<h1>${target.innerHTML}</h1>`
			getGoods(renderCard, goods => goods.filter(item => item.category.includes(category)));
		}
	};
	const searchGoods = event => {
		event.preventDefault();
		const input = event.target.elements.searchGoods;

		if (input.value.trim() !== '') {
			const searchString = new RegExp(input.value, 'i');
			getGoods(renderCard, goods => goods.filter(item => searchString.test(item.title)));
		} else {
			search.classList.add('error');
			setTimeout(() => {
				search.classList.remove('error');
			}, 2000);
		}	
		input.value = '';
	};
	categoryList.addEventListener('click', choiceCategory);
	search.addEventListener('submit', searchGoods);
	getGoods(renderCard);
});
//Кнопка вверх сайта pageup
let scrollMax = window.document.documentElement.scrollTopMax;
let butUp = document.querySelector('.pageup');
if (scrollMax > 50) {
  butUp.style.opacity = 0.9;
} else {
  butUp.style.opacity = 1;
};
butUp.onclick = () => {
  let sc = window.pageYOffset;
  window.scrollBy({
    top: -sc,
    behavior: 'smooth'
  });

}




