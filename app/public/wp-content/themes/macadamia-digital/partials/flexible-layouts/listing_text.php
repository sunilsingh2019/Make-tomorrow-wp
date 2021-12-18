<?php $heading = get_sub_field('heading'); ?>
<section class="section section-capabilities">
                <div class="container">
                    <div class="capabilities">
                        <div class="section-head">
                            <h2 class="heading"><?php echo $heading; ?></h2>
                            <div class="row">
                                <?php if(have_rows('listing_text_repeater')): 
                                    while( have_rows('listing_text_repeater') ): the_row(); 
                                         $item = get_sub_field('item'); ?> 
                                <div class="col-lg-3 col-sm-6">
                                    <p><?php echo $item; ?></p>
                                </div>
                                <?php endwhile; endif;?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>