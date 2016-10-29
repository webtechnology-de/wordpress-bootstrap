<?php get_header(); ?>

	<section class="container features">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="navy-line"></div>
				<h1><?php _e("Epic 404 - Article Not Found","wpbootstrap"); ?></h1>
				<p><?php _e("This is embarassing. We can't find what you were looking for.","wpbootstrap"); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 text-center">
				<?php get_search_form(); ?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>