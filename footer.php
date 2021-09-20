<?php

/**
 * footer template
 * @package NM_USC
 */

global $nm3webet;
?>

<!-- FOOTER LINKS -->
<div class="container">
	<div class="row text-center">
		<div class="col-md-12 ">
			<div class=" footer_wrap">
				<div class="footer-menu-wrapper">
					<ul class="nav footer-menu">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer-menu',
								'menu'        => 'footer-menu',
							)
						);
					?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- FOOTER LINKS END -->


<!-- END FOOTER -->
<div class="container nm-footer-block">
	<div class="row">
		<div class="col-md-3 col-sm-6 col-xs-12">
			<p>Follow Us</p>
			<ul>
			<?php if ($nm3webet['nmSocial1']) : ?>
				<li><a href="<?php echo $nm3webet['nmSocialLink1']; ?>">
					<img style="width: 25px;" src="<?php echo $nm3webet['nmSocial1']['url']; ?>"></a>
				</li>
			<?php endif; ?>
			<?php if ($nm3webet['nmSocial2']) : ?>
				<li><a href="<?php echo $nm3webet['nmSocialLink2']; ?>">
					<img src="<?php echo $nm3webet['nmSocial2']['url']; ?>"></a>
				</li>
			<?php endif; ?>
			<?php if ($nm3webet['nmSocial3']) : ?>
				<li><a href="<?php echo $nm3webet['nmSocialLink3']; ?>">
					<img src="<?php echo $nm3webet['nmSocial3']['url']; ?>"></a>
				</li>
			<?php endif; ?>
			</ul>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<p>Suggested Browser</p>
			<ul>
			<?php if ($nm3webet['nmBrowser1']) : ?>
				<li><a href="<?php echo $nm3webet['nmBrowserLink1']; ?>">
					<img src="<?php echo $nm3webet['nmBrowser1']['url']; ?>"></a>
				</li>
			<?php endif; ?>
			<?php if ($nm3webet['nmBrowser2']) : ?>
				<li><a href="<?php echo $nm3webet['nmBrowserLink2']; ?>">
					<img src="<?php echo $nm3webet['nmBrowser2']['url']; ?>"></a>
				</li>
			<?php endif; ?>
			<?php if ($nm3webet['nmBrowser3']) : ?>
				<li><a href="<?php echo $nm3webet['nmBrowserLink3']; ?>">
					<img src="<?php echo $nm3webet['nmBrowser3']['url']; ?>"></a>
				</li>
			<?php endif; ?>
			</ul>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<p>License</p>
			<ul>
			<?php if ($nm3webet['nmlicense1']) : ?>
				<li><a href="<?php echo $nm3webet['nmlicenseLink1']; ?>">
					<img class="nm-license-img" src="<?php echo $nm3webet['nmlicense1']['url']; ?>"></a>
				</li>
			<?php endif; ?>
			</ul>
		</div>
	</div>
</div>
<!-- END OF END FOOTER -->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="site-info text-center">
			<?php if ($nm3webet['nmlicense1']) : ?>
				<p><?php echo $nm3webet['nmCopyright']; ?></p>
			<?php endif; ?>
			</div><!-- .site-info -->
		</div>
	</div>
</div>
</footer>
</div>
<!-- END OF END FOOTER -->

<?php wp_footer() ?>
</body>

</html>