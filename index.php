<?php get_header(); ?>

		<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

		<?php get_template_part('navigation'); ?>
	
		<div class="post">

			<?php the_content('&raquo; More &raquo;'); ?>

		</div> <!-- /end .post -->

		<br />
		
		


		<div class="all_posts"><a href="<?php echo get_site_url(); ?>/archives">See all posts &raquo;</a>
		</div> <!-- /end .all_posts -->

		<?php endwhile; ?>

		<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>

		<?php endif; ?>

<?php get_footer(); ?>