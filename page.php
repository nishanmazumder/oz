<?php

/**
 * Page
 * 
 * @package NM_OZ
 */
?>

<?php get_header(); ?>

<?php get_template_part('template-parts/header/site', 'title'); ?>

<main>
    <div class="container nmBlog">
        <div class="row no-gutters">
            <div class="col-md-12">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>