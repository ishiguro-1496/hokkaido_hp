<?php get_header(); ?>
	<?php
	/**
	 * Template Name: sns */
	?>
	<!-- wrapper -->
	<div id="wrapper">
		<!-- main -->
		<div id="main">
			<h1 class="page_title_en">SERVICE</h1>
			<h2 class="page_title_jp">サービス</h2>


			<div class="service_top">
				<div class="fluid fluid_sns">
					<?php include("assets/img/sns.svg"); ?>
				</div>
				<div class="service_name service_name_sns">
					<div>
						<h1>SNSコンサル　</h1>
						<h2>貴社のSNSをより魅力的に改修するお手伝いします！</h2>
						<p>02</p>						
					</div>
				</div>
			</div>

			<section class="section">
				<div class="section_title">
					<h3 class="section_title_en">POINT</h3>
					<h3 class="section_title_jp">特徴</h3>
				</div>

				<div class="service_point service_point_sns">
					<div>
						<?php include("assets/img/responsive.svg"); ?>
						<h4>insta電子パンフレット</h4>
						<p>instagramをお店の魅力を発信する電子パンフレットにします！イメージは制作実績をご覧ください</p>
					</div>
					<div>
						<?php include("assets/img/followers.svg"); ?>
						<h4>フォロワー数増加</h4>
						<p>弊社が提携しているインフルエンサー等を活用して、フォロワーを継続的に増加させます</p>
					</div>
					<div>
						<?php include("assets/img/check.svg"); ?>
						<h4>更新・発信内容管理</h4>
						<p>定期的な更新や、投稿タイミング、投稿内容のチェックを行います。</p>
					</div>
					<div>
						<?php include("assets/img/trend.svg"); ?>
						<h4>トレンド入り</h4>
						<p>弊社が提携しているインフルエンサーやそのフォロワーたちの投稿・閲覧によって、貴社の発信をトレンド入りさせることができます</p>
					</div>
					<div>
						<?php include("assets/img/report.svg"); ?>
						<h4>実績定期報告</h4>
						<p>一定期間経過後にどれだけ効果があったか定期的に報告いたします。また、その結果をもとに次の施策をご提案いたします。</p>
					</div>
					
				</div>
			</section class="section">


			<section class="section">
				<div class="section_title">
					<h3 class="section_title_en">PRICE</h3>
					<h3 class="section_title_jp">費用</h3>
				</div>
				<div class="price price_sns">
					<div>
						<h3>電子パンフレット制作</h3>
						<p> <span>5</span>万円〜/アカウント</p>
					</div>
					<p class="price_vline price_vline_sns"></p>
					<div>
						<h3>
						フォロワー数増加<br>
						発信内容管理<br>
						実績定期報告
						</h3>
						<p><span>3</span>万円〜/月</p>
					</div>
					<p class="price_vline price_vline_sns"></p>
					<div>
						<h3>トレンド入り</h3>
						<p><span>3</span>万円〜/回</p>
					</div>
				</div>
			</section class="section">

			<section class="section">
				<div class="section_title">
					<h3 class="section_title_en">WORK</h3>
					<h3 class="section_title_jp">制作実績</h3>
				</div>
				<div class="works_sns">
					<?php
						$term = wp_get_object_terms($post->ID, 'work_cat');
						$args = array( 
						    'post_type' => 'work',
						    'taxonomy' => 'work_cat',
						    'term' => 'sns',
						    'posts_per_page' => 4,
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
					<div class="more_button" id="service_more">
						<a href="<?php echo home_url('/work_cat/sns'); ?>">
							<p>もっと見る</p>
							<?php include("assets/img/chevron_right.svg"); ?>
						</a>
					</div>
				</div>

			</section class="section">


			<section class="section">
				<div class="section_title">
					<h3 class="section_title_en">FLOW</h3>
					<h3 class="section_title_jp">制作の流れ</h3>
				</div>
				<div class="flow">
					<div class="flow_step">
						<div class="flow_num flow_num_sns">
							<span>1</span>
						</div>
		    			<div class="flow_detail">
		    				<h4>お問い合わせ</h4>
		    				<p>まずはお気軽にお問い合わせください</p>
		    			</div>
		    		</div>
		    		<div class="flow_vline flow_vline_sns"></div>
		    		<div class="flow_step">
						<div class="flow_num flow_num_sns">
							<span>2</span>
						</div>
		    			<div class="flow_detail">
		    				<h4>ヒアリング</h4>
		    				<p>ヒアリングを通して目標設定を行います。ターゲットや届けたいメッセージを整理したのち、配信内容の企画を行ってまいります。</p>
		    			</div>
		    		</div>
		    		<div class="flow_vline flow_vline_sns"></div>
		    		<div class="flow_step">
						<div class="flow_num flow_num_sns">
							<span>3</span>
						</div>
		    			<div class="flow_detail">
		    				<h4>制作・設定</h4>
		    				<p>ヒアリングを通して決定した施策を実際に行っていきます。電子パンフレットの制作、投稿タイミング・投稿内容改善、を行っていきます。</p>
		    			</div>
		    		</div>
		    		<div class="flow_vline flow_vline_sns"></div>
		    		<div class="flow_step">
						<div class="flow_num flow_num_sns">
							<span>4</span>
						</div>
		    			<div class="flow_detail">
		    				<h4>実績報告</h4>
		    				<p>一定期間経過後にどれだけ効果があったか定期的に報告いたします。また、その結果をもとに次の施策をご提案いたします。</p>
		    			</div>
		    		</div>
				</div>
			</section>

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
						    'term' => 'sns',
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
										class="voicelink voicelink_sns"
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