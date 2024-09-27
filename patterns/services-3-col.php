<?php
/**
 * Title: Services, 3 columns
 * Slug: twentytwentyfive/services-3-col
 * Categories: call-to-action, banner, featured, services
 * Description: Three columns with images and text to showcase services.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:heading {"align":"wide"} -->
	<h2 class="wp-block-heading alignwide">Our services</h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full"} -->
			<figure class="wp-block-image size-full">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/image-from-rawpixel-id-2222755.webp" alt="Image for service" style="aspect-ratio:4/3;object-fit:cover"/>
			</figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading">Collect</h4>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"medium"} -->
			<p class="has-medium-font-size">Like flowers that bloom in unexpected places, every story unfolds with beauty and resilience</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full"} -->
			<figure class="wp-block-image size-full">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/image-from-rawpixel-id-2224378.webp" alt="Image for service" style="aspect-ratio:4/3;object-fit:cover"/>
			</figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading">Assemble</h4>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"medium"} -->
			<p class="has-medium-font-size">Like flowers that bloom in unexpected places, every story unfolds with beauty and resilience</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full"} -->
			<figure class="wp-block-image size-full">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/image-from-rawpixel-id-2211732.webp" alt="Image for service" style="aspect-ratio:4/3;object-fit:cover"/>
			</figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading">Deliver</h4>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"medium"} -->
			<p class="has-medium-font-size">Like flowers that bloom in unexpected places, every story unfolds with beauty and resilience</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->