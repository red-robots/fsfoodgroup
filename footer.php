</div><!-- #content -->

	<footer id="colophon" class="site-footer clear" role="contentinfo">
		<div class="wrapper">
			<?php  
			$phone = get_field('phone','option');
			$email = get_field('email','option');
			?>
			<div class="foot-info text-center">
				<?php if ($phone) { ?>
				<a href="tel:<?php echo format_phone_number($phone); ?>"><?php echo $phone ?></a>
				<?php } ?>
				<?php if ($email) { ?>
				<a class="last" href="mailto:<?php echo antispambot($email,1); ?>"><?php echo antispambot($email); ?></a>
				<?php } ?>
			</div>
		</div><!-- wrapper -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
