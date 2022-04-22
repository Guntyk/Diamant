const list = document.querySelectorAll('.list');
function activeLink(){
    list.forEach((item) =>
    item.classList.remove('active'));
    this.classList.add('active');
}
list.forEach((item) =>
item.addEventListener('click',activeLink));
$('ul.selector__menu').on('click', 'li:not(.selector__item_active)', function() {
	$(this)
		.addClass('selector__item_active').siblings().removeClass('selector__item_active')
		.closest('body').find('div.block__content').removeClass('block__content_active').eq($(this).index()).addClass('block__content_active');
});
$('div.staff__content').on('click', 'div:not(.staff__item_active)', function() {
	$(this)
		.addClass('staff__item_active').siblings().removeClass('staff__item_active');
		// .closest('body').find('div.block__content').removeClass('block__content_active').eq($(this).index()).addClass('block__content_active');
});
VanillaTilt.init(document.querySelectorAll(".dancer__item"), {
    max: 10,
    speed: 1000,
});
VanillaTilt.init(document.querySelectorAll(".dancer__item_last"), {
    max: 5,
    speed: 1000,
});