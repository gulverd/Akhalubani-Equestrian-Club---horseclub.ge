<?php include 'header.php';?>

<?php include 'nav.php';?>

<?php include 'carousel.php';?>

 <div class="col-md-12" id="middle">
    <div class="container" id="middle_container">
		<?php 

			$args = array (
				'cat' => '8',
				'showposts' => '1504',
				'taxonomy' => 'category');
		?>
 <div class="col-md-12" id="horses_main_wrapper">
 	<div class="col-md-12"id="horse_page_title_wrapper">
 		<h3>ახალუბნის საცხენოსნო კლუბის ცხენები</h3>
 	</div>
		<?php

			$query = new WP_Query($args);
				      
			if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
		    	$custom_fields = get_post_custom();
		    	$horses_pic = $custom_fields['horse_pic'][0];
		    	$pic 		= '<img src="'.$horses_pic.'">';
		    
		 ?>
		
			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			   		<a href="<?php the_permalink(); ?>"><?php echo $pic;?></a>
			      <div class="caption">
			        <h5><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
			      </div>
			    </div>
			  </div>

		<?php endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
	 </div>
	</div>
</div>

<?php include 'footer.php';?>

