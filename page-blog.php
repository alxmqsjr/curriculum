<?php get_header();
/*
	Template Name: Blog
*/
?>

<div class="container-fluid p-0">
	<section class="resume-section">
		<div class="resume-section-content">
			<h2 class="mb-5">Blog</h2>
			<?php $query = new WP_Query( array( 'post_type' => 'post', 'nopaging' => true )); 
			if ($query->have_posts()) {
				while ( $query->have_posts() ) {
					$query->the_post();
					get_template_part( 'template-parts/content', get_post_type() ); 
				}
			}
			wp_reset_postdata();
			?>
		</div>
	</section>
</div>

<?php get_footer(); ?>