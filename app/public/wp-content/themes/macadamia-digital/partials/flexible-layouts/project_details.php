
<?php $heading = get_sub_field('heading');
      $blurb = get_sub_field('blurb');
      $short_description = get_sub_field('short_description'); ?>
<section class="section section-intro background-gray-accent">
    <div class="container">
        <div class="intro">
            <div class="text-content">
                <h2 class="heading"><?php echo $heading; ?></h2>
                <?php echo $blurb; ?>
            </div>
            <div class="spacer-lg-425 spacer-md-125"></div>
        </div>
    </div>
</section>
<?php $links = get_sub_field('links'); ?>
<section class="section section-footnav background-gray-accent">
    <div class="container">
        <div class="footnav">
        <?php if(!empty($links)): ?>

            <a href="<?php echo $links['url'] ?>" class="footnav-prev"><?php echo $links['title'] ?></a>
            <?php endif; ?>

            <p><?php echo $short_description; ?></p>
        </div>
    </div>
</section>

<section class="section section-projectpreview section-projectpreview-detail">
    <div class="container">
        <div class="projectpreview">
            <div class="row">
            <?php $i = 0; ?>

                <?php if( have_rows('gallery') ): 

                    while( have_rows('gallery') ): the_row(); $i++;

                        $image = get_sub_field('image');
                        $image2 = get_sub_field('image_2'); ?>
                  <?php 
                if(get_sub_field('quantity_of_images') == "1"){
              ?>
        
                <div class="col-12">
                    <div class="card">
                        <img src="<?php echo $image['url']; ?>" alt="">
                    </div>
                </div>
                <?php 
                }else{
              ?>
                <div class="col-md-6">
                    <div class="card">
                        <img src="<?php echo $image['url']; ?>" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <img src="<?php echo $image2['url']; ?>" alt="">
                    </div>
                </div>
                <?php 
                }
              ?>
                <?php endwhile; ?>

        <?php endif; ?>

            </div>
        </div>
    </div>
</section>



