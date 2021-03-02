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