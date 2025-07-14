<?php
$title     = !empty($title)? $title : '';
$logo_list = !empty($logo_list)? $logo_list : [];
?>
<div class="logo-item">
    <?php if (!empty($title)): ?>
        <h2><?php echo $title; ?></h2>
    <?php endif; ?>

    <?php if (!empty($logo_list)): ?>
        <div class="logo-holder">
            <?php foreach ($logo_list as $item):
                $image_id = !empty($item['image'])? $item['image'] : '';
                $link     = !empty($item['link'])? $item['link'] : 'javascript:void(0)';
                ?>
                <a href="<?php echo $link; ?>" target="_blank">
                    <?php echo wp_get_attachment_image($image_id, 'medium'); ?>
                </a>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

</div>
