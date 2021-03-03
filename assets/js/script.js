$('.nav_burger').click(function(){
    $('.overlay').slideToggle('show');
});
$('.menumobile_item').click(function() {
    $('.overlay').slideUp("slow");
});

$('#eco').click(function(){
    $('#ecoimg').addClass   ('active');
    $('#alcimg').removeClass('active');
    $('#ferimg').removeClass('active');
});
$('#alc').click(function(){
    $('#alcimg').addClass('active');
    $('#ecoimg').removeClass('active');
    $('#ferimg').removeClass('active');
});
$('#fer').click(function(){
    $('#ferimg').addClass('active');
    $('#ecoimg').removeClass('active');
    $('#alcimg').removeClass('active');
});

var swiper = new Swiper('.swiper-container',{
    loop: true,
    slidesPerView: 1,
    spaceBetween: 30,
    breakpoints: {
        992: {
            slidesPerView: 3,
            spaceBetweenSlides: 30,
            navigation: {
                nextEl: '.swiper-button-n',
                prevEl: '.swiper-button-p',
              },
        },
    }
});

window.addEventListener('DOMContentLoaded', function() {
    let tabs = document.querySelectorAll('.catalog_tabs_item'),
    catalogs = document.querySelectorAll('.catalog_items'),
    formorder = document.querySelector('.order_wrapper'),
    seatcoverV = document.querySelector('#seatcover'),
    modelsdiv = document.querySelector(".models"),
    models = modelsdiv.querySelectorAll('select'),
    mainform = document.querySelector(".order_wrapper"),
    mark = document.querySelector('#markID');

  modelsdiv.style.display = "none";
  tabs[0].classList.add('catalog_tabs_item_active');
  for (let i = 0; i < catalogs.length; i++) {
    catalogs[i].style.display = "none";
  }
  catalogs[0].style.display = "flex";
  document.querySelector('.catalog_tabs').addEventListener('click', function (e) {
    let target = e.target;
    if (target.classList.contains('catalog_tabs_item') && !target.classList.contains('catalog_tabs_item_active')) {
      let num;
      for (let i = 0; i < tabs.length; i++) {
        catalogs[i].style.display = "none";
        tabs[i].classList.remove('catalog_tabs_item_active');
        if (tabs[i] == target) num = i;
      }
      tabs[num].classList.add('catalog_tabs_item_active');
      fadeIn(catalogs[num]);
    }
  });
  for (let i = 0; i < catalogs.length; i++) {
    catalogs[i].addEventListener('click', function (e) {
      let target = e.target;
      if (target.classList.contains('catalog_items_item')) {
        if (document.querySelector('.order_cardselected')) document.querySelector('.order_cardselected').remove();
        let clone = document.createElement('div');
        clone.classList.add('order_cardselected');        
        clone.innerHTML = target.innerHTML;
        // let clone = target.cloneNode(true);
        formorder.appendChild(clone);
        // let cart = formorder.querySelector('.catalog_items_item');
        // cart.classList.remove('catalog_items_item');
        // cart.classList.add('order_cardselected');
        seatcoverV.value = clone.querySelector(".catalog_items_item_desc").innerHTML;
        mainform.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
      if (target.tagName == "IMG" || target.tagName == "P") {
        let carts = document.querySelectorAll('.catalog_items_item');
        let itemimg;
        carts.forEach((item) => { if (item.contains(target)) itemimg = item });
        let clone = document.createElement('div');
            clone.innerHTML = itemimg.innerHTML;
            clone.classList.add('order_cardselected');
        // let clone = itemimg.cloneNode(true);
        if (document.querySelector('.order_cardselected')) document.querySelector('.order_cardselected').remove();
        formorder.appendChild(clone);
        // let cart = formorder.querySelector('.catalog_items_item');
        // cart.classList.remove('catalog_items_item');
        // cart.classList.add('order_cardselected');
        seatcoverV.value = clone.querySelector(".catalog_items_item_desc").innerHTML;
        mainform.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  }

  mark.addEventListener('change', function () {
    let value = mark.value;
    modelsdiv.style.display = "block";
    models.forEach((item) => {
      let question = (item.dataset.attribu == value) ? item.style.display = "block" : item.style.display = "none";
    });
  });
  function fadeIn(el) {
    el.style.display = "flex";
    let opacity = 0;
    el.style.opacity = opacity;
    let changeInterval = setInterval(() => {
      if (el.style.opacity >= 1) {
        clearInterval(changeInterval);
      } else {
        opacity = opacity + 0.01;
        el.style.opacity = opacity;
      }
    }, 5)
  }
  $('#phone').mask("+372 99-999-999");
});