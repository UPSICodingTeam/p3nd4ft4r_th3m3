<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bulmascores
 */

get_header(); ?>
	
	<div id="primary" class="content-area">
		
			<div class="hzhero" style="background-image: url(<?php echo "'".content_url();?>/themes/p3nd4ft4r_th3m3/assets/images/background.jpg<?php echo "'" ?>);">
				<div class="tophero">
					<div class="container">
						<div class="columns is-centered has-text-white">
							<div class="column" style="position: absolute; padding-top: 150px;">
								<h3 class="oswald700 hztitle">Relevant. Referred. Respected.</h3>
							</div>
						</div>
					</div>
					<img class="hzcloud" src="<?php echo content_url();?>/themes/p3nd4ft4r_th3m3/assets/images/cloud.png">
				</div>
			</div>

		<main id="main" class="container">
			this is homepage
			<div class="columns is-vcentered">
				<div class="column is-8">
					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/loops/loop', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

				</div><!-- .columns is-8 -->
			</div><!-- .columns -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
