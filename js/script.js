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
//! =====Click on Carousel Cards Start=====
// $('div.owl-carousel').on('click', 'div:not(.carousel__card_active)', function() {
// 	$(this)
// 		.addClass('carousel__card_active').siblings().removeClass('carousel__card_active')
// 		// .closest('body').find('div.carousel__card').removeClass('carousel__card_active').eq($(this).index()).addClass('carousel__card');
// });
const card = document.querySelector('.carousel__card');
card.addEventListener('click', function(){
    card.classList.toggle('active');
});
//! =====Click on Carousel Cards End=====
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
const prevIcon = '<img src="./icons/arrows/arrow_left.svg" alt="prev">';
const nextIcon = '<img src="./icons/arrows/arrow_right.svg" alt="next">';
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    mouseDrag:false,
    touchDrag:false,
    slideBy:3,
    navText: [
        prevIcon,
        nextIcon
    ],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
});
//* =====Carousel End=====
// $('ul.footer__menu').on('click', 'li:not(.footer__item_active)', function() {
// 	$(this)
// 		.addClass('footer__item_active').siblings().removeClass('footer__item_active')
// 		.closest('body').find('section.block__content').removeClass('block__content_active').eq($(this).index()).addClass('block__content_active')
//         .closest('body').find('li.selector__item').removeClass('selector__item_active').eq($(this).index()).addClass('selector__item_active');
// });