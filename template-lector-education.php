<?php
/**
 * Template Name: Лекторий video
 */
?>
<?php get_header();?>
<main class="main">
    <div class="container-artwork">
      <div class="author-work">
        <h1 class="header__title"><?php the_field('otdelnaya_stranicza_lektorij_video_glavnyj_zagolovok');?></h1>
        <div class="author-work__inner">
          <h2 class="author-work__title"><?php the_field('otdelnaya_stranicza_lektorij_video_podzagolovok');?></h2>
          <div class="author-work__block">
            <?php
                $art_post = new WP_Query([
                    'post_type' => 'lector-video',
                    'post_per_page' => 20
                ])
            ?>
            
            <?php if($art_post -> have_posts()) : while($art_post -> have_posts()) : $art_post->the_post();?>
                <a href="<?php the_permalink();?>" class="author-work__item">
                    <div  class="author-work__item-img">
                        <img src="<?php the_post_thumbnail_url();?>" alt="img">
                    </div>
                        <div  class="author-work__item-title"><?php the_title()?></div>
                        <div class="author-work__item-text">
                          <?php the_content();?>
                        </div>
                   
                </a>
            <?php endwhile; endif;?>
            <?php wp_reset_postdata();?>
           
          </div>
        </div>
      </div>
    </div>
</main>
<?php get_footer();?>