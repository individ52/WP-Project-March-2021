window.addEventListener('DOMContentLoaded', function() {
  $('.nav_burger').click(function(){
    $('.overlay').slideToggle('show');
});
$('.menu-item').find('a').click(function() {
    $('.overlay').slideUp("slow");
});
// materials tabs
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
// scroll of links
$('a[href^="#"').on('click', function() {

  let href = $(this).attr('href');
  $('html, body').animate({
      scrollTop: $(href).offset().top
  });
  return false;
});
// вывод модального окна кнопкой
$('.btn_offer').on('click', function() {
  $('.overback').fadeIn();
  $('.modal').fadeIn();
});
// вывод модального окна в форме
$('a.order_form_check_link').on('click', function() {
  $('.overback').fadeIn();
  $('.modal').fadeIn();
});
// Закрытие модального окна
$('.close').on('click', function() {
  $('.overback').fadeOut();
  $('.modal').fadeOut();

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
    // settings for form (deleting and showing text)
    document.querySelector('.order_form_check').querySelector('label').querySelector('span').innerHTML = '';
    document.querySelector('.order_form_btn').value = form_PH.btnPH;
    document.querySelector('#install_label').innerHTML = form_PH.installPH;
    mark.getElementsByTagName('option')[0].innerHTML = form_PH.markPH;
    // settigns for placeholders and inputs
    mark.getElementsByTagName('option')[0].setAttribute('disabled', "true");
    document.querySelector('#order_name').setAttribute('placeholder', form_PH.namePH);
    document.querySelector('#phone').setAttribute('placeholder', form_PH.phonePH);
    seatcoverV.setAttribute('placeholder', form_PH.seatcoverPH);
    // modal form
    document.querySelector('#modal_name').setAttribute('placeholder', form_PH.namePH);
    document.querySelector('#modal_tel').setAttribute('placeholder', form_PH.phonePH);
    document.querySelector('.btn_modal').value = form_PH.btnPH;
    let btn_order = document.querySelector('.order_form_btn');
    btn_order.classList.add('btn');
    let allSections = modelsdiv.querySelectorAll('select');
    allSections.forEach((item)=> {
      let firstOption = item.querySelectorAll('option')[0];
        firstOption.innerHTML = form_PH.modelPH;
        firstOption.setAttribute('disabled', "true");
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
  tabs[2].classList.add('catalog_tabs_item_active');
  allseatcovers.forEach((item)=> {
    let first_category = tabs[2].dataset.categoryname;
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
        function correct() {
          item.style.display = "block"
        }
        let result = (tab_category === item_category) ? correct() : item.style.display = "none";a
        
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
        let title = clone.querySelector(".catalog_items_item_desc").querySelector('p') ? clone.querySelector(".catalog_items_item_desc").querySelector('p').innerHTML : clone.querySelector(".catalog_items_item_desc").innerHTML; 
        seatcoverV.value = title;
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
      if (document.querySelector('.order_cardselected')) document.querySelector('.order_cardselected').remove();
      formorder.appendChild(clone);
      let title = clone.querySelector(".catalog_items_item_desc").querySelector('p') ? clone.querySelector(".catalog_items_item_desc").querySelector('p').innerHTML : clone.querySelector(".catalog_items_item_desc").innerHTML; 
      seatcoverV.value = title;
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
    models.forEach((item) => {
      let select_id = item.querySelector('select').id;
      let question = (value === select_id) ? item.style.display = "block" : item.style.display = "none";
    });
  });
 
  $('#phone').mask("+372 99-999-999");


});