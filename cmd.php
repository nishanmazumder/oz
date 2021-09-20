<?php
/*
	Template Name: CMD
*/
get_header(); ?>

<!---------main body--------------->
<main>
    <div class="container nmBlog">
        <div class="row no-gutters">
            <div class="col-md-9">
                    <?php the_content(); ?>
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
