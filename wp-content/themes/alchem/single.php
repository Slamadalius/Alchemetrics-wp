<?php get_template_part('header'); ?>

<div class="main_h">  
        
              <a class="logo" href="<?php bloginfo('wpurl'); ?>">Al/Metric</a>

              <div class="mobile-toggle">
                  <span></span>
                  <span></span>
                  <span></span>
              </div>

              <nav class="nav">
                  <ul class="nav__list">
                      <?php wp_nav_menu(array (
                          'menu' => 'blog-navigation',
                          'theme_location' => 'blog-navigation'
                      )); ?> 
                  </ul>
              </nav>

</div>


<div class="row">
    
    
           
       <?php if(have_posts() ) : ?>
       
       <?php while(have_posts() ) : the_post(); ?>
       
       
       <div class="permalink">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
           
       </div>
       
       
       
       
       <div class="meta">
          
          Posted By <?php the_author(); ?> On <?php the_time('F j, Y g:i a'); ?>
           
       </div>
       
       
       
       <div class="thumbnail">
          
          <?php if(has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail(); ?>
          <?php endif; ?>
           
       </div>
       
       
       
       <div class="content">
          
        <?php the_content(); ?>  
           
       </div>

       <?php comments_template(); ?>
       
       
       
       <?php endwhile; ?>
       <?php endif; ?>
    
    
    
</div>


<?php get_template_part('footer');  ?>