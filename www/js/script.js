							// корзина LOCAL STORAGE
							var cart = {};
$(document).ready(function(){
						// ОЧИСТКА ОБЪЕКТА localStorage при загрузке
						  localStorage.clear();
// ОЧИСТКА ЗНАЧЕНИЯ НА КНОПКЕ ДЛЯ ЗАКАЗА
$('#count_1').val('');
// ОЧИСТКА КОРЗИНЫ ОТ ТОВАРОВ
$('.card_order').empty();
// ЗАГРУЗКА ТОВАРОВ НА СТРАНИЦУ
	LoadProducts();
// УДАЛЕНИЕ ТОВАРОВ ИЗ КОРЗИНЫ для localStorage. Р А Б О Т А Е Т  НЕ ПРАВИЛЬНО
$('.close_order').on('click', deletOrder);


function LoadProducts(){   console.log('строка: '); 
// загрузка товара на страницу из JSON
$.getJSON( "products.json", function( data ) {	
		// типы товаров  верхнего инпута
	outType ="";
	// переменная атрибут артикул по его значению  определяем группы товара в селекте
	articul = "";
	search = "";
	// выводим типы товаров  верхнего инпута
	for (var key in data){ 
		outType+='<option class="option" data-art="'+key+'">'+data[key]['name']+'</option>';	
      
		}
       
// отображение списка типов товара в опциях верхнего инпута
$(".type_1").html(outType); 
  if(data[key]['name'] != undefined);
	{   	  
		$(".type_1").empty();
	}
	$(".type_1").html(outType);
	
   
 //  выводим по клику типы товаров
$('.type_1 option').on('click',showGood);


function showGood(){
	// переменная атрибут артикул по его значению  определяем группы товара в селекте
	articul = $(this).attr('data-art');
	console.log(articul);   
	// переменная поля моделей товара
	var outModel ="";	
	//  вывод моделей товара в зависимости от типа товара  
	for (var key in data){ 	
	// outModel = data[articul].items.name;	
	$.each(data, function(key, val){
	// создаём массив названий моделей в выпападющем списке
	var outModel = data[articul].items.map(function(a) {return a.name;});
	// заполняем селекты для моделей опциями значений моделей при клике на тип товара
	$('.model_1').empty();

  $(outModel).each(function(i, p) {
	$('.model_1').append($('<option></option>').val(i).html(p));
});
	// $.each(outModel, function(i, p) {
	// $('.model_1').append($('<option></option>').val(i).html(p));
	// });
	$('.model_1 option').on('click',showModel);   		
	});
	};
}; 

// КОЛИЧЕСТВО ЕДИНИЦ ПРИ ЗАКАЗЕ
	objCount = "";
	$('#count_1').on('keyup',function(){
		objCount = $('#count_1').val();
		console.log(objCount);
	});
  
// ВЫВОД ИНФОРМАЦИЮ О МОДЕЛИ
$('.model_1 option').on('click', showModel);
  outDesc ="";
  outPrice = "";
  outImg = "";  

function showModel(){
// переменная атрибут артикул. по его значению  определяем модель товара в селекте
	articul_model = $(this).attr('value');
	console.log(articul_model);     

	//  ОБЪЕКТ ДЛЯ ОБРАЩЕНИЯ К ИМЕНИ ТОВАРА
	objName = data[articul].items[articul_model].name;
		// ОБЪЕКТ ДЛЯ ПОЛУЧУНИЯ ОПИСАНИЯ ТОВАРА
	objDesc = data[articul].items[articul_model].desc;
	// ВЫВОД ОПИСАНИЯ
	outDesc ='<span data-desc="'+objName+'">'+objDesc+'</span>'; 	
	// вывод описание выбранной модели 
	$("#desc_1").html(outDesc);	
	// ОБЪЕКТ ДЛЯ ПОЛУЧЕНИЯ  ЦЕНЫ
	objPrice = data[articul].items[articul_model].price;
	// ВЫВОД ЦЕНЫ
	outPrice = '<span class="red" data-price="'+objPrice+'">'+objPrice+' <small>бел. руб.</small></span>';
	// вывод ценs выбранной модели 
	$("#price_1").html(outPrice.replace(/(\d)(?=(\d{3})+(\D|$))/g, '$1 '));
	//  ОБЪЕКТ ДЛЯ ОБРАЩЕНИЯ К ИМЕНИ КАРТИНКИ
	objImage = data[articul].items[articul_model].img; 
	// console.log(objImage);			  	     
	outImg ='<img  data-img="'+objName+'" src="img/'+objImage+'">';
	// вывод картинк 
	$("#img_1").html(outImg);	
	
	// ВЫВОД КНОПКИ ДЛЯ ЗАКАЗА 
	
	outBtn = '<button class="add" data-order-name="'+objName+'" data-order-price="'+objPrice+'" data-order-img="'+objImage+'">Добавить в заказ</button>';
	$(".order").html(outBtn);	

	$('button.add').on('click', addToOrder);
};
});
};
// // ФУНКЦИЯ ДОБАВЛЕНИЯ ТОВАРА В КОРЗИНУ
function addToOrder (){    
	orderImage = $(this).attr('data-order-img');	
	orderName = $(this).attr('data-order-name');
	orderCount = $('#count_1').val();
	orderPrice = $(this).attr('data-order-price');

	objCard = "";
	objCard +='<div class="card_order"><div class="card_order_image image-thumbnail"><img "style="height: 50px;"  src="img/'+orderImage+'"></div>';
	objCard += '<div class="card_order_name"><h4 class="h4">'+orderName+'</h4></div>';
	objCard += '	<div class="card_order_count"><span>'+orderCount+' шт.</span></div>';
	objCard += '<div class="card_order_price red"><span  >'+orderPrice+' <small> руб.</small></span></div>';
	objCard += '<a class="close_order " data-sum="'+orderCount*orderPrice+'"></a></div>	';
   	
// 	// ДОБАВИТЬ ЗАКАЗ В КОРЗИНУ ПРИ ЗАПОЛНЕННОМ ИНПУТЕ
	if(orderCount>0){
	$('.card_order_2').after(objCard);
  

							  // К О Н С О Л Ь Н Ы Й ВАРИАНТ LOCAL STORAGE . ДОБАВЛЯЕТ ПРАВИЛЬНО
										this.disabled = true; // блокируем кнопку на время операции с корзиной
										var sumOrder = orderCount*orderPrice;            
										if (cart[sumOrder]!=undefined) {
										cart[sumOrder]++;
										}
										else {
										cart[sumOrder] = 1;
										}			
										// ????????  cart[sumOrder] = - cart[sumOrder];
										localStorage.setItem('cart', JSON.stringify(cart) );
										console.log('localStorage добавление:',cart);
										checkCart(); 
										if(!localStorage.setItem('cart', JSON.stringify(cart) )){ // Обновляем данные в LocalStorage
										this.disabled = false; // разблокируем кнопку после обновления LS

$('.close_order').on('click', deletOrder);
	}  
}
	}
addToOrder();

//КАЛЬКУЛЯТОР ПРОСТОЙ 
$(document).on('click',calculate );
function calculate(){ 
// МАССИВ заказов в корзине
 var money = [];
$('.close_order').each(function(indx, element){
  money.push($(element).attr('data-sum'));
});
console.log(money);
// СУММА Денег из массива
  summa = 0;
$.each(money,function(){summa+=parseFloat(this) || 0;});
console.log(summa);
// ВЫВОД СУММЫ НА СТРАНИЦУ
$('#summ').html(summa);
// ЗДЕСЬ ФУНКЦИЯ ВСТАВКИ ПРОБЕЛА ВЫДАЁТ ОШИБКУ
 // $('#summ').html(summa.replace(/(\d)(?=(\d{3})+(\D|$))/g, '$1 '));
   
   
};
calculate(); 




// ФУНКЦИЯ- УДАЛИТЬ ЗАКАЗ ИЗ КОРЗИНЫ
function deletOrder(){	
								// К О Н С О Л Ь Н Ы Й ВАРИАНТ LOCAL STORAGE . ОТНИМАЕТ НЕ  ПРАВИЛЬНО
								var sumOrder = 	$(this).attr('data-sum');
								if (cart[sumOrder]!=undefined) {
								cart[sumOrder]--;
								}
									 
								localStorage.setItem('cart', JSON.stringify(cart) );
								console.log('localStorage удаление: ',cart);
$(this).parent().remove();	
checkCart();
}	;
deletOrder();
    
						   //К О Н С О Л Ь Н Ы Й ВАРИАНТ LOCAL STORAGE НАЛИЧИЕ ТОВАРА В ДЕНЕЖНОМ ВЫРАЖЕНИИ .ОБЪЕКТ.
							function checkCart(){
							    //проверить наличие  localStorage;
							    if ( localStorage.getItem('cart') != null) {
							        cart = JSON.parse (localStorage.getItem('cart'));        
							    }
							    console.log('localStorage просмотр корзины: ',JSON.parse (localStorage.getItem('cart')));
							}
							checkCart();
  
  
  
  //ПОИСК МОДЕЛИ ДОСТУЧАТЬСЯ ДО ОПШИНОВ В СЕЛЕКТЕ                          
//      $('.type_1 .option').change(function(e){
//         alert('dsfgdfbgulkugl');
//    });  
//    $('.type_1 .option').trigger('change');                          
//                            
//$('.type_1 .option').on('change',function(){
//    alert('dsfgdfbgulkugl');
//
//});
//





$(document).ready(function(event) {
    $('.type_1 option').click(function(e){
         $('.type_1 option').attr('data-atr="0"');
        // alert('событие клик по опшину 1 select');
     }).click();
});
$(document).ready(function(event) {
    $('.model_1 option').click(function(e){
         alert('событие клик по опшину 2 select');
     }).focus();
});























});	

  	// не  получилось создать объект корзины, не достучался до моделей товара
  // default
 //  var out = '';
	// for (var key in data){ 
	// 	out += '<header>Выберите товар для заказа</header>';
	// 	out += '<article><div class="subitems">';
	// 	out += '<select class="type_1">'+outType+'</select>' ;
	// 	out += '<select class="model_1"></select>' ;
	// 	out += 	'<p>Описание: </p>' ;
	// 	out += '<span id="desc_1">'+data[0].items[0].desc+'</span>';
	// 	out += '<p>Цена: </p>' ;
	// 	out += '<span  data-price="'+data[0].items[0].price+'">'+data[0].items[0].price+' <small>бел. руб.</small></span>'
	// 	out += '<p>Количество: </p>' ;
	// 	out += '<label for="count_1"></label><input type="text" id="count_1">' ;
	// 	out += '</div></article>' ;
	// 	out += '<aside class="image-thumbnail " id="img_1"><img style="height: 300px; margin-left:0;" data-img="'+data[0].items[0].name+'" src="img/'+data[0].items[0].img+'"></aside>' ;	
	// 	out +=  '<footer class="order"><button class="add" data-order="'+data[0].items[0].name+'" value="Добавить в заказ">Добавить в заказ</button></footer>' ;
	// }
	//  $(".products").html(out);