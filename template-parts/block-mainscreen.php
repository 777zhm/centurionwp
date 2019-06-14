<section>
<div class="heroscreen_section" style="background-image: url(<?php assets_url('img/heroscreen_bg.jpg') ?>);">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-7 col-sm-10">
				<h1><?php the_field('section_heading');?></h1>
				<p class="subheading"><?php the_field('section_subheading');?></p>
				<a class="callback" href="tel:<?php the_field('admin_tel_1', 'theme_settings'); ?>">
					<svg class="callback_icon" version="1.1" viewBox="0 0 23 33" xmlns="http://www.w3.org/2000/svg">
						<g transform="translate(-251 -566)" fill="#83817F" fill-rule="nonzero">
							<g transform="translate(218 546)">
								<g transform="translate(33 20)">
									<path d="m22.999 31.104l-5.0614-9.3431c-0.0115 0.0055-2.8376 1.3338-2.967 1.3901-3.22 1.4932-9.7736-10.752-6.6254-12.367l2.9943-1.4108-5.0212-9.3734-3.0274 1.4286c-10.353 5.1631 6.0849 35.725 16.675 31.096 0.17394-0.075625 3.0216-1.4149 3.0331-1.4204z"></path>
								</g>
							</g>
						</g>
					</svg>
					<span class="callback_text"><?php the_field('button_text');?></span>
				</a>
			</div>
		</div>
	</div>
</div>
</section>