<?php /* Template Name: Contact us page */ ?>
<?php get_header(); ?>

<div class="container">
	<div class="row justify-content-center text-center">
		<div class="col-md-12 page_heading">
			<h1>Contact us</h1>
		</div>
		<div class="col-md-6 section_subtitle">
			<p>Centurion is a Swiss-based trading company. With a proven personal track record behind us, <strong>we will engage in trading oil products and softs across regions</strong> as well as with customers that we have acquired in the 30+ years of combined trading experience.</p>
		</div>
	</div>

	<div class="row contact_block text-center">
		<div class="col-md-4 contact_item right_border">
			<div class="contact_item_icon_box">
				<img class="im img-fluid contact_item_icon" src="<?php assets_url('img/svg/location_icon.svg') ?>" alt="contact_icon">
			</div>
			<h3 class="contact_item_heading">Address</h3>
			<?php $link = get_field('admin_address_link', 'theme_settings'); ?>
			<?php if( $link ): 
				$link_url = $link['url'];
				$link_title = $link['title'];
			?>
				<a class="contacts_link" href="<?php echo esc_url($link_url); ?>" target="_blank"><?php echo esc_html($link_title); ?></a>
			<?php endif; ?>		
		</div>
		<div class="col-md-4 contact_item right_border">
			<div class="contact_item_icon_box">
				<img class="im img-fluid contact_item_icon" src="<?php assets_url('img/svg/telephone_icon.svg') ?>" alt="contact_icon">
			</div>
			<h3 class="contact_item_heading">Phone</h3>
			<a class="contacts_link" href="tel:<?php the_field('admin_tel', 'theme_settings'); ?>"><?php the_field('admin_tel', 'theme_settings'); ?></a>
		</div>
		<div class="col-md-4 contact_item">
			<div class="contact_item_icon_box">
				<img class="im img-fluid contact_item_icon" src="<?php assets_url('img/svg/email_icon.svg') ?>" alt="contact_icon">
			</div>
			<h3 class="contact_item_heading">Email</h3>
			<a class="contacts_link" href="mailto:<?php the_field('admin_email', 'theme_settings'); ?>"><?php the_field('admin_email', 'theme_settings'); ?></a>
		</div>
	</div>

	<div class="row justify-content-center">
		<div class="col-md-10 col-sm-10 col-12 contact_form_block text-center">
			<?php echo do_shortcode( '[contact-form-7 id="21" title="main_contact_form"]' ); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>