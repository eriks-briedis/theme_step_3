<?php
/*******************
This is a template for displaying a single blog
********************/ ?>

<?php get_header(); //including header ?>
	<div class='content'>
		<!-- let's check if the post exists and display it -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- let's use a semantic html5 to display this post -->
		<article>
			<header>
				<h1><?php the_title(); ?></h1>
				<span>Posted in: <?php the_category(); ?></span>
			</header>
			<section>
				<?php the_content(); ?>
			</section>
			<footer>
				<span>This post was written by: <?php the_author(); ?></span>
			</footer>
		</article>
	<?php endwhile; ?>
	<?php else : ?>
		<!-- uups, we can't find this post. Display a 404 -->
		<span>Sorry the post you are looking for does not exist.</span>
	<?php endif; ?>
	</div><!-- end of .content -->
<?php get_sidebar(); //including a sidebar - see sidebar.php ?>
<?php get_footer(); //including footer ?>