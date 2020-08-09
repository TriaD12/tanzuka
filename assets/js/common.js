$(function() {

	/*Маска для инпута*/
	var telInp = $('input[type="tel"]');
	telInp.each(function(){
		$(this).mask("+7 (999) 999-99-99");
	});

	var swiper = new Swiper('.swiper-container', {
		slidesPerView: 1.2,
		spaceBetween: 30,
		freeMode: true,
	});

});