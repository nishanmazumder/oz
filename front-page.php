<?php

/**
 * Home Page
 * 
 * @package NM_OZ
 */

?>

<?php get_header(); ?>

<div class="container-fluid nm-no-gutters" style="max-width: 100%;">
    <div class="row no-gutters">
        <div class="col-md-12">
            <div class="nmBanner">
                <a href="#" target="_blank">
                    <?php if($nm3webet['nm3betBannerUpload']):?>
                    <img id="" src="<?php echo $nm3webet['nm3betBannerUpload']['url']; ?>">
                    <?php endif;?>
                </a>
            </div>
        </div>
    </div>
</div>
<!---------main body--------------->
<main>

    <div class="container nmContainer">
        <div class="row no-gutters">
            <div class="pt-5 col-md-12 nm-home-content">
                <h4> Top Trending Games</h4>
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

        <!------------------contents---------------------------->
        <div class="row no-gutters">
            <div class="col-md-12 nm-home-content">
                <?php
                if ($nm3webet['nmHomeTextone']) {
                    echo $nm3webet['nmHomeTextone'];
                } else {
                    echo '<h1 class="text-center">Content Not Found!</h1>';
                }
                ?>

            </div>
        </div>
        <!-----------------end contents------------------->

        <!-----------lower banner------------->
        <!-- <img src="assets/images/home-page/banner.jpg" style="height: 200px; width: 1260px"> -->
        <div class="row no-gutters">
            <div class="col-md-12">
                <img src="<?php echo $nm3webet['nm3betads']['url']; ?>" style="height: auto; width: 100%">
            </div>
        </div>


        <!-----------end lower banner------------->
        <div class="row">
            <div class="col-md-12">
                <h4 class="pt-4">Read More</h4>
            </div>

            <div class="nm-silk-2-container">
                
            <?php
                $gamesCat2 = $nm3webet['nm3betCategory2'];
                $ReadMore = new WP_Query(
                    array(
                        'post_type'     => 'games',
                        'posts_per_page' => 7,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'games-category',
                                'field'    => 'id',
                                'terms'    => $gamesCat2,
                            ),
                        ),
                    )
                );

                if ($ReadMore->have_posts()) :
                    while ($ReadMore->have_posts()) : $ReadMore->the_post(); ?>
                        <div class="slckCard2">
                            <?php $post_thumbnail_id = get_post_thumbnail_id($post->ID);
                            if (!empty($post_thumbnail_id)) {
                                $img_ar =  wp_get_attachment_image_src($post_thumbnail_id); ?>
                                <img class="slckImage2 pt-3 px-4" style="text-align: center" src="<?php echo $img_ar[0]; ?>">
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
        <div class="clearfix"></div>
    </div>
</main>
<!---------end main body-------------->

<?php get_footer(); ?>