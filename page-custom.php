<?php get_header(); ?>

	<div class="row">
		<div class="col-sm-12">

			<?php
                $args = array(
                'post_type' => 'your_post',
                );

				$your_loop = new WP_Query($args);
                if ($your_loop->have_posts()) : while ($your_loop->have_posts() ) : $your_loop->the_post();
                $meta = get_post_meta($post->ID, 'your_fields', true); ?>
                <div class="blog-post">
					<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_excerpt(); ?>
				</div> <?php
                endwhile; endif; wp_reset_postdata();
			?>

		</div> <!-- /.col -->
	</div> <!-- /.row -->

<?php get_footer(); ?>
