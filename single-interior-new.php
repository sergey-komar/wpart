<?php
?>
<?php get_header();?>

<body>
 
    <div class="slider__page">
        <div class="container">
            <div class="slider__page-wrapper">

                <div class="slider__page-inner">
                    <?php if(have_rows('kartinka_na_stranicze_interery-new')) : while(have_rows('kartinka_na_stranicze_interery-new')) : the_row();?>
                    <div class="slider__page-item">
                        <div class="slider__page-img">
                            <img src="<?php the_sub_field('kartinka_interery');?>" alt="">
                        </div>
                    </div>
                    <?php endwhile; endif;?>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
<?php get_footer();?>