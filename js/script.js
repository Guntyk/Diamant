const list = document.querySelectorAll('.list');
function activeLink(){
    list.forEach((item) =>
    item.classList.remove('active'));
    this.classList.add('active');
}
list.forEach((item) =>
item.addEventListener('click',activeLink));
//!=====Selector Menu Start=====
$('ul.selector__menu').on('click', 'li:not(.selector__item_active)', function() {
	$(this)
		.addClass('selector__item_active').siblings().removeClass('selector__item_active')
		.closest('body').find('section.block__content').removeClass('block__content_active').eq($(this).index()).addClass('block__content_active');
});
//!=====Selector Menu Start=====
//!=====Carousel Start=====
new Swiper('.staff-slider', {
    effect: 'slide',
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
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
    loop: true,
    simulateTouch: false,
    spaceBetween: 100,
    speed: 1000,
    preloadImages: false,
    initialSlide: 6,
    lazy: {
        loadOnTransitionStart: false,
        loadPrevNext: true,
    },
    watchSlidesProgress: true,
    watchSlidesVisibility: true,
    breakpoints: {
        320: {
            speed: 600,
            slidesPerView: 1,
            slidesPerGroup: 1,
        },
        992: {
            slidesPerView: 3,
            slidesPerGroup: 3,
        }
    },
});

new Swiper('.comment-slider', {
    effect: 'slide',
    cardsEffect: {
        slideShadows: false
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
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
    grabCursor: true,
    preloadImages: false,
    lazy: {
        loadOnTransitionStart: false,
        loadPrevNext: true,
    },
    breakpoints: {
        320: {
            touchRatio: 1,
        }
    }
});
//!=====Carousel End=====
//!=====More Button Start=====
const readMoreBtn = document.querySelector('.read-more-btn');
const readMoreBtn1 = document.querySelector('.read-more-btn1');
const details = document.querySelector('.details');
const details1 = document.querySelector('.details1');

readMoreBtn.addEventListener('click', (e)=>{
    details.classList.toggle('more');
    if(readMoreBtn.innerText === "Детальніше...")
    {
        readMoreBtn.innerText = "Сгорнути";
    }else {
        readMoreBtn.innerText ="Детальніше..."; 
    }
});
readMoreBtn1.addEventListener('click', (e)=>{
    details1.classList.toggle('more');
    if(readMoreBtn1.innerText === "Детальніше...")
    {
        readMoreBtn1.innerText = "Сгорнути";
    }else {
        readMoreBtn1.innerText ="Детальніше..."; 
    }
});
document.addEventListener("click", function (e) {
    const flip = e.target.closest(".descr-btn");
    const card = e.target.closest('.card__inner');
    if (flip){
        card.classList.toggle('is-flipped');
    } 
});
//!=====More Button End=====
//!=====Location Start=====
$('ul.location__list').on('click', 'li:not(.location__mark_active)', function() {
	$(this)
		.addClass('location__mark_active').siblings().removeClass('location__mark_active')
		.closest('body').find('iframe.location__map').removeClass('location__map_active').eq($(this).index()).addClass('location__map_active');
});
//!=====Location End=====
//!=====Footer Selector Menu Start=====
$('ul.footer__menu__selector').on('click', 'li:not(.selector__item_active)', function() {
	$(this)
	    .addClass('selector__item_active').siblings().removeClass('selector__item_active')
		.closest('body').find('section.block__content').removeClass('block__content_active').eq($(this).index()).addClass('block__content_active')
        .closest('body').find('li.selector__item').removeClass('selector__item_active').eq($(this).index()).addClass('selector__item_active');
});
//!=====Footer Selector Menu End=====
// !=====Pages Gallery Start=====
Fancybox.bind('[data-fancybox="gallery"]', {
    Thumbs: {
        Carousel: {
        fill: false,
        center: true,
        },
    },
});
// !=====Pages Gallery End=====
// !=====Form Submit Start=====
// const form = document.getElementById('form');
// form.addEventListener('submit', (event) => {
//     event.preventDefault();
//     form.reset();
// })
// !=====Form Submit End=====