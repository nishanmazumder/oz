<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package 3WEBET
 */

?>

<div class="col-md-6">
<?php if ( has_post_thumbnail() ) :
    the_post_thumbnail('blog-img', array('class' => 'nm-blog-img'));
endif; ?>
    <div class="nm-blog-area">
        <div class="nm-blog-cat">
            <span class="text-left font-weight-normal">
            
			<?php
            $categories = get_the_category();
            foreach($categories as $category){
                $cat_id = get_cat_ID($category->name);
                $cat_link = get_category_link($cat_id);
                echo '<a href="'.esc_url($cat_link).'" style="margin-right: 5px;">'.$category->name.'</a>';
            }
            ?>
            </span>
            <span class="float-right nm-blog-date"><?php the_time('F d, Y'); ?></span>
        </div>
        <h1 class="font-weight-bold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <p><?php read_more(50); ?>...</p>
        <a href="<?php the_permalink(); ?>" class="nm-read-more text-danger">Read More ></a>
    </div>
</div>
