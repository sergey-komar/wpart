<?php
?>
<!DOCTYPE html>
<html lang="<?php language_attributes();?>">

<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head();?>
</head>

<body <?php body_class(); ?>>
  <header class="header">
    <div class="container-double">
      <div class="header__inner">
        <div class="header__left">
          <a href="/" class="logo">
              <img src="<?php the_field('logotip_v_shapke', 'option')?>" alt="img">
          </a>
        </div>
        

        <div class="header__language-block">
          <a href="<?php the_field('ssylka_ru', 'option');?>" class="header__language header__language-ru">
            <span>Ru</span>
          </a>
          <a href="<?php the_field('ssylka_en', 'option');?>" class="header__language header__language-en">
            <span>En</span>
          </a>
          <div class="nav-icon">
            <div class="nav-icon__middle"></div>
          </div>
          <div class="menu">
            <nav class="nav">
                <?php wp_nav_menu( [
                    'theme_location' => 'menu-header',
                    'container' => '',
                    'menu_class' => 'menu__list'
                ] )?>
            </nav>
            <p class="menu__copyright">
                LEVANOVA DESIGN 2021 — Branding and Graphic Design  
            </p>
        </div>
        </div>
      </div>
    </div>
  </header>
