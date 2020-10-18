<?php
/*
 * Homepage
 */
?>

<?php get_header();?>

<?php if (have_posts()): ?>
	<?php while (have_posts()): the_post();?>

			<?php if (get_field('home_section_1_image') || get_field('home_section_1_content')) {?>
				<div class="home-section home-section-1 text-center"<?php if (get_field('home_section_1_image')) {?> style="background-image: url(<?php the_field('home_section_1_image');?>);"<?php }?>>
					<?php if (get_field('home_section_1_image')) {?><img src="<?php the_field('home_section_1_image');?>" class="img-fluid d-block mb-5 mb-md-0" alt=""><?php }?>
					<?php if (get_field('home_section_1_content')) {?>
						<div class="container d-flex flex-column align-items-center justify-content-center">
							<?php the_field('home_section_1_content');?>
						</div>
					<?php }?>
				</div>
			<?php }?>

			<?php if (get_field('ticker') || get_field('ticker')) {?>
				<div>
					<?php the_field('ticker');?>
				</div>
			<?php }?>

			<?php if (get_field('home_section_2_image') || get_field('home_section_2_content')) {?>
				<div class="home-section home-section-2 py-6">
					<div class="container">
	  				<div class="row align-items-lg-center justify-content-center">
							<?php if (get_field('home_section_2_image')) {?>
								<div class="col-md-5">
									<?php if (get_field('home_section_2_image_link')) {?><a href="<?php the_field('home_section_2_image_link');?>"><?php }?><img src="<?php the_field('home_section_2_image');?>" class="img-fluid mx-auto d-block mb-5 mb-md-0" alt=""><?php if (get_field('home_section_2_image_link')) {?></a><?php }?>
								</div>
							<?php }?>
							<?php if (get_field('home_section_2_content')) {?>
								<div class="col-md-4">
									<?php the_field('home_section_2_content');?>
								</div>
							<?php }?>
						</div>
					</div>
				</div>
			<?php }?>

			<?php if (get_field('home_section_3_content')) {?>
				<div class="home-section home-section-3 text-center">
					<div class="container-fluid">
						<div class="row align-items-stretch">
							<?php if (get_field('home_section_3_content')) {?>
								<div class="col-md-6 home-section-3-col-1 py-6 d-flex flex-column align-items-center justify-content-center">
									<div>
										<?php the_field('home_section_3_content');?>
									</div>
								</div>
							<?php }?>
							<?php if (get_field('home_section_3_icon_1_image') || get_field('home_section_3_icon_1_content') || get_field('home_section_3_icon_2_image') || get_field('home_section_3_icon_2_content') || get_field('home_section_3_icon_3_image') || get_field('home_section_3_icon_3_content') || get_field('home_section_3_icon_4_image') || get_field('home_section_3_icon_4_content')) {?>
								<div class="col-md-6 home-section-3-col-2 py-6 d-flex flex-column justify-content-center">
									<div class="container-fluid">
										<div class="row">
											<?php if (get_field('home_section_3_icon_1_image') || get_field('home_section_3_icon_1_content')) {?>
												<div class="col-md-6 mb-5 mb-md-0 d-flex flex-column align-items-center">
													<div>
														<?php if (get_field('home_section_3_icon_1_image')) {?>
															<?php if (get_field('home_section_3_icon_1_image_link')) {?><a href="<?php the_field('home_section_3_icon_1_image_link');?>"><?php }?><img src="<?php the_field('home_section_3_icon_1_image');?>" class="mb-4" alt=""><?php if (get_field('home_section_3_icon_1_image_link')) {?></a><?php }?>
														<?php }?>
														<?php if (get_field('home_section_3_icon_1_content')) {?>
															<?php the_field('home_section_3_icon_1_content');?>
														<?php }?>
													</div>
												</div>
											<?php }?>
											<?php if (get_field('home_section_3_icon_2_image') || get_field('home_section_3_icon_2_content')) {?>
												<div class="col-md-6 mb-5 mb-md-0 d-flex flex-column align-items-center">
													<div>
														<?php if (get_field('home_section_3_icon_2_image')) {?>
															<?php if (get_field('home_section_3_icon_2_image_link')) {?><a href="<?php the_field('home_section_3_icon_2_image_link');?>"><?php }?><img src="<?php the_field('home_section_3_icon_2_image');?>" class="mb-4" alt=""><?php if (get_field('home_section_3_icon_2_image_link')) {?></a><?php }?>
														<?php }?>
														<?php if (get_field('home_section_3_icon_2_content')) {?>
															<?php the_field('home_section_3_icon_2_content');?>
														<?php }?>
													</div>
												</div>
											<?php }?>
										</div>
										<div class="row">
											<?php if (get_field('home_section_3_icon_3_image') || get_field('home_section_3_icon_3_content')) {?>
												<div class="col-md-6 mb-5 mb-md-0 d-flex flex-column align-items-center">
													<div>
														<?php if (get_field('home_section_3_icon_3_image')) {?>
															<?php if (get_field('home_section_3_icon_3_image_link')) {?><a href="<?php the_field('home_section_3_icon_3_image_link');?>"><?php }?><img src="<?php the_field('home_section_3_icon_3_image');?>" class="mt-md-5 mb-4" alt=""><?php if (get_field('home_section_3_icon_3_image_link')) {?></a><?php }?>
														<?php }?>
														<?php if (get_field('home_section_3_icon_3_content')) {?>
															<?php the_field('home_section_3_icon_3_content');?>
														<?php }?>
													</div>
												</div>
											<?php }?>
											<?php if (get_field('home_section_3_icon_4_image') || get_field('home_section_3_icon_4_content')) {?>
												<div class="col-md-6 d-flex flex-column align-items-center">
													<div>
														<?php if (get_field('home_section_3_icon_4_image')) {?>
															<?php if (get_field('home_section_3_icon_4_image_link')) {?><a href="<?php the_field('home_section_3_icon_4_image_link');?>"><?php }?><img src="<?php the_field('home_section_3_icon_4_image');?>" class="mt-md-5 mb-4" alt=""><?php if (get_field('home_section_3_icon_4_image_link')) {?></a><?php }?>
														<?php }?>
														<?php if (get_field('home_section_3_icon_4_content')) {?>
															<?php the_field('home_section_3_icon_4_content');?>
														<?php }?>
													</div>
												</div>
											<?php }?>
										</div>
									</div>
								</div>
							<?php }?>
						</div>
					</div>
				</div>
			<?php }?>

			<?php if (get_field('home_section_4_title') || get_field('home_section_4_column_1_image') || get_field('home_section_4_column_1_content') || get_field('home_section_4_column_2_image') || get_field('home_section_4_column_2_content')) {?>
				<div class="home-section home-section-4 py-6 text-center">
					<?php if (get_field('home_section_4_title')) {?>
						<h2><?php the_field('home_section_4_title');?></h2>
					<?php }?>
					<div class="container-fluid">
						<div class="row justify-content-center">
							<?php if (get_field('home_section_4_column_1_image') || get_field('home_section_4_column_1_content')) {?>
								<div class="col-md-4 my-4 mb-md-0 d-flex flex-column align-items-center">
									<div>
										<?php if (get_field('home_section_4_column_1_image')) {?>
											<?php if (get_field('home_section_4_column_1_image_link')) {?><a href="<?php the_field('home_section_4_column_1_image_link');?>"><?php }?><img src="<?php the_field('home_section_4_column_1_image');?>" class="mt-md-4 mb-4" alt=""><?php if (get_field('home_section_4_column_1_image_link')) {?></a><?php }?>
										<?php }?>
										<?php if (get_field('home_section_4_column_1_content')) {?>
											<?php the_field('home_section_4_column_1_content');?>
										<?php }?>
									</div>
								</div>
							<?php }?>
							<?php if (get_field('home_section_4_column_2_image') || get_field('home_section_4_column_2_content')) {?>
								<div class="col-md-4 mt-4 d-flex flex-column align-items-center">
									<div>
										<?php if (get_field('home_section_4_column_2_image')) {?>
											<?php if (get_field('home_section_4_column_2_image_link')) {?><a href="<?php the_field('home_section_4_column_2_image_link');?>"><?php }?><img src="<?php the_field('home_section_4_column_2_image');?>" class="mt-md-4 mb-4" alt=""><?php if (get_field('home_section_4_column_2_image_link')) {?></a><?php }?>
										<?php }?>
										<?php if (get_field('home_section_4_column_2_content')) {?>
											<?php the_field('home_section_4_column_2_content');?>
										<?php }?>
									</div>
								</div>
							<?php }?>
						</div>
					</div>
				</div>
			<?php }?>

			<?php if (get_field('home_section_5_image') || get_field('home_section_5_content')) {?>
				<div class="home-section home-section-5 py-6">
					<div class="container-fluid">
						<div class="row justify-content-center">
							<?php if (get_field('home_section_5_image')) {?>
								<div class="col-md-4">
									<img src="<?php the_field('home_section_5_image');?>" class="img-fluid w-75 mb-5 mb-md-0" alt="">
								</div>
							<?php }?>
							<?php if (get_field('home_section_5_content')) {?>
								<div class="col-md-4">
									<?php the_field('home_section_5_content');?>
								</div>
							<?php }?>
						</div>
					</div>
				</div>
			<?php }?>

			<?php if (get_field('home_section_6_title') || get_field('home_section_6_column_1_content') || get_field('home_section_6_column_2_content')) {?>
				<div class="home-section home-section-6 pb-6 text-center">
					<?php if (get_field('home_section_6_title')) {?>
						<h2><?php the_field('home_section_6_title');?></h2>
					<?php }?>
					<div class="container-fluid">
						<div class="row justify-content-center">
							<?php if (get_field('home_section_6_column_1_content')) {?>
								<div class="col-md-4 mb-4 mb-md-0 d-flex flex-column align-items-center">
									<div>
										<?php the_field('home_section_6_column_1_content');?>
									</div>
								</div>
							<?php }?>
							<?php if (get_field('home_section_6_column_2_content')) {?>
								<div class="col-md-4 d-flex flex-column align-items-center">
									<div>
										<?php the_field('home_section_6_column_2_content');?>
									</div>
								</div>
							<?php }?>
						</div>
					</div>
				</div>
			<?php }?>

		<?php endwhile;?>
<?php else: ?>

	<article>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-6 py-5">
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

<?php endif;?>

<?php get_footer();?>
