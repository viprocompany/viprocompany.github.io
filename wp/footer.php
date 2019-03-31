<!-- ФУТЕР -->
<footer id="blogs">
 <div class="row text-center">
   <div class="col">
    <div class="col-12 blogs">
      <a href="#facebook"><img src="<?php echo get_template_directory_uri();?>/img/social/facebook.png" alt=""></a>
      <a href="#vk"><img src="<?php echo get_template_directory_uri();?>/img/social/vk_2.png" alt=""></a>
      <a href="#instagram"><img src="<?php echo get_template_directory_uri();?>/img/social/instagram.png" alt=""></a>
      <a href="#odnoklassniki"><img src="<?php echo get_template_directory_uri();?>/img/social/odnoklassniki.png" alt=""></a>
      <a href="#youtoube"><img src="<?php echo get_template_directory_uri();?>/img/social/youtube_3.png" alt=""></a>
    </div>
    <div class="row text-center ">
    <div class="col " > 
        <?php   wp_nav_menu( array(   
      'container'       => 'menu', 
      'container_class' => '', 
      'container_id'    => '',
      'menu_class'      => 'nav justify-content-center', 
      'menu_id'         => '',
      'echo'            => true,
      'fallback_cb'     => 'wp_page_menu',
      'before'          => '',
      'after'           => '',
      'link_before'     => '',
      'link_after'      => '',
      'items_wrap'      => '<menu id="%1$s" class="%2$s">%3$s</menu>',
      'depth'           => 0,
      'walker'          => '',
    )); ?>
    <!-- <menu class="nav justify-content-center">
    <li class="nav-item"><a href="" class="nav-link">Главная</a></li>
    <li class="nav-item"><a href="" class="nav-link">Описание товара</a></li>
    <li class="nav-item"><a href="" class="nav-link">Расцветки</a></li>
    <li class="nav-item"><a href="" class="nav-link">Блоги</a></li>
    </menu> -->
    </div>
    </div>
    <div class="footer-logo">
      <p>ViPro Studio</p>
    </div>
    <div class="footer-copy">2019
    </div>
  </div>

</div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">  </script>   -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script> --> -->
<!-- <script src="js/script.js"></script>       -->
<script src="<?php echo get_template_directory_uri();?>/js/script.min.js"></script>
<script>$('.my-carousel').carousel({  interval: 3000});</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>

<?php wp_footer();?>
</body>
</html>	

