<section class="section-about" id="sec2"> <!-- section about start -->
        <div class="u-center-text u-margin-bottom-huge"> <!-- title of the sections -->
            <h2 class="heading-secondary" id="sec2">
               <?php the_field('products_section_title'); ?>
            </h2>
        </div>

        <div class="slideshow-container">
          <div class="mySlides fade"> <!-- my slides start -->
            <div class="single-item"> <!-- text of the section -->
              <div class="row">
                  <div class="col-1-of-2">
                      <h3 class="heading-tertiary u-margin-bottom-small"><?php the_field('product_one_title'); ?></h3>
                      <p class="paragraph">
                          <?php the_field('product_one_description'); ?>
                      </p>

                      <a href="#" class="btn-text">Learn more &rarr;</a>
                  </div>
                  <div class="col-1-of-2">
                    <img class="about--img" src="<?php the_field('product_one_image'); ?>" alt="tree">    
                  </div>              
              </div>
            </div> <!-- single item end -->
          </div> <!-- mySlides end -->
          <div class="mySlides fade"> <!-- my slides start -->
            <div class="single-item"> <!-- text of the section -->
              <div class="row">
                  <div class="col-1-of-2">
                      <h3 class="heading-tertiary u-margin-bottom-small"><?php the_field('product_two_title'); ?></h3>
                      <p class="paragraph">
                          <?php the_field('product_two_description'); ?>
                      </p>

                      <a href="#" class="btn-text">Learn more &rarr;</a>
                  </div>
                  <div class="col-1-of-2">
                    <img class="about--img" src="<?php the_field('product_two_image'); ?>" alt="screen">    
                  </div>              
              </div>
            </div> <!-- single item end -->
          </div> <!-- mySlides end -->
          <div class="mySlides fade"> <!-- my slides start -->
            <div class="single-item"> <!-- text of the section -->
              <div class="row">
                  <div class="col-1-of-2">
                      <h3 class="heading-tertiary u-margin-bottom-small"><?php the_field('product_three_title'); ?></h3>
                      <p class="paragraph">
                          <?php the_field('product_three_description'); ?>
                      </p>

                      <a href="#" class="btn-text">Learn more &rarr;</a>
                  </div>
                  <div class="col-1-of-2">
                    <img class="about--img" src="<?php the_field('product_three_image'); ?>" alt="marketing">    
                  </div>              
              </div>
            </div> <!-- single item end -->
          </div> <!-- mySlides end -->
        </div>
        <div class="dots u-margin-top-small">
            <span class="dots__d" onclick="currentSlide(1)"></span> 
            <span class="dots__d" onclick="currentSlide(2)"></span> 
            <span class="dots__d" onclick="currentSlide(3)"></span> 
        </div>
        
</section> <!-- section about end -->
