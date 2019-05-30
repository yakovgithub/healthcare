<?php get_header(); ?>	
	
	<main>
		<article class="clearfix">
		
		<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
		
		<?php  if ( have_posts() ) { while ( have_posts() ) : the_post(); ?>

			<h1><?php the_title(); ?></h1>
			<div class="author-meta clearfix">
				<div class="author-name"><?php echo get_the_author_meta( 'first_name' );?> <?php echo get_the_author_meta( 'last_name' );?><div class="author-description"><?php echo get_the_author_meta( 'description' );?></div></div>
				<div class="medical-revision">Medically reviewed by a <a href="#">board-certified physician</a></div>
			</div>
			<div class="date"><?php echo get_the_date();?></div>
			<div class="entry-content"><?php the_content(); ?></div>
			<div class="sidebar"><?php if ( function_exists('dynamic_sidebar') ) dynamic_sidebar('article-sidebar'); ?></div>
			
		<?php endwhile; }?>

		</article>

		<?php 
		$orig_post = $post;
		global $post;
		$categories = get_the_category($post->ID);
		if ($categories) {
			$category_ids = array();
			foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
			$args = array(
				'category__in' => $category_ids,
				'post__not_in' => array($post->ID),
				'posts_per_page'=> 10, 
				'caller_get_posts'=>1
			);

			$my_query = new wp_query( $args );
			if( $my_query->have_posts() ) {
				echo '<div class="related_posts fit-images"><div class="related_posts_title">Related Posts</div><div class="related_posts_container"><div class="related_posts_item related_posts_item-empty"></div>';
				while( $my_query->have_posts() ) {
					$my_query->the_post();?>
					<a class="related_posts_item" href="<? the_permalink()?>">
						<div class="image-container"><?php the_post_thumbnail(); ?></div>
						<div class="date"><?php echo get_the_date();?></div>
						<h3 class="related_posts_item_title"><?php the_title(); ?></h3>
					</a>
				<?
				}
				echo '<div class="related_posts_item related_posts_item-empty"></div></div>';
			}
		}
		$post = $orig_post;
		wp_reset_query(); ?>
	</main>

<?php get_footer(); ?>