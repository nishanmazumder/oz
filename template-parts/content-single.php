<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package 3WEBET
 */

?>

<?php if (has_post_thumbnail()) :
    the_post_thumbnail('blog-img', array('class' => 'nm-blog-img'));
endif; ?>
<div class="nm-blog-area">
    <div class="nm-blog-cat">
        <div class="floa-left d-inline">
        <span class="font-weight-bold">Categories: </span>
        <?php
            $categories = get_the_category();
            foreach($categories as $category){
                $cat_id = get_cat_ID($category->name);
                $cat_link = get_category_link($category);
                echo '<a href="'.esc_url($cat_link).'" style="margin-right: 5px;">'.$category->name.'</a>';
            }
            ?> | <span class="font-weight-bold">Published by: </span><?php the_author();?>
        </div>
        <span class="float-right nm-blog-date"><?php the_time('F d, Y'); ?></span>
    </div>
    <h1 class="font-weight-bold"><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>
</div>