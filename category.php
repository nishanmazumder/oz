<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package 3WEBET
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
							<li class="breadcrumb-item"><a href="<?php the_permalink('home'); ?>">Home</a></li>
							<li class="breadcrumb-item">Category</li>
							<li class="breadcrumb-item active" aria-current="page"><?php wp_title(''); ?></li>
						</ol>
					</nav>
				</div>
			</div>
			<div class="col-md-9">
				<div class="row">
					<?php if (have_posts()) : 
						/* Start the Loop */
						while (have_posts()) : the_post();
							get_template_part('template-parts/category');
						endwhile;
					endif;
					?>

					<!-- Pagination -->
					<div class="col-md-12 text-center">
						<nav aria-label="Page navigation">
							<ul class="pagination">
								<li><?php nm_post_pagi(); ?></li>
							</ul>
						</nav>
					</div>
				</div>
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

<?php

get_footer();
