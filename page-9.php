<?php include 'header.php';?>

<?php include 'nav.php';?>

<?php include 'carousel.php';?>

 <div class="col-md-12" id="middle">
    <div class="container" id="middle_container">
		<?php while(have_posts()): the_post();?>
			<div class="col-md-12">
			<?php	if ( function_exists( 'envira_gallery' ) ) { envira_gallery( '145' ); } ?>
			</div>
		<?php endwhile;?>
	</div>
</div>

<?php include 'footer.php';?>

