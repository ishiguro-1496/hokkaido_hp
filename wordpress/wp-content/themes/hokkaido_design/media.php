<?php get_header(); ?>
	<?php
	/**
	 * Template Name: メディア */
	?>
	<!-- wrapper -->
	<div id="wrapper">
		<!-- main -->
		<div id="main">
			<h1 class="page_title_en">SERVICE</h1>
			<h2 class="page_title_jp">サービス</h2>


			<div class="service_top">
				<div class="fluid fluid_media">
					<?php include("assets/img/media.svg"); ?>
				</div>
				<div class="service_name service_name_media">
					<div>
						<h1>メディア広告</h1>
						<h2>弊社で運用しているメディアで貴社の情報を発信します！</h2>
						<p>03</p>						
					</div>
				</div>
			</div>

			<section class="section">
				<div class="section_title">
					<h3 class="section_title_en">MEDIA</h3>
					<h3 class="section_title_jp">メディア</h3>
				</div>
				<div class="media_info">
					<div class="media_title">
						<h3>"THINGS TODO <br class="br-sp">HOKKAIDO"</h3>
						<p>定番のスポットから知る人ぞ知るディープな体験プランなど様々な北海道の魅力を発信しています</p>
					</div>
					<div class="media_detail">
						<div class="media_img">
							<a href="#">
								<img src="<?php echo get_template_directory_uri()?>/assets/img/media_img.png">
							</a>
						</div>
						<div class="media_point">
							<div>
								<!-- <?php include("assets/img/pv.svg"); ?> -->
								<span>👀</span>
								<p>月間<span>100</span>万PV</p>
							</div>
							<div>
								<!-- <?php include("assets/img/shop.svg"); ?> -->
								<span>🏘</span>
								<p>掲載店舗<span>200</span>件以上</p>
							</div>
							<div>
								<!-- <?php include("assets/img/map.svg"); ?> -->
								<span>📍</span>
								<p>全道エリア対応</p>
							</div>
							<div>
								<!-- <?php include("assets/img/language.svg"); ?> -->
								<span>🌏</span>
								<p>他言語対応可能</p>
								
							</div>
						</div>
					</div>
				</div>
			</section class="section">


			<section class="section">
				<div class="section_title">
					<h3 class="section_title_en">PRICE</h3>
					<h3 class="section_title_jp">費用</h3>
				</div>
				<div class="price price_media">
					<div>
						<h3>掲載費</h3>
						<p><span>1</span>万円〜/月</p>
					</div>
					<p class="price_vline price_vline_media"></p>
					<div>
						<h3>特集記事</h3>
						<p><span>10</span>万円〜/記事</p>
					</div>
				</div>
			</section class="section">




			<section class="section">
				<div class="section_title">
					<h3 class="section_title_en">WORK</h3>
					<h3 class="section_title_jp">制作実績</h3>
				</div>
				<div class="works_media">

					<?php
						$term = wp_get_object_terms($post->ID, 'work_cat');
						$args = array( 
						    'post_type' => 'work',
						    'taxonomy' => 'work_cat',
						    'term' => 'media',
						    'posts_per_page' => 6,
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
				</div>
				<div class="more_button" id="service_more">
					<a href="<?php echo home_url('/work_cat/media'); ?>">
						<p>もっと見る</p>
						<?php include("assets/img/chevron_right.svg"); ?>
					</a>
				</div>

			</section class="section">


			<section class="section">
				<div class="section_title">
					<h3 class="section_title_en">REVIEWS</h3>
					<h3 class="section_title_jp">お客様の声</h3>
				</div>

				<div class="voices">
					<?php
						$term = wp_get_object_terms($post->ID, 'voice_cat');
						$args = array( 
						    'post_type' => 'voice',
						    'taxonomy' => 'voice_cat',
						    'term' => 'media',
						    'posts_per_page' => 4,
						);
						$custom_query = new WP_Query( $args );
						if ( $custom_query->have_posts() ) : 
						    while ( $custom_query->have_posts() ) : 
						        $custom_query->the_post(); 
					?>
					<div class="voice_block">
						<div class="voice_profile">
							<img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'customer_icon' ,true)); ?>">
							<div>
								<span>
									<a href="<?php echo get_post_meta($post->ID, 'customer_url', true);?>"
										target="_blank" rel="noopener noreferrer"
										class="voicelink voicelink_media"
									>
										<?php echo get_post_meta($post->ID, 'customer_name', true); ?>
									</a>
								</span>
								<p><?php echo get_post_meta($post->ID, 'customer_category', true); ?></p>
							</div>
						</div>
						<div class="balloon">
							<h5>
								<?php echo get_post_meta($post->ID, 'voice_title', true); ?>
							</h5>
							<p>
								<?php echo get_post_meta($post->ID, 'voice_contents', true); ?>
							</p>
						</div>
					</div>

					<?php 
						endwhile;
						endif;
						wp_reset_postdata();
					?>
				</div>
			</section>

			<section class="section">
				<?php get_template_part('to_contact'); ?>
			</section>




		</div>
		<!-- main_end -->
	</div>
	<!-- wrapper_end -->

<?php get_footer(); ?>