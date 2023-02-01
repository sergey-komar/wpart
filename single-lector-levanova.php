<?php
?>
<?php get_header();?>

<body>
 
    <div class="slider__page">
        <div class="container">
            <div class="slider__page-wrapper">

                <div class="slider__page-inner">
                    <?php if(have_rows('kartinka_na_stranicze_lektorij_levanova')) : while(have_rows('kartinka_na_stranicze_lektorij_levanova')) : the_row();?>
                    <a href="<?php the_sub_field('kartinka_na_stranicze_lektorij_levanova_ssylka');?>" class="slider__page-item">
                        <div class="slider__page-img">
                            <img class="video-iframe" src="<?php the_sub_field('kartinka_na_stranicze_lektorij_levanova_izobrazhenie');?>" alt="">
                            <button class="video__button">
                            <svg width="68" height="48" viewBox="0 0 68 48"><path class="video__button-shape" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"></path><path class="video__button-icon" d="M 45,24 27,14 27,34"></path></svg>
                            </button>
                        </div>
                    </a>
                    <?php endwhile; endif;?>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
<?php get_footer();?>