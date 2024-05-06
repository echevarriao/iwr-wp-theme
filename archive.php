<?php get_header(); ?>

<?php if(have_posts()): ?>

<h2 class = "doctitle">Archives</h2>

<?php while(have_posts()): the_post(); ?>

<?php get_template_part('content', 'archive'); ?>

<?php endwhile; ?>

<?php else: ?>

<?php get_template_part('content', '404'); ?>

<?php endif; ?>

<?php get_footer(); ?>