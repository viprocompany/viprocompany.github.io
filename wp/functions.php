<?php
show_admin_bar(false);
add_theme_support('custom-logo');

// Load up our awesome theme options
require_once ( get_stylesheet_directory() . '/theme-options/theme-options.php' );

// add_theme_support( 'menus' );
// // add_action('wp_footer','addScripts');
//  function addScripts(){ 
//   // wp_derigister_script('jquery-core');
// не заработало
//   // wp_rigister_script('jquery-core', get_template_directory_uri() . '/js/jquery-3.3.1min.js');
 
// }
// заработает
// add_action('wp_enqueue_scripts', 'addStyles');
// function addStyles(){
//   wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
//   wp_enqueue_style('style', get_stylesheet_uri());
// }

add_action('init', 'koliaski_custom_post_type');
function koliaski_custom_post_type(){
  // Категория - strollers это категории для  дополнительной опции в главном меню ВОРДПРЕССа под названием Коляски
	register_taxonomy('category_stroller', array('strollers'), array(
		'label'                 => 'Категория', // определяется параметром $labels->name
		'labels'                => array(
			'name'              => 'Категории',
			'singular_name'     => 'Категория',
			'search_items'      => 'Искать Категорию',
			'all_items'         => 'Все Категории',
			'parent_item'       => 'Родит. Категория',
			'parent_item_colon' => 'Родит. Категория:',
			'edit_item'         => 'Ред. Категорию',
			'update_item'       => 'Обновить Категорию',
			'add_new_item'      => 'Добавить Категорию',
			'new_item_name'     => 'Новая Категория',
			'menu_name'         => 'Категория',
		),
		'description'           => 'Рубрики для раздела вопросов', // описание таксономии
		'public'                => true,
		'show_in_nav_menus'     => false, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_tagcloud'         => false, // равен аргументу show_ui
		'hierarchical'          => true,
    'rewrite'               => array('slug'=>'strollers', 'hierarchical'=>false,
                               'with_front'=>false, 'feed'=>false ),
		'show_admin_column'     => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
	) );

	//задаем создание дополнительной опции в главном меню ВОРДПРЕССа под названием Коляски, то есть  strollers
	register_post_type('strollers', array(
		'labels'             => array(
			'name'               => 'Коляски', // Основное название типа записи
			'singular_name'      => 'Коляска', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую',
			'add_new_item'       => 'Добавить новую Коляску',
			'edit_item'          => 'Редактировать Коляску',
			'new_item'           => 'Новая Коляска',
			'view_item'          => 'Посмотреть Коляску',
			'search_items'       => 'Найти Коляску',
			'not_found'          => 'Колясок не найдено',
			'not_found_in_trash' => 'В корзине Колясок не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Коляски'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
    'menu_position'      => null,
    'menu_icon'          => 'dashicons-welcome-add-page',
		'supports'           => array('title','editor')
	) );
}
?>

