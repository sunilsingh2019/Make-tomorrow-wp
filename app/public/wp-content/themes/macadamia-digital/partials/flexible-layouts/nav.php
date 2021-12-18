<?php $link_1 = get_sub_field('link_1');
    $link_2 = get_sub_field('link_2'); ?>
<section class="section section-footnav">
    <div class="container">
        <div class="footnav">
        <?php if(!empty('$link_1')): ?>
            <a href="<?php echo $link_1['url'] ?>" class="footnav-prev"><?php echo $link_1['title'] ?></a>
        <?php endif;?>
        <?php if(!empty('$link_2')): ?>
            <a href="<?php echo $link_2['url'] ?>" class="footnav-next"><?php echo $link_2['title'] ?></a>
        <?php endif;?>
        </div>
    </div>
</section>