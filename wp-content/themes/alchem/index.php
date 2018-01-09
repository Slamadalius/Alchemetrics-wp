<?php get_template_part('header'); ?>

<div class="secblog">
    
    
    <p>Blog</p>

    <?php if ($logo = get_field('ms_logo', 'option')) : ?>
          <div class="blog__logo-box">
            <a href="<?php bloginfo('wpurl'); ?>"><img src="<?php echo $logo; ?>" alt="Logo" class="header__logo"></a> <!-- header Logo -->
          </div>
    <?php endif; ?>
    
    
</div>




<div class="row">
    
    
    <div class="col-2-of-3 blogbox">
       
       
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
          
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>">Read More....</a>
           
       </div>
       
       
       <?php endwhile; ?>
       <?php endif; ?>
       
        
    </div>
    
    
    
    
    
    
    
    <div class="col-1-of-3 blogbox sidebar">
       
       <?php if(is_active_sidebar('Blog Widgets') ) : ?>
       <?php dynamic_sidebar('Blog Widgets'); ?>
       <?php endif; ?>     
        
    </div>
    
</div>

<?php get_template_part('footer'); ?> 
