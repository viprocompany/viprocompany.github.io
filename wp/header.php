
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="discription" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon2.ico"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="<?php echo get_template_directory_uri();?>/js/modernizr-custom.js"></script>
  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">   -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php
	$options = get_option('sample_theme_options');
	echo $options['selectinput']; ?>.css" >
  <title>koliaskins</title>
  <?php wp_head();?>
</head>
<body>

 <!-- навигация -->
 <div class="container " id="main">   
  <nav class="navbar  navbar-expand-md  fixed-top  "> 
    <a class="navbar-brand">
    <?php the_custom_logo(); ?>
      <!-- <img src="img/logo.png" height="50" alt="коляска"> -->
      <span class="navbar-phone">ТЕЛЕФОН: +3757777777</span> 
    </a>
    <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#my-nav"  aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">Меню</span>
    </button>
    <div class="collapse navbar-collapse  " id="my-nav" > <!--  смещаем контент вправо justify-content-end, убираем марджин авто в нижнем элементе -->
    
    <?php   wp_nav_menu( array(   
      'container'       => 'ul', 
      'container_class' => '', 
      'container_id'    => '',
      'menu_class'      => 'navbar-nav mr-4', 
      'menu_id'         => '',
      'echo'            => true,
      'fallback_cb'     => 'wp_page_menu',
      'before'          => '',
      'after'           => '',
      'link_before'     => '',
      'link_after'      => '',
      'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
      'depth'           => 0,
      'walker'          => '',
    )); ?>
      <!-- <ul class="navbar-nav mr-4">
        <li class="nav-item active">
          <a href="#main" class="nav-link text-uppercase">Главная</a>
        </li>
        <li class="nav-item ">
          <a href="#about" class="nav-link text-uppercase">Описание товара</a>
        </li>          
        <li class="nav-item ">
          <a href="#catalog" class="nav-link text-uppercase">Расцветки</a>
        </li>
        <li class="nav-item ">
          <a href="#blogs" class="nav-link text-uppercase">Блоги</a>
        </li>                   
      </ul> -->
    </div>
  </nav>          
</div>