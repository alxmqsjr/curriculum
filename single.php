<?php get_header(); ?>

<div class="container-fluid p-0">
    <section class="resume-section">
        <div class="resume-section-content">
            <h1 class="mb-0" style="font-size: 3.5rem !important;"><?php the_title(); ?></h1>
            <div class="subheading mb-5">
                Por <?php the_author_meta('display_name', 1); ?>
            </div>
            <div class="lead mb-5"><?php the_content(); ?></div>
        </div>
    </section>
</div>

<?php get_footer() ?>