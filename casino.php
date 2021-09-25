<?php
/*
	Template Name: Casino
*/

?>

<?php get_header(); ?>

<!---------main body--------------->
<main>
    <div class="container nmContainer">
        <div class="row no-gutters">
            <div class="col-md-12 nm_home_ads_top text-center">
                <?php
                if (function_exists('nm_ads_banner')) {
                    nm_ads_banner();
                }
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12 nm-home-content">
                        <?php if ($nm3webet['nmReconmandedTitle']) : ?>
                            <h4><?php echo $nm3webet['nmReconmandedTitle']; ?></h4>
                        <?php endif; ?>
                    </div>
                    <!------- for cards ---------->
                    <!-- <div class="slck pt-3" style="width: 1250px!important;"> -->
                    <div class="slck pt-3 col-md-12 col-sm-12 col-xs-12">
                        <?php
                        $gamesCat = $nm3webet['nm3betCategory'];
                        $games = new WP_Query(
                            array(
                                'post_type'     => 'games',
                                'posts_per_page' => 6,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'games-category',
                                        'field'    => 'id',
                                        'terms'    => $gamesCat,
                                    ),
                                ),
                            )
                        );

                        if ($games->have_posts()) :
                            while ($games->have_posts()) : $games->the_post(); ?>
                                <div class="slckCard">
                                    <?php $post_thumbnail_id = get_post_thumbnail_id($post->ID);
                                    if (!empty($post_thumbnail_id)) {
                                        $img_ar =  wp_get_attachment_image_src($post_thumbnail_id, 'full'); ?>
                                        <img class="slckImage pt-3 px-4" src="<?php echo $img_ar[0]; ?>">
                                    <?php } ?>
                                    <button class="btn btn-warning center mb-1 mt-3 slckBtn" onclick="window.location.href='<?php echo esc_url(get_post_meta(get_the_ID(), 'nm3webtnTextUrl', true)); ?>'">
                                        <?php
                                        $btnText  = get_post_meta(get_the_ID(), 'nm3webtnTextName', true);
                                        echo esc_html($btnText);
                                        ?>
                                    </button>
                                </div>
                        <?php endwhile;
                        else :
                            echo '<h1 style="color: #fff; font-size: 28px;">Post Not Found!</h1>';
                        endif;
                        ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 nm-home-content">
                        <?php
                        if (have_posts()) : while (have_posts()) : the_post();
                                the_content();
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>

                <div class="row no-gutters">
                    <div class="col-md-12 nm-home-content">
                        <?php
                        if ($nm3webet['nmHomeTextone']) {
                            echo do_shortcode($nm3webet['nmHomeTextone']);
                        } else {
                            echo '<h1 class="text-center">Content Not Found!</h1>';
                        }
                        ?>

                    </div>
                </div>
            </div>
            <div class="col-md-3 nm-sidebar-home">
                <?php get_sidebar(); ?>
            </div>
        </div>

        <div class="clearfix"></div>
    </div>
</main>
<!---------end main body-------------->

<?php get_footer(); ?>