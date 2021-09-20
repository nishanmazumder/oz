<?php

/**
 * Single Post Page
 * 
 * @package NM_OZ
 */
?>

<?php get_header(); ?>

<!---------Banner--------------->
<div class="container-fluid nm-no-gutters" style="max-width: 100%;">
    <div class="row no-gutters">
        <div class="col-md-12">
            <div class="nmBanner">
                <?php if ($nm3webet['blogBanner']) : ?>
                    <img id="" src="<?php echo $nm3webet['blogBanner']['url']; ?>">
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!---------main body--------------->
<main>
    <div class="container nmContainer nmBlog">
        <div class="row no-gutters">
            <div class="col-md-12">
                <div class="nm-page-header">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/') ); ?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo get_post_type_archive_link('post');?>"><?php echo get_the_title( get_option('page_for_posts', true) );?></a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php wp_title(''); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-md-9">
                <h1 class="nm-header-text"><?php wp_title(''); ?></h1>
                <?php
                while (have_posts()) : the_post();
                    get_template_part('template-parts/content', 'single');
                endwhile; // End of the loop.
                ?>
            </div>
            <div class="col-md-3">
                <div class="nm-sidebar">
                    <div class="nm-sidebar-content">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>