<?php $heading = get_sub_field('heading');
      $content = get_sub_field('content'); 
      $background_color = get_sub_field('background_color');
      $content_spacier = get_sub_field('content_spacier');
      $field = get_sub_field_object( 'narrowbolder' );
      $value = $field['value'];
      $label = $field['choices'][ $value ];
    ?>
<section class="section section-intro" style="background-color: <?php echo $background_color; ?> !important;">
    <div class="container">
        <div class="intro">
        <div class="text-content <?php if (!empty($value)):?> <?php echo esc_attr($value); ?><?php endif;?>">
            <h2 class="heading"><?php echo $heading; ?></h2>
            <?php echo $content; ?>
        </div>
        <div class="spacer-lg-425 spacer-md-125" style="height:<?php echo $content_spacier; ?>px !important;"></div>
        </div>
    </div>
</section>