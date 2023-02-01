<?php
/*
Template Name: Искусство New
*/ 
?>
<?php get_header();?>
<main class="main">
    <div class="container-artwork">
      <div class="author-work">
        <h1 class="header__title"><?php the_field('otdelnaya_stranicza_iskusstvo_new_glavnyj_zagolovok');?></h1>
        <div class="author-work__inner">
          <h2 class="author-work__title"><?php the_field('otdelnaya_stranicza_iskusstvo_new_podzagolovok');?></h2>
          <div class="author-work__block">
            <?php
                $art_post = new WP_Query([
                    'post_type' => 'art',
                    'post_per_page' => 20
                ])
            ?>
            
            <?php if($art_post -> have_posts()) : while($art_post -> have_posts()) : $art_post->the_post();?>
                <div href="<?php the_permalink();?>" class="author-work__item">
                    <div  class="author-work__item-img">
                        <img src="<?php the_post_thumbnail_url();?>" alt="img">
                    </div>
                        <a href="<?php the_permalink();?>" class="author-work__item-title"><?php the_title()?></a>
                        <div class="author-work__item-text">
                          <?php the_content();?>
                        </div>
                   
                </div>
            <?php endwhile; endif;?>
            <?php wp_reset_postdata();?>
           
          </div>
        </div>
      </div>
    </div>
</main>

<?php get_footer();?>