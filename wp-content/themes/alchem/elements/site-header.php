    <div class="main_h">  
        
              <a class="logo" href="#">Al/Metric</a>

              <div class="mobile-toggle">
                  <span></span>
                  <span></span>
                  <span></span>
              </div>

              <nav class="nav">
                  <ul class="nav__list">
                      <?php wp_nav_menu(array (
                          'menu' => 'primary-navigation',
                          'theme_location' => 'primary-navigation'
                      )); ?> 
                  </ul>
              </nav>

    </div>
    

  	<header class="header"> <!-- start of the header -->

        <?php if ($logo = get_field('ms_logo', 'option')) : ?>
      		<div class="header__logo-box">
      			<a href="<?php bloginfo('wpurl'); ?>"></a><img src="<?php echo $logo; ?>" alt="Logo" class="header__logo"> <!-- header Logo -->
      		</div>
        <?php endif; ?>
        

        <?php if($header_box = get_field('header_banner')) :?>
    		<div class="header__text-box"> <!-- Main header text and button -->
            <?php echo $header_box; ?>
    		</div>
        <?php endif; ?>

        <div class="mouse">
           <span></span>
        </div>
    	</header> <!-- header end -->

      <div id="loader-wrapper">
          <div id="loader"></div>
       
          <div class="loader-section section-left"></div>
          <div class="loader-section section-right"></div>
       
      </div>
  <main>