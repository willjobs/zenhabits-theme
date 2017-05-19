<div class="navigation">
	<p><strong>Posted</strong>:
		<?php 
			the_date('m.d.Y'); 
			// no way to see when a post was _actually_ published, vs. backdated
			if(strtotime(get_the_modified_date()) > strtotime(get_the_date())) {
				echo ' | Updated: ' . get_the_modified_date('m.d.Y');
			} 
		?>
	</p>
	<?php if (get_adjacent_post(false, '', true)): // if there are older posts ?>
		<p>&laquo; <?php previous_post_link('%link','Previous post: %title'); ?>
		<?php if (get_adjacent_post(false, '', false)) { echo "<br />"; } else { echo "</p>";	} ?>
	<?php endif; ?>

	<?php if (get_adjacent_post(false, '', false)): // if there are newer posts ?>
		<?php if (!get_adjacent_post(false, '', true)) echo "<p>"; // if there are not older posts ?>
		<?php next_post_link('%link','Next post: %title'); ?> &raquo;</p>
	<?php endif; ?>

</div> <!-- /end .navigation -->