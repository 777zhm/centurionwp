<section>
<div class="aboutus_section">
	<div class="container">
		<div class="row justify-content-center aboutus_item">
			<div class="col-md-4">
				<?php 
				$image = get_field('photo_1');
				if( !empty($image) ): ?>
					<img class="img img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
				<?php endif; ?>
			</div>
			<div class="col-md-8 aboutus_text_block">
				<h3><?php the_field('section_heading_1');?></h3>
				<?php if( have_rows('paragraphs_1') ): ?>
					<?php while( have_rows('paragraphs_1') ): the_row(); ?>
					<p><?php the_sub_field('paragraph');?></p>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="row justify-content-center aboutus_item">
			<div class="col-md-8 aboutus_text_block">
				<h3><?php the_field('section_heading_2');?></h3>
				<?php if( have_rows('paragraphs_2') ): ?>
					<?php while( have_rows('paragraphs_2') ): the_row(); ?>
					<p><?php the_sub_field('paragraph');?></p>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="col-md-4">
				<?php 
				$image = get_field('photo_2');
				if( !empty($image) ): ?>
					<img class="img img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
</section>