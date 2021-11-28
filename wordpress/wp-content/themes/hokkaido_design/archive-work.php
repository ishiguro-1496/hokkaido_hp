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
							<span class="current_hp">HP制作</span>
							<?php include("assets/img/hp.svg"); ?>
						</a>
					<p>
				</div>
				<div class="works_hp">
					<?php
						$term = wp_get_object_terms($post->ID, 'work_cat');
						$args = array( 
						    'post_type' => 'work',
						    'taxonomy' => 'work_cat',
						    'term' => 'hp',
						    'posts_per_page' => 2,
						);
						$custom_query = new WP_Query( $args );
						if ( $custom_query->have_posts() ) : 
						    while ( $custom_query->have_posts() ) : 
						        $custom_query->the_post(); 
					?>

		        	<section>
		        		<a href="<?php echo get_post_meta($post->ID, 'work_link', true); ?>" target="_blank" rel="noopener noreferrer">
							<div class="hp_thumbnail">
							   	<?php if(has_post_thumbnail()): ?>
							   		<img src="<?php the_post_thumbnail('medium'); ?>
								<?php endif; ?>
							</div>
				        	<div class="hp_content">
				           		<h3><?php the_title(); ?></h3>
				           		<div>
					           		<p>
					           			<?php echo get_post_meta($post->ID, 'work_link', true); ?>
					           			<?php include("assets/img/ext_window.svg"); ?>
					           		</p>
					           	</div>
				        	</div>
			        	</a>
			        </section>

					<?php 
						endwhile;
						endif;
						wp_reset_postdata();
					?>
					<div class="more_button work_more">
						<a href="<?php echo home_url('/work_cat/hp'); ?>">
							<p>もっと見る</p>
							<?php include("assets/img/chevron_right.svg"); ?>
						</a>
					</div>
				</div>
				


				<div class="work_cat_tag">
					<p>
						<a href="<?php echo home_url('/work_cat/sns'); ?>">
							<span class="current_sns">snsコンサル</span>
							<?php include("assets/img/sns.svg"); ?>
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
						    'posts_per_page' => 2,
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
					<div class="more_button work_more">
						<a href="<?php echo home_url('/work_cat/sns'); ?>">
							<p>もっと見る</p>
							<?php include("assets/img/chevron_right.svg"); ?>
						</a>
					</div>
				</div>










				<div class="work_cat_tag">
					<p>
						<a href="<?php echo home_url('/work_cat/media'); ?>">
							<span class="current_media">メディア</span>
							<?php include("assets/img/media.svg"); ?>
						</a>
					<p>
				</div>

				<div class="works_media">

					<?php
						$term = wp_get_object_terms($post->ID, 'work_cat');
						$args = array( 
						    'post_type' => 'work',
						    'taxonomy' => 'work_cat',
						    'term' => 'media',
						    'posts_per_page' => 3,
						);
						$custom_query = new WP_Query( $args );
						if ( $custom_query->have_posts() ) : 
						    while ( $custom_query->have_posts() ) : 
						        $custom_query->the_post(); 
					?>
					<section>
		        		<a href="<?php echo get_post_meta($post->ID, 'work_link', true); ?>" target="_blank" rel="noopener noreferrer">
							<div class="media_thumbnail">
							   	<?php if(has_post_thumbnail()): ?>
							   		<img src="<?php the_post_thumbnail('medium'); ?>
								<?php endif; ?>
							</div>
				        	<div class="media_content">
				           		<h3><?php the_title(); ?></h3>
				           		<p>
				           			<?php echo get_post_meta($post->ID, 'media_account', true); ?>
				           			<?php include("assets/img/ext_window.svg"); ?>
				           		</p>
				        	</div>
				        </a>
			        </section>



					<?php 
						endwhile;
						endif;
						wp_reset_postdata();
					?>
					<div class="more_button work_more">
						<a href="<?php echo home_url('/work_cat/media'); ?>">
							<p>もっと見る</p>
							<?php include("assets/img/chevron_right.svg"); ?>
						</a>
					</div>
				
				</div>



			</div>
			<!-- works_end -->
		</div>
		<!-- main_end -->
	</div>
	<!-- wrapper_end -->

<?php get_footer(); ?>