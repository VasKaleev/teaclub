document.addEventListener('DOMContentLoaded', () => {
	const cat = document.querySelector('.cat');
    function cartbtn_reload() {
		let goods = JSON.parse(localStorage.getItem('goodst'))
		let cartsc = document.querySelector('.cartsc');
		if (localStorage.getItem('goodst')) {
			cartsc.innerHTML = `${goods.length}`;
		}};
        cartbtn_reload() 
    });  
  let cart = document.querySelector(".cartimg")
  cart.onclick = function () {
  window.location.href = "card.php";
  };
  let myzakaz = document.querySelector("#btn-zakaz")
  myzakaz.onclick = function () {
  window.location.href = "myzakaz.php";
  };  





