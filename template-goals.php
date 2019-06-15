<?php /* Template Name: Our goals page */ ?>
<?php get_header(); ?>

<section>
	<div class="heroscreen_section goals_heroscreen">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-md-12 page_heading text-center">
					<h1>Goals & plans</h1>
				</div>
				<div class="col-md-6 section_subtitle text-center">
					<p>Centurion is a Swiss-based trading company. With a proven personal track record behind us, <strong>we will engage in trading oil products and softs across regions</strong> as well as with customers that we have acquired in the 30+ years of combined trading experience.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="goals_section">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="section_heading">
						<h2>Swiss office</h2>
					</div>
					<div class="section_subtitle">
						<p>We will structure the company to reflect a realistic and cost-efficient approach. First of all, we plan to have part of the management team, as well as trading, risk and trade finance in Switzerland. Proximity with counterparties and banks holds the key to success in our business.</p>
						<p>Meeting often, clearly explaining our vision and creating strong personal relationships will jump-start our business and drive positive results.</p>
					</div>
				</div>
				<div class="col-md-6 switzerland_map" style="background-image: url(<?php assets_url('img/switzerland_map.png') ?>);">
					<div class="logotype_on_map">
						<?php if ( has_custom_logo() ) : the_custom_logo(); endif; ?>	
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 ukraine_map" style="background-image: url(<?php assets_url('img/ukraine_map.png') ?>);">
					<div class="logotype_on_map">
						<?php if ( has_custom_logo() ) : the_custom_logo(); endif; ?>	
					</div>
				</div>
				<div class="col-md-6">
					<div class="section_heading">
						<h2>Ukrainian office</h2>
					</div>
					<div class="section_subtitle">
						<p>In Kyiv, we plan to launch two key departments, operations and accounting. We are pursuing controlled costs, quality people and presence in one of our local markets. We will have a local tradering and projectfocused staff in Kyiv.</p>
						<p>We will also establish a strong Board of Directors, representing founders and investors. Our aim is to have different competencies represented at this Board. Each one will bring their share of experience and expertise to elevate the overall proficiency of the company.</p>
						<p>The Board will set targets/expectations and concur on an overall strategy to be followed by the company. Involvement of members will be at the heart of our corporate governance.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>