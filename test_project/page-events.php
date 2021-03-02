<?php
/*
 Template Name: Page Events
 Template Post Type: page
 */

get_header();

$wpb_all_query = new WP_Query(array('post_type' => 'events', 'post_status' => 'publish', 'posts_per_page' => 10,
	'order' => 'ASC'));
the_post();
?>
	<main class="events-page">
		<div class="container">
			<section class="box-events">
				<?php if ($wpb_all_query->have_posts()) { ?>
					<div class="wrap-events grid">
						<?php
						while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>
							<?php get_template_part('template-parts/box/event'); ?>
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
					</div>
				<?php } ?>
			</section>
		</div>
	</main>
<?php get_footer(); ?>