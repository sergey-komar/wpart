<?php
/**
 * Template Name: Главная страница
 */
?>
<?php get_header();?>
    
<main class="main">
    <div class="home">
        <div class="container">
            <div class="home__block">
            <div class="header__title">
                <img src="<?php the_field('vtoroj_logotip_v_shapke', 'option')?>" alt="">
            </div>
            <div class="home__block-box">
                <div <?php echo get_post_type_archive_link('art'); ?>" class="home__item">
                    <a href="#" class="home__item-img">
                        <img src="<?php the_field('pervoe_izobrazhenie_na_glavnoj');?>" alt="img" >
                    </a>
                   
                    <div class="home__item-title">
                    <?php wp_nav_menu( [
                        'theme_location' => 'menu-art-page',
                        'container' => '',
                        'menu_class' => ''
                    ] )?>
                    </div>
                </div>
                <div  class="home__item">
                    <a href="#" class="home__item-img">
                        <img src="<?php the_field('vtoroe_izobrazhenie_na_glavnoj');?>" alt="img" >
                    </a>
                    <div class="home__item-title">
                    <?php wp_nav_menu( [
                        'theme_location' => 'menu-interiror',
                        'container' => '',
                        'menu_class' => ''
                    ] )?>
                    </div>
                </div>
                <div class="home__item">
                    <a href="#" class="home__item-img">
                        <img src="<?php the_field('trete_izobrazhenie_na_glavnoj');?>" alt="img" >
                    </a>
                    <div class="home__item-title">
                    <?php wp_nav_menu( [
                        'theme_location' => 'menu-education',
                        'container' => '',
                        'menu_class' => ''
                    ] )?>
                    </div>
                </div>
            </div>
            

            <div class="home__block-title">
                <?php the_field('podzagolovok_na_glavnoj_stranicze');?>
            </div>
            <p class="home__block-text">
                <?php the_field('tekst_na_glavnoj_stranicze');?>
            </p>
            </div>
        </div>
    </div>
</main>
<?php get_footer();?>