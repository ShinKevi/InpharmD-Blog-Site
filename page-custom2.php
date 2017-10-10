<?php get_header(); ?>

<div class="row">
    <div class="col-sm-12">

        <?php if ( $wpb_all_query->have_posts() ) : ?>

            <ul>

                <!-- the loop -->
                <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile; ?>
                <!-- end of the loop -->

            </ul>

            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>



    </div> <!-- /.col -->
</div> <!-- /.row -->
