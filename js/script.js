const list = document.querySelectorAll('.list');
function activeLink(){
    list.forEach((item) =>
    item.classList.remove('active'));
    this.classList.add('active');
}
list.forEach((item) =>
item.addEventListener('click',activeLink));
//* =====Selector Menu Start=====
$('ul.selector__menu').on('click', 'li:not(.selector__item_active)', function() {
	$(this)
		.addClass('selector__item_active').siblings().removeClass('selector__item_active')
		.closest('body').find('section.block__content').removeClass('block__content_active').eq($(this).index()).addClass('block__content_active');
});
//* =====Selector Menu Start=====
//TODO =====Click on Carousel Cards Start=====
document.addEventListener("click", function (e) {
    const card = e.target.closest(".card__inner")
    if (card){
      card.classList.toggle('is-flipped');
    } 
  });
const social = document.querySelector(".social");
social.addEventListener('click' , function (e) {
  e.stopPropagation();
  });
//TODO =====Click on Carousel Cards End=====
//* =====Responsive Cards Start=====
VanillaTilt.init(document.querySelectorAll(".dancer__item"), {
    max: 10,
    speed: 1000,
});
VanillaTilt.init(document.querySelectorAll(".dancer__item_last"), {
    max: 5,
    speed: 1000,
});
//* =====Responsive Cards End=====
//* =====Carousel Start=====
// const prevIcon = '<img src="./icons/arrows/arrow_left.svg" alt="prev">';
// const nextIcon = '<img src="./icons/arrows/arrow_right.svg" alt="next">';
new Swiper('.staff-slider', {
    effect: 'slide',
    // coverflowEffect: {
    //     slideShadows: false
    // },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },
    mousewheel: {
        eventsTarget: ".staff-slider"
    },
    keyboard: {
        enabled: true,
        onlyInViewport: true,
        pageUpDown: true,
    },
    slidesPerView: 3,
    slidesPerGroup: 3,
    loop: true,
    simulateTouch: false,
    spaceBetween: 100,
    speed: 1000,
    preloadImages: false,
    lazy: {
        loadOnTransitionStart: true,
        loadPrevNext: false,
    },
    watchSlidesProgress: true,
    watchSlidesVisibility: true,
});

new Swiper('.comment-slider', {
    effect: 'cards',
    cardsEffect: {
        slideShadows: false
    },
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
        clickable: true
    },
    keyboard: {
        enabled: true,
        onlyInViewport: true,
        pageUpDown: true,
    },
    touchRatio: 2,
    speed: 500,
    initialSlide: 2,
    grabCursor: true
});
// * =====Carousel End=====
//* =====Gallery Start=====
jQuery(document).ready(($)=>{
    // документ загружен!
    $('.element-1').lightGallery({
    });
});
//* =====Gallery End=====
// $('ul.footer__menu').on('click', 'li:not(.footer__item_active)', function() {
// 	$(this)
// 		.addClass('footer__item_active').siblings().removeClass('footer__item_active')
// 		.closest('body').find('section.block__content').removeClass('block__content_active').eq($(this).index()).addClass('block__content_active')
//         .closest('body').find('li.selector__item').removeClass('selector__item_active').eq($(this).index()).addClass('selector__item_active');
// });