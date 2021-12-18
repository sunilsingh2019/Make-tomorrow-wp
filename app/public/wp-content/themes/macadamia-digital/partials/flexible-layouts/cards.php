<?php if(have_rows('cards_repeater')): ?>

<section class="section section-homelinks">
        <div class="container">
          <div class="homelinks">
            <div class="row">
              <?php while(have_rows('cards_repeater')): the_row();
                     $heading = get_sub_field('heading');
                     $image = get_sub_field('image');
                     $link = get_sub_field('link'); ?>
              <div class="col-md-6">
                <a href="<?php echo $link['url'] ?>" class="card">
                  <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title'] ?>">
                  <h3><?php echo $heading; ?></h3>
                </a>
              </div>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
      </section>
<?php endif;