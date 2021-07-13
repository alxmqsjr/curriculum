<?php get_header(); ?>

<div class="container-fluid p-0">
    <section class="resume-section">
        <div class="resume-section-content">
			<?php 
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post();
						get_template_part('template-parts/content','page');
					}
                }
            ?>            
        </div>
    </section>
</div>

<?php get_footer(); ?>