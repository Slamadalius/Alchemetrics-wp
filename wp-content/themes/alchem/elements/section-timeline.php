<section class="timeline" id="sec4"> <!-- section timeline start -->
        <?php if(have_rows('timeline')) : ?>
            <ul>
              <?php while (have_rows('timeline')) : the_row();
                  $date = get_sub_field('timeline_date');
                  $description = get_sub_field('timeline_description');
              ?>
               <li class="timeline__list"> <!-- timeline list item -->
                <div class="timeline__content">
                    <p class="timeline__time"><?php echo $date;?></p>
                    <?php echo $description; ?>
                </div>
               </li>
              <?php endwhile; reset_rows();?>
              <li class="timeline__list"></li>
              </ul>
        <?php endif; ?>
</section>