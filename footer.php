<?php
?>
   <footer class="footer">
     <div class="container-double">
      <div class="footer__inner">
        <div class="footer__contact">
          <div class="footer__phone">
            <a href="#" class="footer__phone-icon">
              <img src="<?php echo get_template_directory_uri()?> . /assets/images/phone.svg" alt="img" class="footer__phone-img">
            </a>
            <a href="#" class="footer__phone-tel"><?php the_field('telefon_v_podvale', 'option')?></a>
          </div>
          <div class="footer__email">
            <a href="#" class="footer__email-icon">
              <img src="<?php echo get_template_directory_uri()?> . /assets/images/email.svg" alt="img" class="footer__email-img">
            </a>
            <a href="#" class="footer__email-link"><?php the_field('pochta_v_podvale', 'option')?></a>
          </div>
        </div>
        <div class="footer__copyright"><?php the_field('kopirajt_v_podvale', 'option')?></div>
        <div class="footer__icon">
            <a href="<?php the_field('ssylka_soczialnye_seti-1', 'option')?>" class="footer__icon-insta">
              <img src="<?php echo get_template_directory_uri()?> . /assets/images/insta.svg" alt="img" class="footer__icon-img">
            </a>
            <a href="<?php the_field('ssylka_soczialnye_seti-2', 'option')?>" class="footer__icon-facebook">
              <img src="<?php echo get_template_directory_uri()?> . /assets/images/facebook.svg" alt="img" class="footer__icon-img">
            </a>
        </div>
      </div>
     </div>
     <div class="container">
        <div class="modal hide">
            <div class="modal__block">
                <div class="modal__slider">
                  <div class="modal__slider-wrapper">
                  <div class="modal__slider-item">
                        <img src="<?php echo get_template_directory_uri();?> . /assets/images/project-5.jpg" alt="">
                    </div>
                    <div class="modal__slider-item">
                        <img src="<?php echo get_template_directory_uri();?> . /assets/images/zebra.jpg" alt="">
                    </div>
                    <div class="modal__slider-item">
                        <img src="<?php echo get_template_directory_uri();?> . /assets/images/project-5.jpg" alt="">
                    </div>
                
                  </div>
 
                </div>
                <!-- <div data-close class="modal__close">&times;</div> -->
                <div data-close class="modal__close">
                    <img src="<?php echo get_template_directory_uri();?> . /assets/images/krugkrestik.svg" alt="img">
                </div>
            </div>
        </div>
    </div>
     <?php wp_footer();?>
    </footer>


</body>

</html>