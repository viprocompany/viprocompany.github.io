$('.carousel-services').on('initialized.owl.carousel', function() {
	setTimeout( function() {
		carouselService()
	},500) ;	
})	; 
// ПОКА ПРОИСХОДИЛА ИНИЦИАЛИЗАЦИЯ С ЗАДЕРЖКОЙ, ЭЛЕМЕНТЫ ВЫСТРАИВАЮТСЯ РАВНОМЕРНО И С РАВНОЙ ВЫСОТОЙ  БЛОКОВ ВНУТРИ ЭЛЕМЕТА

function carouselService(){
	$('.carousel-services-item').each(function(){
		var ths = $(this),
		thsh = ths.find('.carousel-services-content').outerHeight();
				ths.find('.carousel-services-image').css('min-height',thsh);
	});
} 
carouselService();

$('.carousel-services').owlCarousel({
	loop:true,	
	nav:true,
	autoplay: true,
	autoplayTimeout: 7000,
	smartSpeed: 500, //время перемещения элемента при нажатии на стрелку право-лево
	//задаем стрелки для листания карусели и их внешний вид
	navText: ['<i class="fa fa-angle-double-left" ></i>', '<i class="fa fa-angle-double-right" ></i>'],
	responsiveClass: true,
	dots: false,
	responsive:{
		0: {
			items:  1			
		},
		800: {
			items:  2		
		},
		1100: {
			items:  3
		}
	}
});




//РЕГУЛЯРНЫМ ВЫРАЖЕНИЕМ  оборачиваем ВТОРЫЕ слова заголовков h3 span-ами в классе  carousel-services-composition
$('.carousel-services-composition .h3').each(function(){
	var ths = $(this);
	ths.html(ths.html().replace(/(\S+)\s*$/,  '<span>$1</span>'));
});
//РЕГУЛЯРНЫМ ВЫРАЖЕНИЕМ  оборачиваем ПЕРВЫЕ слова заголовков h2 span-ами в section
$('section .h2').each(function(){
	var ths = $(this);
	ths.html(ths.html().replace(/^(\S+)/, '<span>$1</span>'));
});

//Resize Window 
function onResize() {
	$('.carousel-services-content').equalHeights();
}onResize();
window.onresize=function() {onResize()};

// карусель с отзывами

$('.reviews').owlCarousel({
	loop: true,
	items: 1,
	smartSpeed: 700,
	dots: true,
	autoHeight: true,
	nav: false

});
 // партнеры
$('.partners').owlCarousel({
	loop: true,
	items: 1,
	smartSpeed: 700,
	dots: false,
	navText: ['<i class="fa fa-angle-left" ></i>', '<i class="fa fa-angle-right" ></i>'],
	nav: true,
	responsiveClass: true,
	responsive: {
		0:{
			items: 1
		},
		768:{
			items: 2
		},
		992:{
			items: 3
		},
		1200:{
			items: 3
		}
	}

});

// КНОПКА НАВЕРХ
$(window).scroll(function(){
	if ($(this).scrollTop() > $(this).height()){
		$('.top').addClass('active');
	}
	else{
		$('.top').removeClass('active');
	}
});
$('.top').click(function(){
$('html,body').stop().animate({scrollTop: 0},'slow','swing');
});
//E-mail Ajax Send
$("form.callback").submit(function() { //Change
	var th = $(this);
	$.ajax({
		type: "POST",
		url: "mail.php", //Change
		data: th.serialize()
	}).done(function() {
		$(th).find('.success').addClass('active').css('display ','flex').hide().fadeIn();
		setTimeout(function() {
			$(th).find('.success').removeClass('active').fadeOut();
			// Done Functions
			th.trigger("reset");
		}, 3000);
	});
	return false;
});


// прелоадер сайта пред загрузкой
$(window).on('load', function(){
	$('.preloader').delay(1000).fadeOut('slow');
});



