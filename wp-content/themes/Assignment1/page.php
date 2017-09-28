<?php 

 // Template Name: Generic Page Template

?>

<?php get_header(); ?>
<?php the_post(); ?>

	<main> 
		<h1><?php the_title(); ?></h1>
		<div class="content">
			<?php the_content(); ?>
		</div>
		</main>

<?php get_footer(); ?>