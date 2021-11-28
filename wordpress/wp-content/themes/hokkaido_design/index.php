
<?php get_header(); ?>

	<!-- wrapper -->
	<div id="wrapper">

		<div class="top_bg">
			<img src="<?php echo get_template_directory_uri()?>/assets/img/top_bg.jpg">
			<div class="top_message">
				<h1>北海道の起業家の<br>心強い味方に</h1>
			</div>
		</div>

		<!-- main -->
		<div id="main">

			<section class="section">

				<div class="section_title">
					<h3 class="section_title_en">ABOUT</h3>
					<h3 class="section_title_jp">会社概要</h3>
				</div>

				<div class="mission">
					<div class="mission_title">
						<div>
							<h1>北海道の起業家を<br class="br-sp">テクノロジーで支援します</h1>
							<span>WAHT <br class="br-sp">WE DO</span>
						</div>
					</div>
					<p>「アイディアはあるけど実現できない」、「オンライン集客に困っている」、「業務のデジタル化をしたいけど何から始めれば良いかわからない」そんな北海道の起業家たちを様々な手段で支援いたします。&#129309;</p>
				</div>
				<div class="more_button about_more">
					<a href="<?php echo home_url('/about/'); ?>">
						<p>詳しく見る</p>
						<?php include("assets/img/chevron_right.svg"); ?>
					</a>
				</div>
			</section>

			<section class="section">
				<div class="section_title">
					<h3 class="section_title_en">SERVICE</h3>
					<h3 class="section_title_jp">サービス</h3>
				</div>
				<div class="services">
					<div class="services_block services_hp_block">
						<div class="services_icon services_icon_hp">
							<?php include("assets/img/hp.svg"); ?>
						</div>
						<div class="services_text">
							<div>
								<h1>ホームページ制作</h1>
								<p class="services_text_hp">01</p>
							</div>
							<h2>貴社の魅力を最大限表現できるホームページを制作いたします。</h2>
						</div>
						<div class="more_button service_more hp_more">
							<a href="<?php echo home_url('/service/corporate'); ?>">
								<p>詳しく見る</p>
								<?php include("assets/img/chevron_right.svg"); ?>
							</a>
						</div>
					</div>
					<div class="services_block services_sns_block">
						<div class="services_icon services_icon_sns">
							<?php include("assets/img/sns.svg"); ?>
						</div>
						<div class="services_text">
							<div>
								<h1>SNSコンサル</h1>
								<p class="services_text_sns">02</p>
							</div>
							<h2>貴社のSNSをより魅力的に改修するお手伝いします！</h2>
						</div>
						<div class="more_button service_more sns_more">
							<a href="<?php echo home_url('/service/sns'); ?>">
								<p>詳しく見る</p>
								<?php include("assets/img/chevron_right.svg"); ?>
							</a>
						</div>
					</div>
					<div class="services_block services_media_block">
						<div class="services_icon services_icon_media">
							<?php include("assets/img/media.svg"); ?>
						</div>
						<div class="services_text">
							<div>
								<h1>メディア広告</h1>
								<p class="services_text_media">03</p>
							</div>
							<h2>弊社で運用しているメディアで貴社の情報を発信します！</h2>
						</div>
						<div class="more_button service_more media_more">
							<a href="<?php echo home_url('/service/media'); ?>">
								<p>詳しく見る</p>
								<?php include("assets/img/chevron_right.svg"); ?>
							</a>
						</div>
					</div>
				</div>
			</section>

			<section class="section">
				<div class="section_title">
					<h3 class="section_title_en">WORK</h3>
					<h3 class="section_title_jp">制作実績</h3>
				</div>
				<div class="works_hp" id="service_works_hp">
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
					<div class="more_button work_more" id="service_more">
						<a href="<?php echo home_url('/work/'); ?>">
							<p>もっと見る</p>
							<?php include("assets/img/chevron_right.svg"); ?>
						</a>
					</div>
				</div>
			</section>

			<section class="section">
				<div class="section_title">
					<h3 class="section_title_en">BLOG</h3>
					<h3 class="section_title_jp">ブログ</h3>
				</div>
				<div class="articles">
					<?php query_posts('posts_per_page=3');
					if (have_posts()) : while (have_posts()) : the_post(); ?>
		    		<article>
				    	<a href="<?php the_permalink(); ?>" class="blog-item">  
				        	<div class="article_thumbnail">
				            	<?php if(has_post_thumbnail()): ?>
				            		<img src="<?php the_post_thumbnail('medium'); ?>
				         		<?php endif; ?>
				       		</div>
				        	<div class="article_content">
				        		<div>
					        		<p><?php the_modified_date("Y.m.d"); ?></p>
					        		<?php
					        			$cat = get_the_category();
					        			$cat_name = $cat[0]->cat_name;
					        			$cat_slug  = $cat[0]->category_nicename;
					        		?>
					        		<p class="article_category"><?php echo $cat_name; ?></p>
					        	</div>
				           		<h3><?php the_title(); ?></h3>
				        	</div>
				   		</a>
		    		</article>
					<?php endwhile; endif; ?>
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