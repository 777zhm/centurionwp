<section>
<div class="features_section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="section_heading"><?php the_field('section_heading');?></h2>
			</div>
		</div>
		<div class="row justify-content-between text-center">
			<div class="col-lg-2 col-md-5 col-sm-6 feature_item">
				<img class="feature_icon" src="<?php assets_url('img/svg/time.svg') ?>" alt="feature_icon">
				<div class="feature_text feature_divider">
					<p><?php the_field('feature_text_1');?></p>
				</div>
			</div>
			
			<div class="col-lg-2 col-md-5 col-sm-6 feature_item">
				<img class="feature_icon" src="<?php assets_url('img/svg/message.svg') ?>" alt="feature_icon">
				<div class="feature_text feature_divider">
					<p><?php the_field('feature_text_2');?></p>
				</div>
			</div>
			
			<div class="col-lg-2 col-md-5 col-sm-6 feature_item">
				<img class="feature_icon" src="<?php assets_url('img/svg/lock.svg') ?>" alt="feature_icon">
				<div class="feature_text feature_divider">
					<p><?php the_field('feature_text_3');?></p>
				</div>
			</div>
			
			<div class="col-lg-2 col-md-5 col-sm-6 feature_item">
				<img class="feature_icon feature_hands" src="<?php assets_url('img/svg/hands.svg') ?>" alt="feature_icon">
				<div class="feature_text feature_divider">
					<p><?php the_field('feature_text_4');?></p>
				</div>
			</div>

			<div class="col-lg-2 col-md-5 col-sm-6 feature_item">
				<img class="feature_icon feature_contract" src="<?php assets_url('img/svg/contract.svg') ?>" alt="feature_icon">
				<p class="feature_text"><?php the_field('feature_text_5');?></p>
			</div>
		</div>
	</div>
</div>
</section>