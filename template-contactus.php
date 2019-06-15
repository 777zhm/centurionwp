<?php /* Template Name: Contact us page */ ?>
<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="page_heading">Contact us</h1>
			<p class="section_subtitle">Centurion is a Swiss-based trading company. With a proven personal track record behind us, we will engage in trading oil products and softs across regions as well as with customers that we have acquired in the 30+ years of combined trading experience.</p>
		</div>
	</div>

	<div class="row contact_block">
		<div class="col-md-4 contact_item">
			<img class="im img-fluid contact_item_icon" src="<?php assets_url('img/svg/location_icon.svg') ?>" alt="contact_icon">
			<h3 class="contact_item_heading">Address</h3>
			<p class="contact_item_text">295 Witting Streets Suite 666, Melbourne, Australia</p>
		</div>
		<div class="col-md-4 contact_item">
			<img class="im img-fluid contact_item_icon" src="<?php assets_url('img/svg/telephone_icon.svg') ?>" alt="contact_icon">
			<h3 class="contact_item_heading">Address</h3>
			<p class="contact_item_text">295 Witting Streets Suite 666, Melbourne, Australia</p>
		</div>
		<div class="col-md-4 contact_item">
			<img class="im img-fluid contact_item_icon" src="<?php assets_url('img/svg/email_icon.svg') ?>" alt="contact_icon">
			<h3 class="contact_item_heading">Address</h3>
			<p class="contact_item_text">295 Witting Streets Suite 666, Melbourne, Australia</p>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<?php echo do_shortcode( '[contact-form-7 id="21" title="main_contact_form"]' ); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<h2 class="section_heading">FAQ</h2>
			<p class="section_subtitle">Centurion is a Swiss-based trading company. With a proven personal track record behind us, we will engage in trading oil products and softs across regions as well as with customers that we have acquired in the 30+ years of combined trading experience.</p>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 faq_block">
			<div class="faq_item">
				<h3 class="faq_question">Faq question</h3>
				<p class="faq_answer"></p>
			</div>
			<div class="faq_item">
				<h3 class="faq_question">Faq question</h3>
				<p class="faq_answer"></p>
			</div>
			<div class="faq_item">
				<h3 class="faq_question">Faq question</h3>
				<p class="faq_answer">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			</div>
			<div class="faq_item">
				<h3 class="faq_question">Faq question</h3>
				<p class="faq_answer"></p>
			</div>
			<div class="faq_item">
				<h3 class="faq_question">Faq question</h3>
				<p class="faq_answer"></p>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>