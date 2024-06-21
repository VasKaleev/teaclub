function update_goods() {
  let result_kol = 0;
  let goodst = JSON.parse(localStorage.getItem('goodst'))
  if (goodst.length) {
    for (let i = 0; i < goodst.length; i++) {
      // Сумировать цену в общий результат
      result_kol += parseInt(goodst[i][3]);
      document.querySelector('.cartt').insertAdjacentHTML('beforeend',
        `
        <tr class="align-middle">
          <td>${i + 1}</td>
          <td class="price_name">${goodst[i][1]}</td>
          <td class="price_one">${goodst[i][2]}</td>
          <td class="price_count"><button class="minus" data-minus="${goodst[i]}">-</button>${goodst[i][3]}<button class="plus" data-plus="${goodst[i]}">+</button></td>
          <td><button class="good_delete" data-delete="${goodst[i]}">Удалить</button></td>
          <td><button class="good_buy" id="myBtn" data-buy="${goodst[i]}">Купить</button></td>
        </tr>
        `)
    }
  }
  // Вывести цену в итог
  document.querySelector('.price_result').innerHTML = 'Итого в корзине: <span class="">' + result_kol + ' грамм</span>'
}
// Обновление отображаемых товаров
update_goods()
if (localStorage.getItem('goodst')) {
  const goodst = JSON.parse(localStorage.getItem('goodst'));
  var prizn = false;
  document.querySelector('.cartt').addEventListener('click', (event) => {
    for (let i = 0; i < goodst.length; i++) {
      let arrayString = goodst[i].join(',');
      if (arrayString == event.target.dataset.delete) {
        goodst.splice(i, 1);
        localStorage.setItem('goodst', JSON.stringify(goodst))
        localStorage.getItem('goodst')
        window.location.reload();
      }
      if (arrayString == event.target.dataset.plus) {
        goodst[i][3] += 50
        /* goodst[i][6] = goodst[i][2].split(" ")[0] * goodst[i][3] */
        localStorage.setItem('goodst', JSON.stringify(goodst))
        localStorage.getItem('goodst')
        window.location.reload();
      }
      if (arrayString == event.target.dataset.minus) {
        if (goodst[i][3] > 0) {
          goodst[i][3] -= 50
          goodst[i][6] = goodst[i][2].split(" ")[0] * goodst[i][3]
        }
        localStorage.setItem('goodst', JSON.stringify(goodst))
        localStorage.getItem('goodst')
        window.location.reload();
      }
      if (arrayString == event.target.dataset.buy) {
        var modal = document.getElementById("myModal");
        // Получить кнопку, которая открывает модальный
        var btn = document.getElementById("myBtn");
        var span = document.getElementsByClassName("close")[0];
        modal.style.display = "block";
        span.onclick = function () {
          modal.style.display = "none";
          document.querySelector('#modal_dos').innerHTML = '';
        }
        let aa = document.querySelector('#modalzag').innerHTML =
          `<p><br>Ваш заказ:<br>${goodst[i][1]}<br>Количество: ${goodst[i][3]}</p>`;
        prizn = true;
        let naim = `${goodst[i][1]}`;
        document.getElementById("modalzag").value = naim;
        let kol = `${goodst[i][3]}`;
        document.getElementById("kol").value = kol;
        let cena = `${goodst[i][2]}`;
        document.getElementById("cena").value = cena; 
        //Выбираем способ доставки товара
        let mySelect = document.getElementById('mod_dost');
        mySelect.addEventListener('click', function (event) {
          let selectedOption = event.target.value;
          if (selectedOption == "Самовывоз") {
            document.querySelector('#modal_dos').innerHTML =
              `<p>Оплата при получении</p>`
          }

        });

      }
    }
  })
}
function cartbtn_reload() {
  let goodst = JSON.parse(localStorage.getItem('goodst'))
  let cartsc = document.querySelector('.cartsc');
  if (localStorage.getItem('goodst')) {
    cartsc.innerHTML = `${goodst.length}`;
  }
};
cartbtn_reload();