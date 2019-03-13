<?php  
$args = array(
	'posts_per_page'   => -1,
	'post_type'        => 'restaurant',
	'post_status'      => 'publish'
);
$items = new WP_Query($args);
if ( $items->have_posts() ) {  ?>
<div class="restaurant-list clear">
	<div class="inner-wrapper wrapper clear">
		<div class="row clear">
			<?php while ( $items->have_posts() ) : $items->the_post(); 
					$logo = get_field('company_logo');
					$website = get_field('website_url');
					$website_link = ($website) ? $website : '#';
					$company_name = get_the_title();
					$thumbnail_id = get_post_thumbnail_id();
					$img = wp_get_attachment_image_src($thumbnail_id,'medium_large');
					$bgImg = '';
					if($img) {
						$bgImg = ' style="background-image:url('.$img[0].')"';
					}
				?>
				<div class="col text-center wow animated fadeInUp">
					<div class="inside  clear">
						<a class="pagelink" href="<?php echo $website_link; ?>"<?php echo ($website) ? ' target="_blank"':''?>>
							<span class="imagebg"<?php echo $bgImg;?>></span>
							<span class="overlay"></span>
							<?php if ($logo) { ?>
							<span class="logowrap">
								<span class="branding">
									<img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['title'] ?>" />
								</span>
							</span>
							<?php } ?>
						</a>
					</div>
				</div>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>
</div>
<?php } ?>