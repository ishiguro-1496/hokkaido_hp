<?php get_header(); ?>

	<!-- wrapper -->
	<div id="wrapper">
		<!-- main -->
		<div id="main">
			<h1 class="page_title_en">WORK</h1>
			<h2 class="page_title_jp">制作実績</h2>
			<div id="works">
				<div class="work_cat_tag">
					<p>
						<a href="<?php echo home_url('/work_cat/hp'); ?>">
							<span>HP制作</span>
							<?php include("assets/img/hp_gray.svg"); ?>
						</a>
					<p>
					<p>
						<a href="<?php echo home_url('/work_cat/sns'); ?>">
							<span class="current_sns">snsコンサル</span>
							<?php include("assets/img/sns.svg"); ?>
						</a>
					<p>
					<p>
						<a href="<?php echo home_url('/work_cat/media'); ?>">
							<span>メディア</span>
							<?php include("assets/img/media_gray.svg"); ?>
						</a>
					<p>
				</div>
				<div class="works_sns">
					<?php
						$term = wp_get_object_terms($post->ID, 'work_cat');
						$args = array( 
						    'post_type' => 'work',
						    'taxonomy' => 'work_cat',
						    'term' => 'sns',
						    'posts_per_page' => 12,
						);
						$custom_query = new WP_Query( $args );
						if ( $custom_query->have_posts() ) : 
						    while ( $custom_query->have_posts() ) : 
						        $custom_query->the_post(); 
					?>

		        	<section>
		        		<a href="<?php echo get_post_meta($post->ID, 'work_link', true); ?>" target="_blank" rel="noopener noreferrer">
							<div class="sns_thumbnail">
							   	<?php if(has_post_thumbnail()): ?>
							   		<img src="<?php the_post_thumbnail('medium'); ?>
								<?php endif; ?>
							</div>
				        	<div class="sns_content">
				           		<h3><?php the_title(); ?></h3>
				           		<p>
				           			<?php echo get_post_meta($post->ID, 'sns_account', true); ?>
				           			<?php include("assets/img/ext_window.svg"); ?>
				           		</p>
				        	</div>
				        </a>
			        </section>

					<?php endwhile;
					endif;
					wp_reset_postdata();
					?>
				</div>


				<div class="page_nation_wrapper">
					<?php if( function_exists("the_pagination") ) the_pagination(); ?>
				</div>
			</div>
		</div>
		<!-- main_end -->
	</div>
	<!-- wrapper_end -->

<?php get_footer(); ?>