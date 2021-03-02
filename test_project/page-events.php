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
						<?php $fields = get_fields(); ?>
							<div class="col-4_sm-6_xs-12 wrap-event">
								<?php if (!empty(get_the_post_thumbnail())) { ?>
									<div class="wrap-image"
									     style="background-image: url('<?php the_post_thumbnail_url() ?>')">
									</div>
								<?php } ?>
								<?php if(!empty($fields['single_event']['start_date']) && !empty($fields['single_event']['end_date']) ) {?>
								<div class="date">
									<?php echo $fields['single_event']['start_date'] . ' - ' . $fields['single_event']['end_date']?>
								</div>
								<?php }?>
								<?php if (!empty(get_the_title())) { ?>
									<h3 class="event-title"><?php the_title(); ?></h3>
								<?php } ?>
								<?php if (!empty(get_the_excerpt())) { ?>
									<p class="event-description"><?php the_excerpt(); ?></p>
								<?php } ?>
							</div>
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
					</div>
				<?php } ?>
			</section>
		</div>
	</main>

<?php get_footer(); ?>