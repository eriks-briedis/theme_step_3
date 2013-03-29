<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article>
	<header>
		<h1>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h1>
	</header>
	<section>
		<?php the_content(); ?>
	</section>
</article>
<?php
	endwhile;
endif;
get_footer();
?>
