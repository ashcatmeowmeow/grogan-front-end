<?php
/*
Template Name: text page
*/
?>

<?php get_header(); ?>

<?php
$hero = new Mustache_Engine(array(
    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/patternlab-php-master/source/_patterns/02-organisms/02-hero/'),
));
$stripe = new Mustache_Engine(array(
    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/patternlab-php-master/source/_patterns/01-molecules/01-layout'),
));
?>

<?php
$mainTitle = rwmb_meta( 'HEADER-main-title' );
$metaArray = (array('main-title' => $mainTitle));
?>

<?php echo $hero->render("00-hero-main", $metaArray);?>
<div class="container constrained-1 centered-column">
	<div class = "row">
		<div class = "col-xs-12">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
				<?php 
				$content = get_the_content();
				$content = apply_filters( 'the_content', get_the_content() );
				$content = str_replace( ']]>', ']]&gt;', $content );
				$loopArray = array('content' => $content);
				echo $stripe->render("00-single-column-centered-constrained", $loopArray);
				?>
			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
	</div>
</div>	

<?php get_footer(); ?>