<?php get_header(); ?>

<div class = "long-row bg-lightgray" id = "first-row">
    <div class = "row">
        <div class = "large-12 column">
<?php if(is_active_sidebar('widget-1')): ?>
<?php dynamic_sidebar('widget-1'); ?>
<?php else: ?>
Top Banner Graphic Section
<?php endif; ?>
        </div>
    </div>
</div>

<div class = "long-row bg-white" id = "second-row">
    <div class = "row">
        <div class = "large-6 columns">
<?php if(is_active_sidebar('left-first-row-sidebar')): ?>
<?php dynamic_sidebar('left-first-row-sidebar'); ?>
<?php else: ?>
<p>Left Section. Please place content here.</p>
<?php endif; ?>
        </div>
        <div class = "large-6 columns">
<?php if(is_active_sidebar('center-first-row-sidebar')): ?>
<?php dynamic_sidebar('center-first-row-sidebar'); ?>
<?php else: ?>
<p>Right Section. Please place content here.</p>
<?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>