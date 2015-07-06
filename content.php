		<?php
			$args = array (
				'cat' => '4',
				'showposts' => '1',
				'taxonomy' => 'category'
								
			);
		?>
 <div class="col-md-12" id="middle">
      <div class="container" id="middle_container">
        <div class="col-md-8">

       		 <?php 
        
                $query = new WP_Query($args);
            
                if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
           	 ?>

          <div class="col-md-12" id="middle_left_header">
            <span class="glyphicon glyphicon-arrow-right" id="arrow_glyph"></span> <?php the_title();?>
          </div>
          <div class="col-md-12" id="middle_content">
          	<?php the_content();?>
          </div>

            <?php endwhile; else: ?>
            	<p>Sorry, no posts matched your criteria.</p>
       		<?php endif; ?>  