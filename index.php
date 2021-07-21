<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ximi-dogs
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div id="carouselExampleFade" class="carousel slide carousel-fade carousel-dark" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="<?php echo get_template_directory_uri() . '/assets/dev1.png' ?>" class="d-block w-100" alt="dev1">
				</div>
				<div class="carousel-item">
					<img src="<?php echo get_template_directory_uri() . '/assets/dev2.png' ?>" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="<?php echo get_template_directory_uri() . '/assets/dev3.png' ?>" class="d-block w-100" alt="...">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
