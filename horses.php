 <div class="col-md-12" id="middle">
    <div class="container" id="middle_container">
		<?php 
		   while(have_posts()): the_post();
	       $custom_fields = get_post_custom();
		   $horses_pic = $custom_fields['horse_pic'][0];
		   $pic 		= '<img src="'.$horses_pic.'" id="horses_pict">';		    
		?>
	<div class="col-md-12"id="horse_page_title_wrapper">
 		<h3>Akhalubani Equestrian Club</h3>
 	</div>
			<div class="col-sm-6 col-md-12" id="horse_th_tr">
			    <div class="thumbnail">
			   		<?php echo $pic;?>
			      <div class="caption" id="horse_wr">
			      	<h5><?php the_title();?></h5>
			        <p><?php the_content();?></p>
			      </div>
			    </div>
			  </div>
		<?php endwhile;?>
	</div>
</div>
