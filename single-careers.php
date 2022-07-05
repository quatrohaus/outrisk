<?php get_header(); ?>

<div class="the-body-content">

    <div class="container">
        <div class="careerTitle">
            <h2>Job Title: <?php the_title() ?></h2>
        </div>
        <div class="jobDescription">
            <?php the_field('job_details') ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>