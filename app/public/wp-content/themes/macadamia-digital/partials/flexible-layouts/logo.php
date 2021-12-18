<section class="section section-ourclients">
        <div class="container">
          <div class="ourclients">
        <?php if(have_rows('logo_repeater')): 
            while( have_rows('logo_repeater') ): the_row(); 
              $heading = get_sub_field('heading'); ?> 
            <div class="box">
              <div class="row">
                <div class="col-lg-3">
                  <h4><?php echo $heading; ?></h4>
                </div>
                <div class="col-lg-9">
                  <div class="media">
                  <?php 
                    $images = get_sub_field('logo');
                    if( $images ): ?>
                    <?php foreach( $images as $image ): ?>
                    <div class="item">
                      <img src="<?php echo esc_url($image['url']); ?>" alt="">
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>

                  </div>
                </div>
              </div>
            </div>
            <?php endwhile; endif;?>
          </div>
        </div>
      </section>