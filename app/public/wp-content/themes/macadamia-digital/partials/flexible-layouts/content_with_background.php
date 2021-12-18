<?php $content = get_sub_field('content');
      $background_color = get_sub_field('background_color'); ?>

<section class="section section-intro section-intro-mini" style="background-color: <?php echo $background_color; ?>">
    <div class="container">
        <div class="intro">
        <div class="text-content">
            <?php echo $content; ?>
        </div>
        </div>
    </div>
</section>