<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<article>
			<header>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-6 py-5">
							<h1><?php the_title(); ?></h1>
							<?php if(get_field('page_subtitle')) { ?>
								<p><?php the_field('page_subtitle'); ?></p>
							<?php } ?>
						</div>
						<div class="col-md-4"></div>
					</div>
				</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6"></div>
						<div class="col-md-6 align-self-end">
							<?php if ( has_post_thumbnail() ) {
							    echo '<img src="' . get_the_post_thumbnail_url() . '" class="img-fluid" alt="" />';
							} else {
							    echo '<img src="' . get_stylesheet_directory_uri() . '/img/header-default-image.jpg" class="img-fluid" alt="" />';
							} ?>
						</div>
					</div>
				</div>
			</header>
			<div class="container py-5">
				<div class="row justify-content-center">
					<div class="col-md-6 mb-5 mb-md-0">
						<?php the_content(); ?>
					</div>
					<div class="col-md-4">
						<?php if ( is_active_sidebar('page-sidebar')) : ?>
				      <div class="mb-4">
								<?php dynamic_sidebar('page-sidebar'); ?>
							</div>
				    <?php endif; ?>
						<?php wp_nav_menu(array('theme_location' => 'page-sidebar-menu', 'container' => '')); ?>
					</div>
				</div>
			</div>
		</article>

	<?php endwhile; ?>
<?php else : ?>

	<article>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-5 py-5">
						<h1>404 &mdash; Page not found</h1>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6"></div>
					<div class="col-md-6 align-self-end">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/header-default-image.jpg" class="img-fluid" alt="" />
					</div>
				</div>
			</div>
		</header>
		<div class="container py-5">
			<p>This page cannot be found.</p>
		</div>
	</article>

<?php endif; ?>

<?php get_footer(); ?>
