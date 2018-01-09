<section class="section-stories"> <!-- section stories start -->
        <div class="bg-video"> <!-- background video -->
            <video class="bg-video__content" autoplay muted loop>
                <source src="<?php bloginfo('template_directory')?>./img/Oculus.mp4" type="video/mp4"> <!-- importing 2 types of video -->
                <source src="<?php bloginfo('template_directory')?>./img/Oculus.webm" type="video/webm">
                Your browser is not supported! <!-- if your browser doesn't support video -->
            </video>
        </div>

        <div class="u-center-text u-margin-bottom-big"> <!-- title of the section -->
            <h2 class="heading-secondary">
                <?php the_field('story_section_title'); ?>
            </h2>
        </div>

        <?php if(have_rows('story_box')) : ?>
                <?php while (have_rows('story_box')) : the_row();
                    $picture = get_sub_field('persons_picture');
                    $company = get_sub_field('persons_company');
                    $name = get_sub_field('persons_name');
                    $story = get_sub_field('persons_story');
                ?>
                  <div class="row">
                    <div class="story">
                       <figure class="story__shape">
                            <img src="<?php echo $picture; ?>" alt="Armadillo" class="story__img">
                            <figcaption class="story__caption"><?php echo $name; ?></figcaption>
                        </figure>
                        <div class="story__text">
                            <h3 class="heading-tertiary u-margin-bottom-small"><?php echo $company; ?></h3>
                            <p class="paragraph">
                                <?php echo $story; ?>
                            </p>
                        </div>
                      </div>
                     </div>
                  <?php endwhile; reset_rows();?>  
          <?php endif; ?>


        <div class="u-center-text u-margin-top-huge">
            <a href="#" class="btn-text">Read all stories &rarr;</a>
        </div>
</section>