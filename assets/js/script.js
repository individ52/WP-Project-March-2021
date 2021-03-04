window.addEventListener('DOMContentLoaded', function() {
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

$('a[href^="#"').on('click', function() {

  let href = $(this).attr('href');

  $('html, body').animate({
      scrollTop: $(href).offset().top
  });
  return false;
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


    let tabs = document.querySelectorAll('.catalog_tabs_item'),
    catalogs = document.querySelectorAll('.catalog_items'),
    formorder = document.querySelector('.order_form_wrapper'),
    allseatcovers = document.querySelectorAll('.catalog_items_item');
    seatcoverV = document.querySelector('#seatcover'),
    modelsdiv = document.querySelector(".models"),
    models = modelsdiv.querySelectorAll('span'),
    mainform = document.querySelector("#order_form"),
    mark = document.querySelector('#markID');
    let btn_order = document.querySelector('.order_form_btn');
    btn_order.classList.add('btn');
    seatcoverV.setAttribute('placeholder', "Chose seatcover from catalog");
    document.querySelector('#phone').setAttribute('placeholder', "Your phone");
    document.querySelector('#order_name').setAttribute('placeholder', "Your name");
    let allSections = document.querySelectorAll('select');
    allSections.forEach((item)=> {
      let firstOption = item.querySelectorAll('option')[0];
      firstOption.setAttribute('disabled', 'true');
    });
    // block of the input seatcoverV
    let blocker = document.createElement('div');
    document.querySelector('#block_div').style.position = 'relative';
    document.querySelector('#block_div').appendChild(blocker);
    blocker.style.position = "absolute";
    blocker.style.width = "100%";
    blocker.style.height = "100%";
    blocker.style.top = 0;
    


    document.querySelector('.order_cardselected').remove();
    modelsdiv.style.display = "none";
  tabs[3].classList.add('catalog_tabs_item_active');
  allseatcovers.forEach((item)=> {
    let first_category = tabs[3].dataset.categoryname;
    let item_category = item.dataset.category;
    let result = (first_category === item_category) ? item.style.display = "block" : item.style.display = "none";  
  });
  catalogs[0].style.display = "flex";
  //вывод каталога
  document.querySelector('.catalog_tabs').addEventListener('click', function (e) {
    let target = e.target;
    if (target.classList.contains('catalog_tabs_item') && !target.classList.contains('catalog_tabs_item_active')) {
      tabs.forEach((item)=> {
        let result = (item === target) ? item.classList.add('catalog_tabs_item_active') : item.classList.remove('catalog_tabs_item_active') 
      });
      let tab_category= target.dataset.categoryname;
      let num;
      allseatcovers.forEach((item)=> {
        let item_category = item.dataset.category;
        console.log(tab_category === item_category);
        function correct() {
          fadeIn(item);
        }
        let result = (tab_category === item_category) ? correct() : item.style.display = "none";
        
      });
    }
  });
  // выбор чехла
  catalog.addEventListener('click', function (e) {
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
  //показать модель
  mark.addEventListener('change', function () {
    let value = mark.value;
    modelsdiv.style.display = "block";
    console.log(value);
    models.forEach((item) => {
      let select_id = item.querySelector('select').id;
      console.log(select_id);
      let question = (value === select_id) ? item.style.display = "block" : item.style.display = "none";
    });
  });
  function fadeIn(el) {
    el.style.display = "block";
    let opacity = 0;
    el.style.opacity = opacity;
    let changeInterval = setInterval(() => {
      if (el.style.opacity >= 1) {
        clearInterval(changeInterval);
      } else {
        opacity = opacity + 0.05;
        el.style.opacity = opacity;
      }
    }, 5)
  }
  $('#phone').mask("+372 99-999-999");


});