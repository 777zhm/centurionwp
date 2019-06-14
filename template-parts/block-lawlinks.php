<section>
<div class="lawlinks_section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="section_heading"><?php the_field('section_heading');?></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<?php if( have_rows('lawlinks') ): ?>
				<ul class="lawlist">
					<?php while( have_rows('lawlinks') ): the_row(); ?>
					<?php $link = get_sub_field('lawlink'); 
						if( $link ): $link_url = $link['url']; $link_title = $link['title']; endif; 
					?>
					<li><span class="hidden-link" data-link="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></span></li>
					<?php endwhile; ?>
				</ul>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
</section>