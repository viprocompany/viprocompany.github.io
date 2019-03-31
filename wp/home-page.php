<?php 
/*
template name: Главная
*/

?>
<?php get_header();  ?>
<!-- ШАПКА -->
<div class="container s_about"  >
  <header style="background-image: url(<?php the_field('background_header');?>);">
    <div class="row justify-content-center" >
      <div class="col-9 col-lg-6 col-md-7  align-self-center offer">    
      <!-- для подстановки данных с названием товара-услуги применяем   echo get_bloginfo
      данные из Настройки - Общие настройки - 1.Название сайта 2. Краткое описание сайта -->
      <h4><?php echo get_bloginfo('name') ;?></h4>
      <p><?php echo get_bloginfo('description') ;?></p>  
      <div class="s_about">  
      <h4><?php the_field('title_site');?></h4>   
      <!-- <h4> -- WebDesignMaster variant через название рубрики <?php		echo get_cat_name(4);	?></h4> -->
          <!-- рубрика с одноименным названием заголовка h4 -->
          <!-- <h4 class=" text-uppercase">Коляска <span>"RETRUS"</span> Turismo  от фирмы  
          <span>"Коляскинс"</span>всего за <span>1000</span> рублей!</h4>  -->
          </div> 
      <div class="s_descr">
          <?php the_field('description_site');?>
					<!-- WebDesignMaster variant через описание рубрики <?php	echo category_description(4);?> -->
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
  <div class="container popcat" style="background-image: url(<?php the_field('background_image');?>);">
    <div class="row">
      <div class="col  text-center text-uppercase">
        <div class="title">
          <h4>ТОП ПРОДАЖ</h4>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-10 col-md-3 topic">

        <p class="text-uppercase"><?php the_field('popcat_top_1');?></p>
        <img src="<?php the_field('popcat_img_1');?>" class="img-thumbnail img-fluid" alt="топ продаж 1">
        
      </div>
      <div class="col-10 col-md-3  topic">

      <p class="text-uppercase"><?php the_field('popcat_top_2');?></p>
        <img src="<?php the_field('popcat_img_2');?>" class="img-thumbnail img-fluid" alt="топ продаж 2">
        
      </div>
      <div class="col-10 col-md-3  topic">

      <p class="text-uppercase"><?php the_field('popcat_top_3');?></p>
        <img src="<?php the_field('popcat_img_3');?>" class="img-thumbnail img-fluid" alt="топ продаж 3">
        
      </div>
    </div>
  </div>

  <!-- ПРЕИМУЩЕСТВА -->
  <div class="container adv text-center" style="background-image: url(<?php echo get_template_directory_uri();?>/img/banner_1.jpg);">
    <div class="row justify-content-center">
      <div class="col-10 col-md-4 col-lg-3">
        <img src="<?php the_field('icon_adv_1');?>" alt="" class="img-fluid">
        <h6 class="text-uppercase"><?php the_field('title_1');?></h6>
        p><?php the_field('description_adv_1');?></p>
      </div>      
      <div class="col-10 col-md-4 col-lg-3">
        <!-- <img src="img/img_4.png" alt="" class="img-fluid"> -->
        <img src="<?php the_field('icon_adv_2');?>" alt="" class="img-fluid">
        <!-- <h6 class="text-uppercase">Качество сборки</h6> -->
        <h6 class="text-uppercase"> <?php the_field('title_2');?></h6>
        <!-- <p>Коляска выполнена из комбинации тканей и экокожи.  Итальянский дизайн и европейское качество.</p> -->
        <p><?php the_field('description_adv_2');?></p>
      </div>      
      <div class="col-10 col-md-4 col-lg-3">
        <img src="<?php the_field('icon_adv_3');?>" alt="" class="img-fluid">
        <h6 class="text-uppercase"> <?php the_field('title_3');?></h6>
        p><?php the_field('description_adv_3');?></p>
      </div>
    </div>
  </div>

  <!-- ОПИСАНИЕ -->
<div id="about" ></div>
<section>
   <div class="container reviews" style="background-image: url(<?php the_field('background_image');?>);">
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
                    <h5 class="card-title"><?php the_field('title_instruction_1');?></h5>
                    <p class="card-text"><?php the_field('description_instruction_1');?> </p>            
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-9 col-sm-9 col-9">
                <div class="card">            
                  <div class="card-body">
                    <h5 class="card-title"><?php the_field('title_instruction_2');?></h5>
                    <p class="card-text"><?php the_field('description_instruction_2');?> </p> 
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
                  <h5 class="card-title"><?php the_field('title_instruction_3');?></h5>
                  <p class="card-text"><?php the_field('description_instruction_3');?> </p>          
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-9 col-sm-9 col-9">
              <div class="card">            
                <div class="card-body">
                  <h5 class="card-title"><?php the_field('title_instruction_4');?></h5>
                  <p class="card-text"><?php the_field('description_instruction_4');?> </p> 
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
                  <h5 class="card-title"><?php the_field('title_instruction_5');?></h5>
                  <p class="card-text"><?php the_field('description_instruction_5');?> </p> 
                </div>
              </div>
            </div> 
            <div class="col-lg-3 col-md-9 col-sm-9 col-9">
              <div class="card">            
                <div class="card-body">
                  <h5 class="card-title"><?php the_field('title_instruction_6');?></h5>
                  <p class="card-text"><?php the_field('description_instruction_6');?> </p>          
               </div>
             </div>
           </div>
           <!-- <div class="col-lg-3 col-md-9 col-sm-9 col-9">
              <div class="card">            
                <div class="card-body">
                  <h5 class="card-title">Опции:</h5>
                  <p class="card-text">Отличным нововведением идёт в комплекте практичная сумка – Рюкзак!
                   Выполнена по итальянским дизайнам, в ней много отделов, кармашков – они помогут 
                   разместить всё самое необходимое, Материал – эко-кожа с различными видами молний: 
                 золотая или серебряная. Рюкзак можно повесить на ручку коляски. </p>          
               </div>
             </div>
           </div> -->
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

<div class="container popgoods" style="background-image: url(<?php the_field('background_image');?>);">
 <div class="row">
  <div class="col text-center text-uppercase">
    <div class="title">
      <h4>РАСЦВЕТКИ</h4>
    </div>
  </div>
</div>
<div class="row  text-center justify-content-center">       
  <?php 
  $args = array(
    'post_type' => 'strollers', // указать наш новый тип записи 
    'posts_per_page' => 8,    
  );
  $p = get_posts($args);
  foreach ($p as $post){
    setup_postdata($post);
    ?>

  <div class="col-10 col-sm-10 col-md-5 col-lg-3"> 
    <button type="button" class="btn bg-light" data-toggle="modal" 
    data-target="#Modal1"><img src="<?php the_field('image_stroller');?>" class=" img-thumbnail img-fluid" alt="коляска-1"></button>   
    <h6 class=" text-bold"><?php the_title();?></h6>
    <p><?php the_field('price_stroller');?></p><p>Pублей</p> 
    <div class="modal fade " id="Modal1">
      <div class="modal-dialog  modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"><?php the_field('article_stroller');?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="<?php the_field('image_stroller');?>" class="img-fluid"  alt="коляска-1">
          </div>						
        </div>
      </div>
    </div>
  </div>

    <?php } wp_reset_postdata(); ?>

  <!-- <div class="col-10 col-sm-10 col-md-5 col-lg-3">   
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
  </div> -->  
</div>
</div>
<!-- ЗАКАЗАТЬ  -->
<div class="container form_zamer text-white" style="background-image: url(<?php the_field('background_order');?>);">
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
   <img src="<?php the_field('icon_order_1');?>" alt="" class="img-fluid">
    <h6 class="text-uppercase"><?php the_field('title_order_1');?></h6>
    <p><?php the_field('description_order_1');?></p>
  </div>
  <div class="col-5 col-sm-5 col-md-5 col-lg-3 align-self-center">
   <img src="<?php the_field('icon_order_2');?>" alt="" class="img-fluid">
   <h6 class="text-uppercase"><?php the_field('title_order_2');?></h6>
   <p><?php the_field('description_order_2');?></p>
 </div>
</div>
</div>

<?php get_footer();  ?>