<?php get_header();  ?>
<!-- ШАПКА -->
<div class="container s_about"  >
  <header style="background-image: url(<?php echo get_template_directory_uri();?>/img/header.jpg);">
    <div class="row justify-content-center" >
      <div class="col-9 col-lg-6 col-md-7  align-self-center offer">    
      <!-- для подстановки данных с названием товара-услуги применяем   echo get_bloginfo
      данные из Настройки - Общие настройки - 1.Название сайта 2. Краткое описание сайта -->
      <h4><?php echo get_bloginfo('name') ;?></h4>
      <p><?php echo get_bloginfo('description') ;?></p>  
      <div class="s_about">     
      <h4> <?php		echo get_cat_name(4);	?></h4>
          <!-- рубрика с одноименным названием заголовка h4 -->
          <!-- <h4 class=" text-uppercase">Коляска <span>"RETRUS"</span> Turismo  от фирмы  
          <span>"Коляскинс"</span>всего за <span>1000</span> рублей!</h4>  -->
          </div> 
      <div class="s_descr">
					<?php	echo category_description(4);?>
          <!-- <p> Универсальная коляска 2 в 1 Turismo  — это новое, современное решение, совмещает 
            последние тенденции дизайна с авторскими предложениями в области безопасности,
          комфорта и удобства детских колясок.</p>
          <p>Коляска гарантирует высокую маневренность, благодаря передним поворотным колесам,
          простоту в управлении и высокую проходимость за счет надувных колес.</p>
          <p>Многофункциональная модель Retrus Turismo 2 в 1, объединяет в себе все опции, 
          необходимые малышу с самого рождения</p>
          <p>В комплект входят москитная сетка, корзина и сумка, а также дождевик.</p> -->
					</div>

        
          

         
        </div>
        <div class="col-10 col-lg-4 col-md-10 text-center align-self-center " >
          <form  class="ajax-contact-form" id="order">               
                <div >
                  <div class="text-uppercase span">Оставьте заявку прямо сейчас</div> 
                   <label   >введите  имя</label>              
                  <input  type="text" name="user_name"  maxlength="30" size="35" placeholder="ВАШЕ ИМЯ" required pattern="^[a-zA-Zа-яА-ЯёЁІіЇїЄєҐґ']+$" >            
                  <label   >введите  телефон в формате 123...</label>
                  <input  type="text" name="user_phone"    required pattern="[0-9]{10,20}" placeholder="В ФОРМАТЕ 1234567890..." >
                  <label   >введите  почту</label>
                  <input type="email"   name="user_email"  required placeholder="EMAIL АДРЕС" >
                   <label   >введите  адрес доставки</label>              
                  <input  type="text" name="user_adress"    required placeholder="АДРЕС ДОСТАВКИ" >
                  <label   >введите  номер модели</label>
                  <input  type="text" name="text_comment"    required placeholder="МОДЕЛЬ" >
                  <button type="submit"  id="btn_submit" class="btn text-uppercase" >Отправить</button>
                </div>               
                <div class="messages"></div>
              </form>
        </div>
      </div>
    </header>
  </div>
  <!-- ТОП ПРОДАЖ -->
  <div class="container popcat" style="background-image: url(<?php echo get_template_directory_uri();?>/img/background.jpg);">
    <div class="row">
      <div class="col  text-center text-uppercase">
        <div class="title">
          <h4>ТОП ПРОДАЖ</h4>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-10 col-md-3 topic">

        <p class="text-uppercase">номер 1</p>
        <img src="img/2.jpg" class="img-thumbnail img-fluid" alt="">
        
      </div>
      <div class="col-10 col-md-3  topic">

        <p class="text-uppercase">номер 2</p>
        <img src="img/4.jpg" class="img-thumbnail img-fluid" alt="">
        
      </div>
      <div class="col-10 col-md-3  topic">

        <p class="text-uppercase">номер 3</p>
        <img src="img/7.jpg" class="img-thumbnail img-fluid" alt="">
        
      </div>
    </div>
  </div>

  <!-- ПРЕИМУЩЕСТВА -->
  <div class="container adv text-center" style="background-image: url(<?php echo get_template_directory_uri();?>/img/banner_1.jpg);">
    <div class="row justify-content-center">
      <div class="col-10 col-md-4 col-lg-3">
        <img src="<?php echo get_template_directory_uri();?>/img/img_3.png" alt="" class="img-fluid">
        <h6 class="text-uppercase">Срок службы</h6>
        <p>Долговечны благодаря алюминиевому каркасу с дополнительным амортизатором. В коляске  6 амортизаторов 
        и непробиваемые(гелевые) колеса, которые прекрасно поглощают удары, кочки и неровности дороги.</p>
      </div>      
      <div class="col-10 col-md-4 col-lg-3">
        <img src="<?php echo get_template_directory_uri();?>/img/img_4.png" alt="" class="img-fluid">
        <h6 class="text-uppercase">Качество сборки</h6>
        <p>Коляска выполнена из комбинации тканей и экокожи.  Итальянский дизайн и европейское качество.</p>
      </div>      
      <div class="col-10 col-md-4 col-lg-3">
        <img src="<?php echo get_template_directory_uri();?>/img/img_6.png" alt="" class="img-fluid">
        <h6 class="text-uppercase">Внешний вид</h6>
        <p >Итальянский дизайн и европейское качество. Современный внешний вид коляски и инновации - это главное преимущества по отношению к аналогам.  </p>
      </div>
    </div>
  </div>
  <!-- ОПИСАНИЕ -->
<div id="about" ></div>
<section>
   <div class="container reviews" style="background-image: url(<?php echo get_template_directory_uri();?>/img/background.jpg);">
      <div class="row ">
        <div class="col text-center text-uppercase">
          <div class="title">
            <h4>Описание</h4>
          </div>
        </div>
      </div>
      <div id="my-carousel" class="carousel slide my-carousel"  data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row justify-content-center ">
              <div class="col-lg-3 col-md-9 col-sm-9 col-9">
                <div class="card">            
                  <div class="card-body">
                    <h5 class="card-title">Особенности люльки коляски: </h5>
                    <p class="card-text"> Цельнопластиковый глубокий каркас люльки.
                      Москитная сетка с магнитами.
                      Матрасик из латекса.
                      Вентиляция в капюшоне.
                      Чехол на люльку оборудован дополнительным отворотом от ветра и дождя.
                      Люльку удобно переносить за ручку на капюшоне.
                      Регулировка спинки в люльке оборудована удобным внешним элементом. ..........  .........

                    </p>          
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-9 col-sm-9 col-9">
                <div class="card">            
                  <div class="card-body">
                    <h5 class="card-title">Прогулочный  блок: </h5>
                    <p class="card-text"> Удобная регулировка спинки, она регулируется в 3 положениях,
                     имеется полностью лежачее положение 180” градусов.
                     Регулировка подножки в 4-х положениях.
                     Съемный барьер выполнен из практичной эко-кожи.
                     Вентиляционное окошко – большого размера.
                     Пятиточечные ремни безопасности.  ...............    .........



                   </p>
                 </div>
               </div>
             </div> 

           </div>
         </div>
         <div class="carousel-item ">
          <div class="row justify-content-center ">
            <div class="col-lg-3 col-md-9 col-sm-9 col-9">
              <div class="card">            
                <div class="card-body">
                  <h5 class="card-title">Особенности рамы коляски: </h5>
                  <p class="card-text">Комплект Retrus Turismo 2 в 1 состоит из 
                    алюминиевой рамы с 6-ю амортизаторами и колесами, люльки (первого блока) 
                    и прогулочного блока, и автолюльки (в комплекте с адаптерами под коляску,
                    которые позволят установить автолюльку на раму коляски). На раму коляска 
                  крепится корзина для покупок на молнии, непромокаемая, легко чистящая. </p>          
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-9 col-sm-9 col-9">
              <div class="card">            
                <div class="card-body">
                  <h5 class="card-title">Вес и габариты:</h5>
                  <p class="card-text"> Ширина шасси: 59 см.
                    Диаметр колес: 25,2 см.
                    Вес люльки: 6.5 кг.
                    Регулировка подножки в 4-х положениях.
                    Съемный барьер выполнен из практичной эко-кожи.
                    Вентиляционное окошко – большого размера.
                    Пятиточечные ремни безопасности с мягкими накладками.
                  </p>  

                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="carousel-item ">
          <div class="row justify-content-center ">

            <div class="col-lg-3 col-md-9 col-sm-9 col-9">
              <div class="card">            
                <div class="card-body">
                  <h5 class="card-title">Универсальная коляска : </h5>
                  <p class="card-text">Коляска Retrus Turismo 2 в 1 (цвет 7) - является 
                    одной из последних коллекций, выполненные польской компанией Retrus в этом году.
                    Современный внешний вид коляски и инновации - это главное преимущества модели
                    Retrus Turismo 2 в 1 по отношению к аналогам. Коляска выполнена из комбинации 
                  тканей и экокожи. </p>
                </div>
              </div>
            </div> 
            <div class="col-lg-3 col-md-9 col-sm-9 col-9">
              <div class="card">            
                <div class="card-body">
                  <h5 class="card-title">Опции:</h5>
                  <p class="card-text">Отличным нововведением идёт в комплекте практичная сумка – Рюкзак!
                   Выполнена по итальянским дизайнам, в ней много отделов, кармашков – они помогут 
                   разместить всё самое необходимое, Материал – эко-кожа с различными видами молний: 
                 золотая или серебряная. Рюкзак можно повесить на ручку коляски. </p>          
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
     <a href="#my-carousel" class="carousel-control-prev" data-slide="prev">
       <span class="carousel-control-prev-icon" ></span>        
     </a>
     <a href="#my-carousel" class="carousel-control-next"  data-slide="next">
      <span class="carousel-control-next-icon" ></span>         
    </a>
  </div>
</div>
</section>


<!-- КАТАЛОГ -->

<section>     <div id="catalog"></div>    </section>        
<div class="row"></div>
<div class="container popgoods" style="background-image: url(<?php echo get_template_directory_uri();?>/img/background.jpg);">
 <div class="row">
  <div class="col text-center text-uppercase">
    <div class="title">
      <h4>РАСЦВЕТКИ</h4>
    </div>
  </div>
</div>
<div class="row  text-center justify-content-center">
  <div class="col-10 col-sm-10 col-md-5 col-lg-2">
    
    
    <button type="button" class="btn bg-light" data-toggle="modal" 
    data-target="#Modal1"><img src="img/1.jpg" class=" img-thumbnail img-fluid" alt="коляска-1"></button>
   
    <h6 class=" text-bold">Коляска арт. 1</h6>
    <p>1000 Pуб.</p> <div class="modal fade " id="Modal1">
      <div class="modal-dialog  modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Коляска 1</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="img/1.jpg" class="img-fluid"  alt="коляска-1">
          </div>						
        </div>
      </div>
    </div>
  </div>
  <div class="col-10 col-sm-10 col-md-5 col-lg-2">
    
    
    <button type="button" class="btn bg-light" data-toggle="modal"
     data-target="#Modal2"><img src="img/2.jpg" class=" img-thumbnail img-fluid"  alt="коляска-2"></button>
    <h6 class=" text-bold">Коляска арт. 82</h6>
    <p>1000 Pуб.</p>
    <div class="modal fade" id="Modal2">
      <div class="modal-dialog  modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Коляска 2</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="img/2.jpg" class="img-fluid"  alt="коляска-2">
          </div>						
        </div>
      </div>
    </div>
  </div>
  <div class="col-10 col-sm-10 col-md-5 col-lg-2">
    
    
    <button type="button" class="btn bg-light" data-toggle="modal"
     data-target="#Modal3"><img src="img/3.jpg" class=" img-thumbnail img-fluid"  alt="коляска-3"></button>
    <h6 class=" text-bold">Коляска арт. 3</h6>
    <p>1000 Pуб.</p>
    <div class="modal fade " id="Modal3">
      <div class="modal-dialog  modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Коляска 3</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="img/3.jpg" class="img-fluid"  alt="коляска-3">
          </div>						
        </div>
      </div>
    </div>
  </div>
  <div class="col-10 col-sm-10 col-md-5 col-lg-2">
    
    
    <button type="button" class="btn bg-light" data-toggle="modal" 
    data-target="#Modal4"><img src="img/4.jpg" class=" img-thumbnail img-fluid"  alt="коляска-4"></button>
    <h6 class=" text-bold">Коляска арт. 4</h6>
    <p>1000 Pуб.</p>
    <div class="modal fade " id="Modal4">
      <div class="modal-dialog  modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Коляска 4</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="img/4.jpg" class="img-fluid"  alt="коляска-4">
          </div>						
        </div>
      </div>
    </div>
  </div>
</div>                     
<div class="row text-center justify-content-center">
  <div class="col-10 col-sm-10 col-md-5 col-lg-2">
    
   
    <button type="button" class="btn bg-light" data-toggle="modal" 
    data-target="#Modal5"><img src="img/5.jpg" class=" img-thumbnail img-fluid"  alt="коляска-5"></button>
    <h6 class=" text-bold">Коляска арт. 5</h6>
    <p>1000 Pуб.</p>
    <div class="modal fade" id="Modal5" tabindex="-1" role="dialog" aria-labelledby="ModalLabel5" aria-hidden="true">
      <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ModalLabel5">Коляска 5</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="img/5.jpg" class="img-fluid"  alt="коляска-5">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-10 col-sm-10 col-md-5 col-lg-2">
       
    <button type="button" class="btn bg-light" data-toggle="modal" data-target="#Modal6" >
      <img src="img/6.jpg" class=" img-thumbnail img-fluid"  alt="коляска-6"> </button>
    <h6 class=" text-bold">Коляска арт. 6</h6>
    <p>1000 Pуб.</p>
    <div class="modal fade" id="Modal6" tabindex="-1" role="dialog" aria-labelledby="ModalLabel6" aria-hidden="true">
      <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ModalLabel6">Коляска 6</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="img/6.jpg" class="img-fluid"  alt="коляска-6">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-10 col-sm-10 col-md-5 col-lg-2">
    
    
    <button type="button" class="btn bg-light" data-toggle="modal" data-target="#Modal7">
        <img src="img/7.jpg" class=" img-thumbnail img-fluid"  alt="коляска-7"></button>
    <h6 class=" text-bold">Коляска арт. 7</h6>
    <p>1000 Pуб.</p>
    <div class="modal fade" id="Modal7" tabindex="-1" role="dialog" aria-labelledby="ModalLabel7" aria-hidden="true">
      <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ModalLabel7">Коляска 7</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="img/7.jpg" class="img-fluid"  alt="коляска-7">
          </div>
        </div>
      </div>
    </div>
  </div>
 
     
  <div class="col-10 col-sm-10 col-md-5 col-lg-2">       
    <button type="button" class="btn bg-light" data-toggle="modal" data-target="#Modal8"><img src="img/8.jpg" class=" img-thumbnail img-fluid"  alt="коляска-8"></button>
    <h6 class=" text-bold">Коляска арт. 8</h6>
    <p>1000 Pуб.</p>
    <div class="modal fade" id="Modal8" tabindex="-1" role="dialog" aria-labelledby="ModalLabel8" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ModalLabel8">Коляска 8</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="img/8.jpg" class="img-fluid"  alt="коляска-6">
          </div>
        </div>
      </div>
    </div>
  </div>   
</div>

</div>

<!-- ЗАКАЗАТЬ  -->
<div class="container form_zamer text-white" style="background-image: url(<?php echo get_template_directory_uri();?>/img/fiedback.png);">
  <div class="row text-center justify-content-center">
    <div class=" col-sm-11 col-lg-3 align-self-center text-left">
      <div class="col ">
        <h5 class="text-uppercase">Закажите сейчас</h5>
        <p>Наши специалисты примут ваш заказ и перезвонят о доставке</p>
      </div>      
      <div class="col text-center">          
       <a href="#order"  class="btn text-uppercase" >
        
		 Заказать сейчас
       </a> 
     </div>      
   </div>
   <div class="col-5 col-sm-5 col-md-5 col-lg-3 align-self-center">
    <img src="<?php echo get_template_directory_uri();?>/img/img_1.png" alt="" class="img-fluid">
    <h6 class="text-uppercase">Выгодно</h6>
    <p>Заказав  сегодня , вы получите скидку 10% </p>
  </div>
  <div class="col-5 col-sm-5 col-md-5 col-lg-3 align-self-center">
   <img src="<?php echo get_template_directory_uri();?>/img/img_2.png" alt="" class="img-fluid">
   <h6 class="text-uppercase">Быстро</h6>
   <p>Заказав товар утром, вечером вы получите заказ </p>
 </div>
</div>
</div>

<?php get_footer();  ?>