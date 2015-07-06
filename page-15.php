<?php include 'header.php';?>

<?php include 'nav.php';?>

<?php include 'carousel.php';?>

 <div class="col-md-12" id="middle">
    <div class="container" id="middle_container">
		<?php 

			$args = array (
				'cat' => '9',
				'showposts' => '1504',
				'taxonomy' => 'category');
		?>
 <div class="col-md-12" id="horses_main_wrapper">
 	<div class="col-md-12"id="horse_page_title_wrapper">
 		<h3>ახალუბნის საცხენოსნო კლუბის ინსტრუქტორები</h3>
 	</div>
		<?php

			$query = new WP_Query($args);
				      
			if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
		    	$custom_fields = get_post_custom();
		    	$instructor_pic = $custom_fields['instructors_pic'][0];
		    	$ins_pic 		= '<img src="'.$instructor_pic.'" id="inst_pic">';
		    
		 ?>
		
			  <div class="col-sm-6 col-md-12">
			    <div class="thumbnail">
			   		<?php echo $ins_pic;?>
			      <div class="caption">
			        <h5><?php the_title();?></h5>
			        <p><?php the_content();?></p>
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

