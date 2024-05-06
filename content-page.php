

<?php
  if($post->post_parent && !is_single() && !is_category()) {
  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
  $titlenamer = get_the_title($post->post_parent);
  }

  else {

	if(!is_single() && !is_category()){
  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
  $titlenamer = get_the_title($post->ID);
	}
	
  }
  
?>
<?php if($children): ?>
<div class = "large-3 columns" id = "left-navPanel">
  <h2 class = "doctitle">Navigation</h2>
  <ul class = "side-menus">
  <?php echo $children; ?>
  </ul>
  <p>&nbsp;</p>
</div>
<div class = "large-9 columns">
<h2 class = "doctitle"><?php the_title(); ?></h2>
<?php the_content(); ?>
<?php edit_post_link('edit content', '<hr /><span class = "button small radius">', '</span>'); ?>
</div>
<?php else: ?>
<div class = "large-12">
<h2 class = "doctitle"><?php the_title(); ?></h2>
<?php the_content(); ?>
<?php edit_post_link('edit content', '<hr /><span class = "button small radius">', '</span>'); ?>
</div>
<?php endif; ?>


