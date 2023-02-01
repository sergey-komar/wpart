<?php
/**
 * Template Name: Лекторий
 */
?>
<?php get_header();?>
<main class="main">
    <div class="container">
        <div class="design-interior">
            <h1 class="header__title"><?php the_field('glavnyj_zagolovok_stranicza_lektorij');?></h1>
            <div class="design-interior__inner">
                <div class="design-interior__item">
                    <div class="design-interior__item-title"><?php the_field('lektorij_1_abzacz_zagolovok');?></div>
                    <div class="design-interior__item-text">
                        <p>
                        <?php the_field('lektorij_1_abzacz_tekst');?>   
                        </p>
                    </div>
                    <div  class="design-interior__button">
                    <?php wp_nav_menu( [
                        'theme_location' => 'menu-education-new',
                        'container' => '',
                        'menu_class' => ''
                    ] )?>
                    </div>
                </div>

                <div class="design-interior__item">
                    <div class="design-interior__item-title"><?php the_field('lektorij_2_abzacz_zagolovok');?></div>
                    <div class="design-interior__item-text">
                        <p>
                        <?php the_field('lektorij_2_abzacz_tekst');?>

                        </p>
                      
                    </div>
                    <div href="#" class="design-interior__button button">
                    <?php wp_nav_menu( [
                        'theme_location' => 'menu-education-levanova',
                        'container' => '',
                        'menu_class' => ''
                    ] )?>
                    </div>
                </div>

                <div class="design-interior__item">
                    <div class="design-interior__item-title"><?php the_field('ektorij_3_abzacz_zagolovok');?></div>
                    <div class="design-interior__item-text">
                        <p>
                        <?php the_field('lektorij_3_abzacz_tekst');?>
                            
                        </p>
                       
                    </div>
                    <div  class="design-interior__button button">
                    <?php wp_nav_menu( [
                        'theme_location' => 'menu-education-video',
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
