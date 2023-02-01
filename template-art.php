<?php
/**
 * Template Name: Искусство
 */
?>
<?php get_header();?>
<main class="main">
    <div class="container">
        <div class="design-interior">
            <h1 class="header__title"><?php the_field('glavnyj_zagolovok_stranicza_iskusstvo');?></h1>
            <div class="design-interior__inner">
                <div class="design-interior__item">
                    <div class="design-interior__item-title"><?php the_field('iskusstvo_1_abzacz_zagolovok');?></div>
                    <div class="design-interior__item-text">
                        <p>
                        <?php the_field('iskusstvo_1_abzacz_tekst');?> 
                        </p>
                    </div>
                    <div  class="design-interior__button">
                    <?php wp_nav_menu( [
                        'theme_location' => 'menu-art',
                        'container' => '',
                        'menu_class' => ''
                    ] )?>
                    </div>
                </div>

                <div class="design-interior__item">
                    <div class="design-interior__item-title"><?php the_field('iskusstvo_2_abzacz_zagolovok');?></div>
                    <div class="design-interior__item-text">
                        <p>
                        <?php the_field('iskusstvo_2_abzacz_tekst');?>

                        </p>
                       
                    </div>
                    <div href="#" class="design-interior__button button">
                    <?php wp_nav_menu( [
                        'theme_location' => 'menu-art-levanova',
                        'container' => '',
                        'menu_class' => ''
                    ] )?>
                    </div>
                </div>

                <div class="design-interior__item">
                    <div class="design-interior__item-title"><?php the_field('iskusstvo_3_abzacz_zagolovok');?></div>
                    <div class="design-interior__item-text">
                        <p>
                        <?php the_field('iskusstvo_3_abzacz_tekst');?>
                        </p>
                       
                    </div>
                    <div  class="design-interior__button button">
                    <?php wp_nav_menu( [
                        'theme_location' => 'menu-art-video',
                        'container' => '',
                        'menu_class' => ''
                    ] )?>
                    </div>
                </div>
            </div>
          
        </div>
    </div>
</main>
<?php get_footer();?>