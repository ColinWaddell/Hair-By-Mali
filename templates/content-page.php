<?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>

<?php
	$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'asc' ) );

	$index = 0; //Add code to put in feature images, left side then right side then left etc etc
	foreach( $mypages as $page ) {		
		$content = $page->post_content;
		if ( $content ) // Check for empty page
			$index++;			
			
		$depth = get_depth ($page->ID);

		$content = apply_filters( 'the_content', $content );
		
		$img_src = wp_get_attachment_image_src( get_post_thumbnail_id($page->ID), 'medium' );	
?>

		<div class="page-child-title">
			<h<?php echo $depth+1; ?>><?php echo $page->post_title; ?>	</h<?php echo $depth+1; ?>>
		</div>
		
		<div class="row">
			<?php if (($index)%2 && !empty($img_src)) { ?>
				<div class="entry span6">
					<?php echo $content; ?>
				</div>
				<div class="entry span4">
						<img class="img-polaroid" src="
						<?php
							echo ($img_src[0]);		
						?>" />
				</div>
			<?php } elseif(!empty($img_src)) { ?>
				<div class="entry span4">
						<img class="img-polaroid" src="
						<?php
							echo ($img_src[0]);		
						?>" />
				</div>				
				<div class="entry span6">
					<?php echo $content; ?>
				</div>
			<?php } else { ?>
				<div class="entry span10">
					<?php echo $content; ?>
				</div>
			<?php } //endif; ?>
		</div>
	<?php
	}	
?>

<?php endwhile; ?>