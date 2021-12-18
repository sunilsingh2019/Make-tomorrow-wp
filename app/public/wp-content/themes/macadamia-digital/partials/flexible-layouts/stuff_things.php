<section class="section section-projectpreview">
    <div class="container">
        <div class="projectpreview">
            <div class="row">
            <?php
                  $args = array( 'post_type' => 'stuff-things', 'posts_per_page' =>  -1 );
                  $loop = new WP_Query( $args );
                  while ( $loop->have_posts() ) : $loop->the_post();
                       $thumbnail_url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), '', true);
               ?>
                <div class="col-md-6">
                    <a href="<?php the_permalink(); ?>" class="card">
                        <img src="<?php echo $thumbnail_url[0]; ?>" alt="">
                        <div class="overlay">
                            <h3 class="heading"><?php the_title(); ?></h3>
                        </div>
                    </a>
                </div>
                <?php endwhile; ?>
             <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>