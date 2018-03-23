

 <?php

  $promote_num_post =  esc_attr(get_theme_mod ('promote_num_post'));
 $category_show = get_theme_mod( 'category_show');

 $post_order_by = get_theme_mod( 'post_order_by', array( 'none', 'date','ID','author','title','rand' ) );

    $promote_args=array(
             'post_type' => 'post',
             'posts_per_page'=>$promote_num_post,
			 'cat' => $category_show,
			 'orderby' => $post_order_by,
			 'order'=>'ASC',

         );
    $wp_query = new WP_Query($promote_args);

			?>

  <div id="latest-ref">
		<?php if ( $wp_query->have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
				<div class="matchhe  large-4 medium-6 small-12 columns wow fadeInLeft page-delay mb50  ">
          <div class="blog-one ">
            <!--CALL TO POST IMAGE-->
            <div class="blog-one-header">
              <a href="<?php echo esc_url(get_permalink());?>">
                <?php the_post_thumbnail('large'); ?>
              </a>
            </div>
            <!--end POST IMAGE-->
            <!--CALL TO POST info-->
            <div class="blog-one-attrib">
                <?php if ( true == get_theme_mod( 'latest_post_cat', true ) ) : ?>
                  <span class="blog-author-name">
								    <?php $categories = get_the_category();
                      $separator = ', ';
 											$output = '';
									    if ( ! empty( $categories ) ) {
    								    foreach( $categories as $category ) {
        										      $output .=
														      '<a href="' . esc_url( get_category_link( $category->term_id ) ) .
														      '" alt="' . esc_attr(sprintf( __( 'View all posts in %s','promote' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
    													    }
   											echo trim( $output, $separator );
												} ?>
                  </span>
                <?php endif; ?>
              <?php if ( true == get_theme_mod( 'latest_post_date', true ) ) : ?>
                <span class="blog-date"><?php the_time( get_option('date_format') ); ?></span>
              <?php endif; ?>
            </div>
            <!--end POST info-->
            <div class="blog-one-body">
              <?php the_title( sprintf( '<h2 class="blog-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
              <?php the_excerpt(); ?>
            </div>
            <div class="blog-one-footer">
              <a href="<?php echo esc_url(get_permalink());?>"><?php echo esc_attr__('Read more','promote');?></a>
              <?php if ( true == get_theme_mod( 'latest_post_comment', true ) ) : ?>
                <i class="fa fa-comments"></i><?php comments_popup_link( __('0 Comment', 'promote'), __('1 Comment', 'promote'), __('% Comments', 'promote'), '', __('off' , 'promote')); ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
		  <?php else : ?>
        <?php wp_reset_postdata(); ?>
		<?php endif; ?>
  </div>  <!-- layout -->
