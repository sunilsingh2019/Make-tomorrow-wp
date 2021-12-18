<section class="section section-capboxes">
                <div class="container">
                    <div class="capboxes">
                        <div class="row">
                        <?php $i = 0; ?>
                            <?php if(have_rows('card')):
                                while(have_rows('card')): the_row(); $i++;
                                $heading = get_sub_field('heading');
                                $blurb = get_sub_field('blurb');
                                $image = get_sub_field('image');
                                 ?>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="image">
                                        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title'] ?>">
                                    </div>
                                    <div class="text">
                                        <span>0<?php echo $i; ?></span>
                                        <h3><?php echo $heading; ?></h3>
                                        <p><?php echo $blurb; ?></p>
                                    </div>
                                </div>
                            </div>
                           <?php endwhile; endif; ?>
                        </div>
                    </div>
                </div>
            </section>