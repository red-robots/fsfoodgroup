<?php
	$banner_image = get_field('banner_image');
	if($banner_image) {
		$bg_style = ' style="background-image:url('.$banner_image['url'].')"';
	}
	$intro_title = get_field('intro_title');
	$intro_text = get_field('intro_text');
?>
<div class="banner-wrapper text-center">
	<div class="banner-image"<?php echo $bg_style;?>>
		<div class="overlay"></div>
		<div class="wrapper">

			<div class="logo-section clear">
			<?php if( get_custom_logo() ) { ?>
	            <div class="logo image zoomIn animated">
	            	<?php the_custom_logo(); ?>
	            </div>
	        <?php } else { ?>
	            <h1 class="logo zoomIn animated">
		            <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
	            </h1>
	        <?php } ?>
	        </div>

	        <div class="entry-content fadeIn animated wow">
	        	<div class="textwrap">
					<?php echo $intro_text; ?>	
	        	</div>
			</div>
		</div>
	</div>
</div>