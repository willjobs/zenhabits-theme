<?php get_header(); ?>

		<h2><?php the_title(); ?></h2>

		<?php if (have_posts()) : 
			while (have_posts()) : 
				the_post();
				get_template_part('navigation');
		?>

				<div class="post">

					<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

				</div> <!-- /end .post -->

				<h5><?php edit_post_link('Edit', '<p>', '</p>'); ?></h5>

				<div class="home_bottom">

				</div> <!-- /end .home_bottom -->

				<br />

				<br />
				
				<div class="all_posts"><a href="archives">See all posts &raquo;</a>
				</div> <!-- /end .all_posts -->

		<?php endwhile; else: ?>

			<p>Sorry, no posts matched your criteria.</p>

		<?php endif; ?>



		 

<?php get_footer(); ?>