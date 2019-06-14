<section>
<div class="services_section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="section_heading"><?php the_field('section_heading');?></h2>
			</div>
		</div>
		<?php 
		$service_1 = get_field('service_1', false, false);
		$service_2 = get_field('service_2', false, false);
		$service_3 = get_field('service_3', false, false);
		$service_4 = get_field('service_4', false, false);
		$service_5 = get_field('service_5', false, false);
		$service_6 = get_field('service_6', false, false);
		$service_7 = get_field('service_7', false, false);
		$service_8 = get_field('service_8', false, false);

		?>
		<div class="row text-center">
		<?php if( $service_1 ): ?>
			<div class="col-md-3 service_item">
				<a href="<?php echo get_the_permalink($service_1); ?>">
					<img class="service_icon" src="<?php assets_url('img/svg/service_1.svg') ?>" alt="service_icon">
					<span class="service_text"><?php echo get_the_title($service_1); ?></span>
				</a>
				<span class="service_item_line service_item_line_lg"></span>
			</div>
		<?php endif; ?>

		<?php if( $service_2 ): ?>
			<div class="col-md-3 service_item">
				<a href="<?php echo get_the_permalink($service_2); ?>">
					<img class="service_icon" src="<?php assets_url('img/svg/service_2.svg') ?>" alt="service_icon">
					<span class="service_text"><?php echo get_the_title($service_2); ?></span>
				</a>
				<span class="service_item_line service_item_line_lg"></span>
			</div>
		<?php endif; ?>

		<?php if( $service_3 ): ?>
			<div class="col-md-3 service_item">
				<a href="<?php echo get_the_permalink($service_3); ?>">
					<img class="service_icon" src="<?php assets_url('img/svg/service_3.svg') ?>" alt="service_icon">
					<span class="service_text"><?php echo get_the_title($service_3); ?></span>
				</a>
				<span class="service_item_line service_item_line_lg"></span>
			</div>
		<?php endif; ?>

		<?php if( $service_4 ): ?>
			<div class="col-md-3 service_item">
				<a href="<?php echo get_the_permalink($service_4); ?>">
					<img class="service_icon" src="<?php assets_url('img/svg/service_4.svg') ?>" alt="service_icon">
					<span class="service_text"><?php echo get_the_title($service_4); ?></span>
				</a>
				<span class="service_item_line service_item_line_lg"></span>
			</div>
		<?php endif; ?>

		<?php if( $service_5 ): ?>
			<div class="col-md-3 service_item">
				<a href="<?php echo get_the_permalink($service_5); ?>">
					<img class="service_icon" src="<?php assets_url('img/svg/service_5.svg') ?>" alt="service_icon">
					<span class="service_text"><?php echo get_the_title($service_5); ?></span>
				</a>
				<span class="service_item_line"></span>
			</div>
		<?php endif; ?>

		<?php if( $service_6 ): ?>
			<div class="col-md-3 service_item">
				<a href="<?php echo get_the_permalink($service_6); ?>">
					<img class="service_icon" src="<?php assets_url('img/svg/service_6.svg') ?>" alt="service_icon">
					<span class="service_text"><?php echo get_the_title($service_6); ?></span>
				</a>
				<span class="service_item_line"></span>
			</div>
		<?php endif; ?>

		<?php if( $service_7 ): ?>
			<div class="col-md-3 service_item">
				<a href="<?php echo get_the_permalink($service_7); ?>">
					<img class="service_icon" src="<?php assets_url('img/svg/service_7.svg') ?>" alt="service_icon">
					<span class="service_text"><?php echo get_the_title($service_7); ?></span>
				</a>
				<span class="service_item_line"></span>
			</div>
		<?php endif; ?>

		<?php if( $service_8 ): ?>
			<div class="col-md-3 service_item">
				<a href="<?php echo get_the_permalink($service_8); ?>">
					<img class="service_icon" src="<?php assets_url('img/svg/service_8.svg') ?>" alt="service_icon">
					<span class="service_text"><?php echo get_the_title($service_8); ?></span>
				</a>
				<span class="service_item_line"></span>
			</div>
		<?php endif; ?>
		</div>
	</div>
</div>
</section>