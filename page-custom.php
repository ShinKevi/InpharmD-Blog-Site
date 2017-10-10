<?php get_header(); ?>

	<div class="row">
		<div class="col-sm-12">

			<?php
				$args =  array(
					'post_type' => 'my-custom-post',
					'orderby' => 'menu_order',
					'order' => 'ASC'
				);
				 $custom_query = new WP_Query( $args );
            while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

				<div class="blog-post">
					<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_excerpt(); ?>
				</div>

				<?php endwhile; ?>
		</div> <!-- /.col -->
	</div> <!-- /.row -->

	<?php get_footer(); ?>

// Display custom post
<?php

$args = array(
    'post_type' => 'your_post',
);
$your_loop = new WP_Query( $args );

if ( $your_loop->have_posts() ) : while ( $your_loop->have_posts() ) : $your_loop->the_post();
$meta = get_post_meta( $post->ID, 'your_fields', true ); ?>

<!-- contents of Your Post -->

<?php
function add_your_fields_meta_box() {
    add_meta_box(
        'your_fields_meta_box', // $id
        'Your Fields', // $title
        'show_your_fields_meta_box', // $callback
        'your_post', // $screen
        'normal', // $context
        'high' // $priority
    );
}
add_action( 'add_meta_boxes', 'add_your_fields_meta_box' ); ?>
