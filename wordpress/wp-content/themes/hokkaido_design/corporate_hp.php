<?php get_header(); ?>
	<?php
	/**
	 * Template Name: コーポレートサイト */
	?>
	<!-- wrapper -->
	<div id="wrapper">
		<!-- main -->
		<div id="main">
			<h1 class="page_title_en">SERVICE</h1>
			<h2 class="page_title_jp">サービス</h2>


			<div class="service_top">
				<div class="fluid fluid_hp">
					<?php include("assets/img/hp.svg"); ?>
				</div>
				<div class="service_name service_name_hp">
					<div>
						<h1>ホームページ制作　</h1>
						<h2>貴社の魅力を最大限表現できるホームページを制作いたします。</h2>
						<p>01</p>
					</div>
				</div>
			</div>

			<div class="hp_nav">
				<div>
					<a href="<?php echo home_url('/corporate/'); ?>">
						<img src="<?php echo get_template_directory_uri()?>/assets/img/corporate_1.jpg">
						<p id="hp_nav_current">コーポレートサイト</p>
					</a>
				</div>
				<div>
					<a href="<?php echo home_url('/ec/'); ?>">
						<img src="<?php echo get_template_directory_uri()?>/assets/img/ec_1.jpg">
						<p >ECサイト</p>
					</a>
				</div>
				<div>
					<a href="<?php echo home_url('/reservation/'); ?>">
						<img src="<?php echo get_template_directory_uri()?>/assets/img/reservation_1.jpg">
						<p >予約管理サイト</p>
					</a>
				</div>

			</div>




			<section class="section">
				<div class="section_title">
					<h3 class="section_title_en">POINT</h3>
					<h3 class="section_title_jp">特徴</h3>
				</div>

				<div class="service_point service_point_hp">
					<div>
						<!-- <?php include("assets/img/responsive.svg"); ?> -->
						<span>📱</span>
						<h4>レスポンシブ対応</h4>
						<p>もちろんスマホ、タブレットからでも閲覧できるようにレスポンシブ対応いたします！</p>
					</div>
					<div>
						<!-- <?php include("assets/img/design.svg"); ?> -->
						<span>🎨</span>
						<h4>オリジナルデザイン</h4>
						<p>お客様のご希望に寄り添って、オリジナルデザインで提案させていただきます！</p>
					</div>
					<div>
						<!-- <?php include("assets/img/update.svg"); ?> -->
						<span>🚀</span>
						<h4>自社更新可能</h4>
						<p>いつでも好きなタイミングでHPを更新いただくことも可能です。</p>
					</div>
					<div>
						<!-- <?php include("assets/img/support.svg"); ?> -->
						<span>🔧</span>
						<h4>公開後のサポート</h4>
						<p>公開後も気になることがあれば、お気軽にお問い合わせください！細かい要望もサポートします！</p>
					</div>
					<div>
						<!-- <?php include("assets/img/seo.svg"); ?> -->
						<span>👩‍💻</span>
						<h4>SEO対策</h4>
						<p>より多くの方に認知いただけるよう、SEO対策もしっかりサポートします！</p>
					</div>
					<div>
						<!-- <?php include("assets/img/analytics.svg"); ?> -->
						<span>📊</span>
						<h4>アクセス分析</h4>
						<p>Google Analyticsを利用したアクセス分析によって、集客・認知効果を可視化することができます！</p>
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
				</div>
				<div class="more_button work_more" id="service_more">
					<a href="<?php echo home_url('/work_cat/hp'); ?>">
						<p>もっと見る</p>
						<?php include("assets/img/chevron_right.svg"); ?>
					</a>
				</div>
			</section>




			<section class="section">
				<div class="section_title">
					<h3 class="section_title_en">FLOW</h3>
					<h3 class="section_title_jp">制作の流れ</h3>
				</div>
				<div class="flow">
					<div class="flow_step">
						<div class="flow_num flow_num_hp">
							<span>1</span>
						</div>
		    			<div class="flow_detail">
		    				<h4>お問い合わせ</h4>
		    				<p>まずはお気軽にお問い合わせください</p>
		    			</div>
		    		</div>
		    		<div class="flow_vline flow_vline_hp"></div>
		    		<div class="flow_step">
						<div class="flow_num flow_num_hp">
							<span>2</span>
						</div>
		    			<div class="flow_detail">
		    				<h4>ヒアリング</h4>
		    				<p>現状抱えている課題や、どういったサイトにしたいかの要望をヒアリングいたします。</p>
		    			</div>
		    		</div>
		    		<div class="flow_vline flow_vline_hp"></div>
		    		<div class="flow_step">
						<div class="flow_num flow_num_hp">
							<span>3</span>
						</div>
		    			<div class="flow_detail">
		    				<h4>ご提案・お見積もり</h4>
		    				<p>ヒアリングした内容をもとに、お客様に最適なデザインやサイト構成を提案いたします。</p>
		    			</div>
		    		</div>
		    		<div class="flow_vline flow_vline_hp"></div>
		    		<div class="flow_step">
						<div class="flow_num flow_num_hp">
							<span>4</span>
						</div>
		    			<div class="flow_detail">
		    				<h4>制作</h4>
		    				<p>要件・デザインが確定しましたら、実際に制作を開始いたします。</p>
		    			</div>
		    		</div>
		    		<div class="flow_vline flow_vline_hp"></div>
		    		<div class="flow_step">
						<div class="flow_num flow_num_hp">
							<span>5</span>
						</div>
		    			<div class="flow_detail">
		    				<h4>保守・運用</h4>
		    				<p>もちろんリリース後の保守メンテナンスも承ります。</p>
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
						    'term' => 'corporate',
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
									<a href="<?php echo get_post_meta($post->ID, 'customer_url', true); ?>"
										target="_blank" rel="noopener noreferrer"
										class="voicelink voicelink_hp"
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