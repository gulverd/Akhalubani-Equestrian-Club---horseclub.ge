
 <div class="col-md-12" id="middle">
    <div class="container" id="middle_container">
		<?php while(have_posts()): the_post();?>
			<div class="col-md-12" id="page_title">
				<h3><?php the_title();?></h3>
			</div>
			<div class="col-md-12" id="page_middle">
				<p><?php the_content();?></p>
			</div>
		<?php endwhile;?>
	</div>
</div>

