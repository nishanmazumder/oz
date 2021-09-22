<?php

/**
 * footer template
 * @package NM_USC
 */

global $nm3webet;
?>

<div class="container-fluid nm-copyright nm-no-pad">
	<div class="row">
		<div class="col-md-12 text-center">
			<?php if ($nm3webet['nmCopyright']) : ?>
				<p><?php echo $nm3webet['nmCopyright']; ?></p>
			<?php endif; ?>
		</div>
	</div>
</div>
</footer>
</div>
<!-- END OF END FOOTER -->

<?php wp_footer() ?>
</body>

</html>