<?php
    global $pile;
    ob_start();
    do_action( 'pile_gallery/before_shortcode', $atts, $pile );
?>

	<div class="pile-gallery">
        <ul class="pile-gallery-grid" <?php $this->data_attributes( $atts ) ?> >
        <?php foreach( $pile as $item ) : ?>

                <li data-pile="<?php echo $item['pile'] ?>">
                <a href="#">
                    <span class="pile-gallery-info">
                    <span><?php echo $item['title'] ?></span>
                    </span>
                    <img src="<?php echo $item['img'] ?>" />
                </a>
                </li>
        <?php endforeach ?>

        </ul>

    	<span class="pile-gallery-close">←</span>

	</div>

    <?php do_action( 'pile_gallery/after_shortcode', $atts, $pile ); ?>


<?php
    return ob_get_clean();
?>
