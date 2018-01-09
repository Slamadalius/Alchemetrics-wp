</main>
<footer class="footer">
      <div class="row u-margin-bottom-medium">
        <div class="col-1-of-2 f-no-marg">
          <div class="footer__logo-box">

                <?php if ($logo = get_field('ms_logo', 'option')) : ?>
                  <picture class="footer__logo">
                    <a href="<?php bloginfo('wpurl'); ?>"></a><img src="<?php echo $logo; ?>" alt="Full Logo" class="footer__log"> <!-- header Logo -->
                  </picture>
                <?php endif; ?>

                   <?php if(have_rows('footer_soc_icons', 'option')) : ?>
                      <ul class="soc-icons">
                        <?php while(have_rows('footer_soc_icons', 'option')) : the_row();
                            $soc_icon = get_sub_field('f_soc_icon');
                            $soc_link = get_sub_field('f_soc_link');
                        ?>
                      
                            <li><a href="<?php echo $soc_link; ?>" target="_blank" class="footer__link--soc"><?php echo $soc_icon; ?></a></li>
                      
                        <?php endwhile; reset_rows();?>
                      </ul>
                  <?php endif; ?>
              </div>
        </div>
        <div class="col-1-of-2">
                 <div class="composition">
                        <?php if(have_rows('ms_awards', 'option')) : 
                              $counter = 0; 
                            ?>
                                <?php while (have_rows('ms_awards', 'option')) : the_row();
                                    $counter++;
                                    $awards_url = get_sub_field('ms_awards_links', 'option');
                                    $awards_icon = get_sub_field('ms_awards_icon', 'option');
                                ?>
                                <a href="<?php echo $awards_url; ?>" target="_blank"><img src="<?php echo $awards_icon; ?>" class="<?php echo "composition__photo composition__photo--p" . $counter; ?>" ></a>

                                <?php endwhile; reset_rows();?>
                        <?php endif; ?>
                        
              </div>   
        </div>
      </div>
      <div class="row">
        <div class="col-1-of-2">
          <div class="footer__navigation">

            <?php if(have_rows('footer_nav', 'option')) : ?>
              <ul class="footer__list">
                <?php while (have_rows('footer_nav', 'option')) : the_row();
                    $link = get_sub_field('footer_nav_link', 'option');
                    $text = get_sub_field('footer_nav_text', 'option');
                ?>
                <li class="footer__item"><a href="<?php echo $link; ?>" class="footer__link"><?php echo $text; ?></a></li>
                <?php endwhile; reset_rows(); ?>
              </ul>
            <?php endif; ?>

          </div>
          <p class="footer__copyright">
            Copyright &copy;
          </p>
        </div>
      </div>
  </footer>