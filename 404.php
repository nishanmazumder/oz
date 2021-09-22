<?php

/**
 * Page 404
 * 
 * @package NM_THEME
 */
?>

<?php get_header(); ?>

<main>
    <div class="container nmContainer nmBlog">
        <div class="row no-gutters">
            <div class="col-md-12">
			<div class="">
                <?php if ($nm3webet['nm404']) : ?>
                    <img id="" src="<?php echo $nm3webet['nm404']['url']; ?>">
                <?php endif; ?>
            </div>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();