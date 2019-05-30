<?php get_header() ?>

	<div class="intro-slider">
		<div class="slider-container fit-images">
			<?php  
			$args = array(
				'posts_per_page' => 10,
				'tag' => 'home_middle_block'
			);
			$my_query = new wp_query( $args );
			if ( $my_query->have_posts() ) { while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
				<?php
				$current_category = '';
				foreach((get_the_category()) as $category) { 
				    $current_category = $category->cat_name; 
				} 
				?>
				<a href="<?php echo get_post_permalink(); ?>" class="slide image-container" data-info-category="<?php echo $current_category; ?>" data-info-title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
			<?php endwhile; }?>
		</div>
		<a href="" class="slide-info">
			<div class="slide-category"><span>PERSONALITY</span></div>
			<div class="slide-title"><span>Your Personality Is Presented <br>Through The Photographs</span></div>
		</a>
	</div>

	<div class="latest-stories fit-images">
		<div class="latest-stories_title">Latest Stories</div>
		<div class="latest-stories_description">Keep updated with our most popular posts.</div>
		<a href="#" class="latest-stories_view-all">View All</a>

		<div class="latest-stories_container_1 clearfix">
			<div class="latest-stories_item latest-stories_item-empty"></div>

			<?php  
			$args = array(
				'posts_per_page'=> 10
			);
			$my_query = new wp_query( $args );
			if ( $my_query->have_posts() ) { while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
				<div class="latest-stories_item category-<?php echo the_category_ID();?>">
					<a href="<?php echo get_post_permalink(); ?>"><div class="image-container"><?php the_post_thumbnail(); ?></div></a>
					<div class="latest-stories_item_category"><?php the_category(); ?></div>
					<div class="clear"></div>
					<a href="<?php echo get_post_permalink(); ?>" class="latest-stories_item_title"><?php the_title(); ?></a>
				</div>
			<?php endwhile; }?>

			<div class="latest-stories_item latest-stories_item-empty"></div>
		</div>

 
		<div class="latest-stories_container_2 clearfix">
			<div class="stories_container_2_inner clearfix">
				<div class="latest-stories_item latest-stories_item-empty"></div>

				<?php  
				$args = array(
					'posts_per_page'=> 10
				);
				$my_query = new wp_query( $args );
				if ( $my_query->have_posts() ) { while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
					<div class="latest-stories_item latest-stories_item-1 category-<?php echo the_category_ID();?>">
						<div class="latest-stories_item_category"><?php the_category(', '); ?></div>
						<div class="clear"></div>
						<a href="<?php echo get_post_permalink(); ?>" class="latest-stories_item_title"><?php the_title(); ?></a>
						<div class="author clearfix">
							<?php echo get_avatar( $post->ID ); ?>
							<div class="author-meta">
								<div class="name"><?php echo get_the_author_meta( 'first_name' );?> <?php echo get_the_author_meta( 'last_name' );?></div>
								<div class="date"><?php echo get_the_date();?></div>
							</div>
						</div>
					</div>
				<?php endwhile; }?>

				<div class="latest-stories_item latest-stories_item-empty"></div>
			</div>
		</div>

		<!-- <script type="text/javascript">
var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
var page = 2;
jQuery(function($) {
    $('body').on('click', '.loadmore', function() {
        var data = {
            'action': 'load_posts_by_ajax',
            'page': page,
            'security': '<?php echo wp_create_nonce("load_more_posts"); ?>'
        };
 
        $.post(ajaxurl, data, function(response) {
            $('.my-posts').append(response);
            page++;
        });
    });
});
</script>

<div class="entry-content">
    <?php 
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => '2',
        'paged' => 1,
    );
    $my_posts = new WP_Query( $args );
    if ( $my_posts->have_posts() ) : 
    ?>
        <div class="my-posts" style="margin-bottom: 50px;">
            <?php while ( $my_posts->have_posts() ) : $my_posts->the_post(); ?>
                <h2><?php the_title(); ?><br><br><br><br></h2>
                <?php the_excerpt(); ?>
                
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
    <div class="loadmore">Load More...</div>
</div> -->


		<div class="latest-stories_container_3 clearfix">
			<div class="latest-stories_item latest-stories_item-empty"></div>

				<?php  
				$args = array(
					'posts_per_page' => 10,
					'tag' => 'home_middle_block'
				);
				$my_query = new wp_query( $args );
				if ( $my_query->have_posts() ) { while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
					<div class="latest-stories_item category-<?php echo the_category_ID();?> clearfix">
						<img src="<?php echo bloginfo('template_url'); ?>-sample/images/img/latest-stories_item-4.jpg" alt="">
						<div class="post-meta">
							<div class="latest-stories_item_category"><?php the_category(', '); ?></div>
							<div class="clear"></div>
							<a href="<?php echo get_post_permalink(); ?>" class="latest-stories_item_title"><?php the_title(); ?></a>
						</div>
					</div>
				<?php endwhile; }?>

			<div class="latest-stories_item latest-stories_item-empty"></div>
		</div>


		<div class="latest-stories_container_4 clearfix">
			<div class="latest-stories_item latest-stories_item-empty"></div>
			<a href="#" class="latest-stories_item latest-stories_item-1">
				<img src="<?php echo bloginfo('template_url'); ?>-sample/images/img/latest-stories_item-7.jpg" alt="">
			</a>
			<a href="#" class="latest-stories_item latest-stories_item-1">
				<img src="<?php echo bloginfo('template_url'); ?>-sample/images/img/latest-stories_item-8.jpg" alt="">
			</a>
			<a href="#" class="latest-stories_item latest-stories_item-1">
				<img src="<?php echo bloginfo('template_url'); ?>-sample/images/img/latest-stories_item-9.jpg" alt="">
			</a>
			<a href="#" class="latest-stories_item latest-stories_item-1">
				<img src="<?php echo bloginfo('template_url'); ?>-sample/images/img/latest-stories_item-10.jpg" alt="">
			</a>
			<a href="#" class="latest-stories_item latest-stories_item-1">
				<img src="<?php echo bloginfo('template_url'); ?>-sample/images/img/latest-stories_item-11.jpg" alt="">
			</a>
			<a href="#" class="latest-stories_item latest-stories_item-1">
				<img src="<?php echo bloginfo('template_url'); ?>-sample/images/img/latest-stories_item-7.jpg" alt="">
			</a>
			<a href="#" class="latest-stories_item latest-stories_item-1">
				<img src="<?php echo bloginfo('template_url'); ?>-sample/images/img/latest-stories_item-8.jpg" alt="">
			</a>
			<a href="#" class="latest-stories_item latest-stories_item-1">
				<img src="<?php echo bloginfo('template_url'); ?>-sample/images/img/latest-stories_item-9.jpg" alt="">
			</a>
			<a href="#" class="latest-stories_item latest-stories_item-1">
				<img src="<?php echo bloginfo('template_url'); ?>-sample/images/img/latest-stories_item-10.jpg" alt="">
			</a>
			<a href="#" class="latest-stories_item latest-stories_item-1">
				<img src="<?php echo bloginfo('template_url'); ?>-sample/images/img/latest-stories_item-11.jpg" alt="">
			</a>
			<div class="latest-stories_item latest-stories_item-empty"></div>
		</div>
	</div>


	<div class="newsletter-block">
		<div class="newsletter-title">Get our HealthCare <br>newsletter</div>
		<form action="">
			<input type="text" placeholder="Input your email">
			<input type="submit" value="">
		</form>
	</div>


	<div class="all-topics">
		<div class="all-topics_title">All Topics</div>
		<div class="all-topics_description">All the topics managed by relevance</div>

		<div class="all-topics_container clearfix">
			<div class="all-topics_container_left_col">
				<div class="topic-item topic-item-1">
					<img src="<?php echo bloginfo('template_url'); ?>-sample/images/img/topic-item-1.jpg" alt="">
					<div class="topic-item_category">Family Planning</div>
					<div class="clear"></div>
					<a href="#" class="topic-item_title">Here’s Why We Still Don’t Have a Birth Control Pill for Men</a>
				</div>
				
				<div class="topic-item topic-item-2">
					<img src="<?php echo bloginfo('template_url'); ?>-sample/images/img/topic-item-2.jpg" alt="">
					<div class="topic-item_category">Photography</div>
					<div class="clear"></div>
					<a href="#" class="topic-item_title">Red T-shirt and Wounded Jeanes Are The Best For Session</a>
				</div>
			</div>

			<div class="all-topics_container_right_col">
				<div class="topic-item topic-item-3">
					<img src="<?php echo bloginfo('template_url'); ?>-sample/images/img/topic-item-3.jpg" alt="">
					<div class="topic-item_category">Healthy Food</div>
					<div class="clear"></div>
					<a href="#" class="topic-item_title">Some Food Is Very Tastefull and Leaves No Harm</a>
				</div>

				<div class="topic-item topic-item-4">
					<img src="<?php echo bloginfo('template_url'); ?>-sample/images/img/topic-item-4.jpg" alt="">
					<div class="topic-item_category">Fitness</div>
					<div class="clear"></div>
					<a href="#" class="topic-item_title">Learn How to Control Your Body and Train Every Day</a>
				</div>
			</div>

			<a href="#" class="all-topics_load-more">Load More</a>
		</div>
	</div>


<?php get_footer() ?>