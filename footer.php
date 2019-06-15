</main>

<footer class="footer">
	<div class="container">
		<div class="row footer_menu_row">
			<div class="logotype col-lg-2 col-md-2 col-sm-6 col-6 text-center">
				<?php if ( has_custom_logo() ) : the_custom_logo(); endif; ?>	
			</div>
			<div class="main_menu col-lg-8 d-none d-md-block align-self-center">
				<?php wp_nav_menu( array('theme_location' => 'main_menu') ); ?>
			</div>
			<div class="col-lg-2 social_menu">
				<?php $link = get_field('admin_fb_link', 'theme_settings'); ?>
				<?php if( $link ): 
					$link_url = $link['url'];
					$link_title = $link['title'];
				?>
				<a class="social_item" href="<?php echo esc_url($link_url); ?>" target="_blank"><img class="img img-fluid" src="<?php assets_url('img/svg/fb_icon.svg') ?>" alt="social_icon"></a>
				<?php endif; ?>

				<a class="social_item" href="twitter" target="_blank"><img class="img img-fluid" src="<?php assets_url('img/svg/twitter_icon.svg') ?>" alt="social_icon"></a>
			</div>
		</div>
		<div class="row footer_copyright_row">
			<div class="col-md-6 copyright">
				<p>&copy; 2019 Centurion</p>
			</div> 
			<div class="col-md-6 privacy_links">
				<a href="#">Terms of Use</a>&nbsp;|&nbsp;<a href="#">Privacy Policy</a>&nbsp;|&nbsp;<a href="#">Contact</a>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>