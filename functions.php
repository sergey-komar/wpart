<?php
 function art_script(){
    wp_enqueue_style('art-style', get_template_directory_uri() . '/assets/css/style.min.css');
    wp_enqueue_script('art-script', get_template_directory_uri() . '/assets/js/main.min.js', [], 2022,
     true);
 }
 add_action('wp_enqueue_scripts', 'art_script');


function art_setup() {
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
 add_action('after_setup_theme', 'art_setup');

 register_nav_menus([
    'menu-header' => 'меню в шапке',
    'menu-art-page' => 'меню искусство страница',
    'menu-art' => 'меню искусство',
    'menu-art-levanova' => 'меню леванова',
    'menu-art-video' => 'меню видео',

    'menu-interiror' => 'меню интерьеры',
    'menu-interiror-new' => 'меню интерьеры new',
    'menu-interiror-levanova' => 'меню интерьер levanova',
    'menu-interiror-video' => 'меню интерьеры video',

    'menu-education' => 'меню лекторий',
    'menu-education-new' => 'меню лекторий new',
    'menu-education-levanova' => 'меню лекторий levanova',
    'menu-education-video' => 'меню лекторий video',
 ]);


 // ACF
if( function_exists('acf_add_options_page') ) {
	
   acf_add_options_page(array(
       'page_title' 	=> 'Основные настройки',
       'menu_title'	=> 'Настройки сайта',
       'menu_slug' 	=> 'theme-general-settings',
       'capability'	=> 'edit_posts',
       'redirect'		=> false
   )); 
}
// ACF


 function art_post_type(){
   register_post_type('art', array(
     'labels'             => array(
        'name'               => __('Искусство'), // Основное название типа записи
        'singular_name'      => __('Искусство'), // отдельное название записи типа Book
        'add_new'            => __('Добавить Искусство'),
        'add_new_item'       => __('Добавить новые Искусство'),
        'edit_item'          => __('Редактировать Искусство'),
        'new_item'           => __('Новые Искусство'),
        'view_item'          => __('Посмотреть Искусство'),
        'search_items'       => __('Найти Искусство'),
        'not_found'          => __('Искусство не найдено'),
        'not_found_in_trash' => __('В корзине услуг не найдено'),
        'parent_item_colon'  => __(''),
        'menu_name'          => __('Искусство')
  
       ),
       'public'             => true,
       'has_archive'        => true,
       'publicly_queryable' => true,
       'show_ui'            => true,
       'show_in_menu'       => true,
       'query_var'          => true,
       'rewrite'            => true,
       'capability_type'    => 'post',
       'menu_icon'			 => 'dashicons-businessperson',
     //   'hierarchical'       => true, при помощи page-attributes добавляем древовидную структуру
       'menu_position'      => null,
       // 'taxonomies'          => array( 'category' ),//Добавляем категории
       'supports'           => array('title','editor','thumbnail'),
     //   'show_in_rest'      => true//Включает редактор гутенберг
  ));


  

     

   register_post_type('art-levanova', array(
       'labels'             => array(
           'name'               => __('Интерьеры'), // Основное название типа записи
           'singular_name'      => __('Интерьеры'), // отдельное название записи типа Book
           'add_new'            => __('Добавить искусство Леванова'),
           'add_new_item'       => __('Добавить искусство Леванова'),
           'edit_item'          => __('Редактировать искусство Леванова'),
           'new_item'           => __('Новые Интерьеры'),
           'view_item'          => __('Посмотреть Интерьеры'),
           'search_items'       => __('Найти Интерьеры'),
           'not_found'          => __('Экспертов не найдено'),
           'not_found_in_trash' => __('В корзине услуг не найдено'),
           'parent_item_colon'  => __(''),
           'menu_name'          => __('Искусство Леванова')
     
         ),
       'public'             => true,
       'has_archive'        => true,
       'publicly_queryable' => true,
       'show_ui'            => true,
       'show_in_menu'       => true,
       'query_var'          => true,
       'rewrite'            => true,
       'capability_type'    => 'post',
       
       'menu_icon'			 => 'dashicons-businessperson',
       'hierarchical'       => true,
       'menu_position'      => null,
       // 'taxonomies'          => array( 'category' ),//Добавляем категории
       'supports'           => array('title','editor','thumbnail','excerpt')
     ) );

     register_post_type('art-video', array(
       'labels'             => array(
           'name'               => __('Лекторий'), // Основное название типа записи
           'singular_name'      => __('Лекторий'), // отдельное название записи типа Book
           'add_new'            => __('Добавить Видео'),
           'add_new_item'       => __('Добавить новые Видео'),
           'edit_item'          => __('Редактировать Видео'),
           'new_item'           => __('Новые Лекторий'),
           'view_item'          => __('Посмотреть Лекторий'),
           'search_items'       => __('Найти Лекторий'),
           'not_found'          => __('Экспертов не найдено'),
           'not_found_in_trash' => __('В корзине услуг не найдено'),
           'parent_item_colon'  => __(''),
           'menu_name'          => __('Искусство-видео')
     
         ),
       'public'             => true,
       'has_archive'        => true,
       'publicly_queryable' => true,
       'show_ui'            => true,
       'show_in_menu'       => true,
       'query_var'          => true,
       'rewrite'            => true,
       'capability_type'    => 'post',
       
       'menu_icon'			 => 'dashicons-businessperson',
       'hierarchical'       => true,
       'menu_position'      => null,
       // 'taxonomies'          => array( 'category' ),//Добавляем категории
       'supports'           => array('title','editor','thumbnail','excerpt')
     ) );



     register_post_type('interior-new', array(
      'labels'             => array(
          'name'               => __('Интерьеры-new'), // Основное название типа записи
          'singular_name'      => __('Интерьеры-new'), // отдельное название записи типа Book
          'add_new'            => __('Добавить Интерьеры-new'),
          'add_new_item'       => __('Добавить новые Интерьеры-new'),
          'edit_item'          => __('Редактировать Интерьеры-new'),
          'new_item'           => __('Новые Интерьеры-new'),
          'view_item'          => __('Посмотреть Интерьеры-new'),
          'search_items'       => __('Найти Интерьеры-new'),
          'not_found'          => __('Экспертов не найдено'),
          'not_found_in_trash' => __('В корзине услуг не найдено'),
          'parent_item_colon'  => __(''),
          'menu_name'          => __('Интерьеры-new')
    
        ),
      'public'             => true,
      'has_archive'        => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => true,
      'capability_type'    => 'post',
      
      'menu_icon'			 => 'dashicons-businessperson',
      'hierarchical'       => true,
      'menu_position'      => null,
      // 'taxonomies'          => array( 'category' ),//Добавляем категории
      'supports'           => array('title','editor','thumbnail','excerpt')
    ) );
    
    register_post_type('interior-levanova', array(
      'labels'             => array(
          'name'               => __('Интерьеры-levanova'), // Основное название типа записи
          'singular_name'      => __('Интерьеры-levanova'), // отдельное название записи типа Book
          'add_new'            => __('Добавить Интерьеры-levanova'),
          'add_new_item'       => __('Добавить новые Интерьеры-levanova'),
          'edit_item'          => __('Редактировать Интерьеры-levanova'),
          'new_item'           => __('Новые Интерьеры-levanova'),
          'view_item'          => __('Посмотреть Интерьеры-levanova'),
          'search_items'       => __('Найти Интерьеры-levanova'),
          'not_found'          => __('Экспертов не найдено'),
          'not_found_in_trash' => __('В корзине услуг не найдено'),
          'parent_item_colon'  => __(''),
          'menu_name'          => __('Интерьеры-levanova')
    
        ),
      'public'             => true,
      'has_archive'        => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => true,
      'capability_type'    => 'post',
      
      'menu_icon'			 => 'dashicons-businessperson',
      'hierarchical'       => true,
      'menu_position'      => null,
      // 'taxonomies'          => array( 'category' ),//Добавляем категории
      'supports'           => array('title','editor','thumbnail','excerpt')
    ) );
    
    register_post_type('interior-video', array(
      'labels'             => array(
          'name'               => __('Интерьеры-video'), // Основное название типа записи
          'singular_name'      => __('Интерьеры-video'), // отдельное название записи типа Book
          'add_new'            => __('Добавить Интерьеры-video'),
          'add_new_item'       => __('Добавить новые Интерьеры-video'),
          'edit_item'          => __('Редактировать Интерьеры-video'),
          'new_item'           => __('Новые Интерьеры-video'),
          'view_item'          => __('Посмотреть Интерьеры-video'),
          'search_items'       => __('Найти Интрьеры-video'),
          'not_found'          => __('Экспертов не найдено'),
          'not_found_in_trash' => __('В корзине услуг не найдено'),
          'parent_item_colon'  => __(''),
          'menu_name'          => __('Интерьеры-video')
    
        ),
      'public'             => true,
      'has_archive'        => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => true,
      'capability_type'    => 'post',
      
      'menu_icon'			 => 'dashicons-businessperson',
      'hierarchical'       => true,
      'menu_position'      => null,
      // 'taxonomies'          => array( 'category' ),//Добавляем категории
      'supports'           => array('title','editor','thumbnail','excerpt')
    ) );
    



    register_post_type('lector-new', array(
      'labels'             => array(
          'name'               => __('Лекторий-new'), // Основное название типа записи
          'singular_name'      => __('Лекторий-new'), // отдельное название записи типа Book
          'add_new'            => __('Добавить Лекторий-new'),
          'add_new_item'       => __('Добавить новые Лекторий-new'),
          'edit_item'          => __('Редактировать Лекторий-new'),
          'new_item'           => __('Новые Лекторий-new'),
          'view_item'          => __('Посмотреть Лекторий-new'),
          'search_items'       => __('НайтиЛекторий-new'),
          'not_found'          => __('Экспертов не найдено'),
          'not_found_in_trash' => __('В корзине услуг не найдено'),
          'parent_item_colon'  => __(''),
          'menu_name'          => __('Лекторий-new')
    
        ),
      'public'             => true,
      'has_archive'        => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => true,
      'capability_type'    => 'post',
      
      'menu_icon'			 => 'dashicons-businessperson',
      'hierarchical'       => true,
      'menu_position'      => null,
      // 'taxonomies'          => array( 'category' ),//Добавляем категории
      'supports'           => array('title','editor','thumbnail','excerpt')
    ) );
    
    
    register_post_type('lector-levanova', array(
      'labels'             => array(
          'name'               => __('Лекторий-levanova'), // Основное название типа записи
          'singular_name'      => __('Лекторий-levanova'), // отдельное название записи типа Book
          'add_new'            => __('Добавить Лекторий-levanova'),
          'add_new_item'       => __('Добавить новые Лекторий-levanova'),
          'edit_item'          => __('Редактировать Лекторий-levanova'),
          'new_item'           => __('Новые Лекторий-levanova'),
          'view_item'          => __('Посмотреть Лекторий-levanova'),
          'search_items'       => __('НайтиЛекторий-levanova'),
          'not_found'          => __('Экспертов не найдено'),
          'not_found_in_trash' => __('В корзине услуг не найдено'),
          'parent_item_colon'  => __(''),
          'menu_name'          => __('Лекторий-levanova')
    
        ),
      'public'             => true,
      'has_archive'        => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => true,
      'capability_type'    => 'post',
      
      'menu_icon'			 => 'dashicons-businessperson',
      'hierarchical'       => true,
      'menu_position'      => null,
      // 'taxonomies'          => array( 'category' ),//Добавляем категории
      'supports'           => array('title','editor','thumbnail','excerpt')
    ) );
    
    
    register_post_type('lector-video', array(
      'labels'             => array(
          'name'               => __('Лекторий-video'), // Основное название типа записи
          'singular_name'      => __('Лекторий-video'), // отдельное название записи типа Book
          'add_new'            => __('Добавить Лекторий-video'),
          'add_new_item'       => __('Добавить новые Лекторий-video'),
          'edit_item'          => __('Редактировать Лекторий-video'),
          'new_item'           => __('Новые Лекторий-video'),
          'view_item'          => __('Посмотреть Лекторий-video'),
          'search_items'       => __('НайтиЛекторий-video'),
          'not_found'          => __('Экспертов не найдено'),
          'not_found_in_trash' => __('В корзине услуг не найдено'),
          'parent_item_colon'  => __(''),
          'menu_name'          => __('Лекторий-video')
    
        ),
      'public'             => true,
      'has_archive'        => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => true,
      'capability_type'    => 'post',
      
      'menu_icon'			 => 'dashicons-businessperson',
      'hierarchical'       => true,
      'menu_position'      => null,
      // 'taxonomies'          => array( 'category' ),//Добавляем категории
      'supports'           => array('title','editor','thumbnail','excerpt')
    ) );
    
    
     
    
     
     
}
add_action('init', 'art_post_type');

