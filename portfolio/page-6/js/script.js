$(document).ready(function(){
	// инициализация плагина
var rellax = new Rellax('.rellax'); 

// зацикленная анимация
	
		function runOpacity()
		{
	    $('.button-white').delay(3000).animate({'opacity': '0.7'}, 2000);
	     $('.button-white').animate({'opacity': '1'}, 2000); 
	      $('.button-white').show('100',runOpacity); 

	      $('.accent').delay(3000).animate({'opacity': '0.7'}, 2000);
	     $('.accent').animate({'opacity': '1'}, 2000); 
	      $('.accent').show('100',runOpacity); 

	      $('.img-thumbnail:eq(0)').delay(2000).animate({'opacity': '0.7'}, 2000);
	     $('.img-thumbnail:eq(0)').animate({'opacity': '1'}, 2000); 
	      $('.img-thumbnail:eq(0)').show('100',runOpacity);  
	      $('.img-thumbnail:eq(1)').delay(4000).animate({'opacity': '0.7'}, 2000);
	     $('.img-thumbnail:eq(1)').animate({'opacity': '1'}, 2000); 
	      $('.img-thumbnail:eq(1)').show('100',runOpacity);  
	      $('.img-thumbnail:eq(2)').delay(2000).animate({'opacity': '0.7'}, 2000);
	     $('.img-thumbnail:eq(2)').animate({'opacity': '1'}, 2000); 
	      $('.img-thumbnail:eq(2)').show('100',runOpacity);  
	      $('.img-thumbnail:eq(3)').delay(4000).animate({'opacity': '0.7'}, 2000);
	     $('.img-thumbnail:eq(3)').animate({'opacity': '1'}, 2000); 
	      $('.img-thumbnail:eq(3)').show('100',runOpacity);  
		};	
   runOpacity();


   
   // К А Л Ь К У Л Я Т О Р
// создаем переменные которые будут содержать информацию для отображения в выбранных элементах
var modelSpecs, modelPrice, modelSpecsHolder, modelPriceHolder;
modelSpecsHolder = $('#modelSpecs');
modelPriceHolder = $('#modelPrice');
modelPrice = 0;
modelSpecs = '';
// функция для суммирования значений из чекнутых элементов
function calculatePrice(){
  // ищем  input по имени sector/days/hours с чекнутым контролом   на форме mobilForm
  // и забираем из него значение 
  modelPriceSector = $('input[name=sector]:checked','#priceForm').val(); 
  modelPriceDays = $('input[name=days]:checked','#priceForm').val();
  modelPriceHours = $('input[name=hours]:checked','#priceForm').val();
  modelPriceCounts = $('input[name=counts]:checked','#priceForm').val();
//  суммирум значения из чекнутых элементов
  modelPriceSector = parseFloat(modelPriceSector);
  modelPriceDays = parseFloat(modelPriceDays);
  modelPriceHours = parseFloat(modelPriceHours);
	modelPriceCounts = parseFloat(modelPriceCounts);

  modelPrice = modelPriceSector * modelPriceDays * modelPriceHours* modelPriceCounts;
  // alert(modelPrice);
  modelPriceHolder.text(modelPrice + '  рублей/человек.');
  // с подключением функции из скрипта с пробелом после третьей цифры ничего не работает ВООБЩЕ
  // modelPriceHolder.text(addSpace(modelPrice) + '  Рублей');

   // если нужно провести округление , то применяют функцию toFixed
      // со значением знаков после запятой
  modelPriceHolder.text(modelPrice.toFixed(2)+ '  рублей в час за 1 человека.');
};
// функция для сбора названий опций, где по чекнутому инпуту выбираем его лйбл 
// и из лейбла достаем текст через text
function compileSpecs(){
  // пошагово конкатенируем строку со значениями опций пвмяти допстанции и аксессуаров
  modelSpecs = $('input[name=sector]:checked + label','#priceForm').text();
  modelSpecs = modelSpecs + ' ' + $('input[name=days]:checked + label','#priceForm').text();
  modelSpecs = modelSpecs + ' ' + $('input[name=hours]:checked + label','#priceForm').text();
  modelSpecs = modelSpecs + '  ' + $('input[name=counts]:checked + label','#priceForm').text() + ' человек ';
  // alert(modelSpecs);
  modelSpecsHolder.text(modelSpecs);
 


};
// при старте страницы
compileSpecs();
calculatePrice();
// при смене чекнутого элемента, будет запускаться функция calculatePrice
 // и будут обновляться данные в элементе отображения
$('#priceForm input').on('change',function()
   {
  calculatePrice();
  compileSpecs();
   });


});




