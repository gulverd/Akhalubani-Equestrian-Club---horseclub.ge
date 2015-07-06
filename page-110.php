<?php include 'header.php';?>

<?php include 'nav.php';?>

<?php include 'carousel.php';?>

 <div class="col-md-12" id="middle">
    <div class="container" id="middle_container">
		<?php while(have_posts()): the_post();?>
			<div class="col-md-12" id="page_title">
				<h3><?php the_title();?></h3>
			</div>
			<div class="col-md-12">
				<p><?php the_content();?></p>
			</div>
		<?php endwhile;?>
		<div class="fb-comments" data-href="https://www.facebook.com/akhalubaniequestrianclub" data-numposts="20" data-colorscheme="light" data-width="100%"></div>
	</div>
</div>

<?php include 'footer.php';?>

