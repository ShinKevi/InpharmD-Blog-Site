<!-- The most generic template for the theme goes here -->

<?php get_header(); ?>

	<div class="row">

		<div class="col-sm-8 blog-main">

			<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();

				get_template_part( 'content', get_post_format() );

			endwhile; endif;
			?>

            <!-- pagination -->
            <div class=”pagination”><?php echo posts_nav_link(); ?></div>

		</div> <!-- /.blog-main -->

		<?php get_sidebar(); ?>

	</div> <!-- /.row -->

<?php get_footer(); ?>


