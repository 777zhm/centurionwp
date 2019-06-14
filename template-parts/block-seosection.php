<section>
<div class="seo_section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="section_heading"><?php the_field('section_heading');?></h3>
				<?php if( have_rows('paragraphs') ): ?>
					<?php while( have_rows('paragraphs') ): the_row(); ?>
					<p><?php the_sub_field('paragraph');?></p>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
</section>