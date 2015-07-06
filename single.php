<?php include 'header.php';?>

<?php include 'nav.php';?>

<?php include 'carousel.php';?>

<?php
$post = $wp_query->post;

if (in_category('Horses')) {
	include ('horses.php');

}elseif(in_category('horses-en')){
	include ('horses.php');
}else { ?>
	<?php include ('other.php');?>
<?php } ?>

<?php include 'footer.php';?>