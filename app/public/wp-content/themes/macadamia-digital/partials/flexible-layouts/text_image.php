<?php $heading = get_sub_field('heading');
      $blurb = get_sub_field('blurb');
      $link_1 = get_sub_field('link_1');
      $link_2 = get_sub_field('link_2');
      $image = get_sub_field('image');
      ?>
<section class="section section-howdy">
        <div class="container">
          <div class="howdy">
            <div class="row">
              <div class="col-lg-6">
                <div class="text-content">
                  <h3 class="heading"><?php echo $heading; ?></h3>
                  <?php echo $blurb; ?>
                  <div class="spacer-lg-225 spacer-md-100 spacer-25"></div>
                  <ul>
                    <li><a href="<?php echo $link_1['url'] ?>"><?php echo $link_1['title'] ?></a></li>
                    <li><a href="<?php echo $link_2['url'] ?>" class="text-underline"
                        target="_blank"><?php echo $link_2['title'] ?></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6">
                <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title'] ?>" class="imgfit">
              </div>
            </div>
          </div>
        </div>
      </section>