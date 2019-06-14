<section>
<div class="seo_section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="section_heading"><?php the_field('section_heading');?></h3>
				
				<?php if( have_rows('paragraphs_1') ): ?>
					<?php while( have_rows('paragraphs_1') ): the_row(); ?>
					<p><?php the_sub_field('paragraph');?></p>
					<?php endwhile; ?>
				<?php endif; ?>

				<?php if( have_rows('lists') ): ?>
					<ul>
					<?php while( have_rows('lists') ): the_row(); ?>
					<li><?php the_sub_field('listitem');?></li>
					<?php endwhile; ?>
					</ul>
				<?php endif; ?>

				<?php if( have_rows('paragraphs_2') ): ?>
					<?php while( have_rows('paragraphs_2') ): the_row(); ?>
					<p><?php the_sub_field('paragraph');?></p>
					<?php endwhile; ?>
				<?php endif; ?>

			</div>
		</div>
	</div>
</div>
</section>