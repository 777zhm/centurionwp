</main>

<footer class="footer" style="background-image: url(<?php assets_url('img/footer_bg.jpg') ?>);">
	
		<div class="container">
			<div class="row contacts_row">
				<div class="col-lg-3 col-md-6 col-sm-12 contacts_item">
					<div class="contacts_icon">
						<img src="<?php assets_url('img/svg/telephone.svg') ?>" alt="telephone">
					</div>
					<div class="contacts_link">

					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 contacts_item">
					<div class="contacts_icon">
						<img src="<?php assets_url('img/svg/email.svg') ?>" alt="email">
					</div>
					<div class="contacts_link">
						<a href="mailto:<?php the_field('admin_email', 'theme_settings'); ?>"><?php the_field('admin_email', 'theme_settings'); ?></a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 contacts_item">
					<div class="contacts_icon">
						<img src="<?php assets_url('img/svg/facebook.svg') ?>" alt="facebook">
					</div>
					<div class="contacts_link">
						<?php $link = get_field('admin_facebook_link', 'theme_settings'); ?>
						<?php if( $link ): 
							$link_url = $link['url'];
							$link_title = $link['title'];
						?>
						<a href="<?php echo esc_url($link_url); ?>" target="_blank"><?php echo esc_html($link_title); ?></a>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 contacts_item">
					<div class="contacts_icon">
						<img src="<?php assets_url('img/svg/location.svg') ?>" alt="location">
					</div>
					<div class="contacts_link">
					<?php $link = get_field('admin_address_link', 'theme_settings'); ?>
					<?php if( $link ): 
						$link_url = $link['url'];
						$link_title = $link['title'];
					?>
						<a href="<?php echo esc_url($link_url); ?>" target="_blank"><?php echo esc_html($link_title); ?></a>
					<?php endif; ?>
					</div>
				</div>			
			</div>
			<div class="row justify-content-center">
				<div class="logotype">
					<?php if ( has_custom_logo() ) : the_custom_logo(); endif; ?>	
				</div>
			</div>
		</div>

</footer>

<?php wp_footer(); ?>
</body>
</html>