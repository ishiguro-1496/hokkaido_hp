<?php get_header(); ?>
	<?php
	/**
	 * Template Name: 予約管理サイト */
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
						<p >コーポレートサイト</p>
					</a>
				</div>
				<div>
					<a href="<?php echo home_url('/ec/'); ?>">
						<img src="<?php echo get_template_directory_uri()?>/assets/img/ec_1.jpg">
						<p>ECサイト</p>
					</a>
				</div>
				<div>
					<a href="<?php echo home_url('/reservation/'); ?>">
						<img src="<?php echo get_template_directory_uri()?>/assets/img/reservation_1.jpg">
						<p id="hp_nav_current">予約管理サイト</p>
					</a>
				</div>

			</div>

			<section class="section">
				<div class="reservation_system">
					<div>
						<h3>予約管理サイト<br class="br-sp">作成サービス</h3>
						<p>事前に予約枠を入力するだけで、予約を簡単に管理してくれるシステムサイトの作成サービスを開始しました。<br>予約システムを使用したい、けど色々設定しなければならないのは面倒。。という方は是非お気軽にお問い合わせください。</p>
					</div>
					<?php include("assets/img/reservation.svg"); ?>
				</div>
			</section class="section">


			<section class="section">
				<div class="section_title">
					<h3 class="section_title_en">POINT</h3>
					<h3 class="section_title_jp">特徴</h3>
				</div>

				<div class="service_point service_point_hp">
					<div>
						<!-- <?php include("assets/img/bolt.svg"); ?> -->
						<span>⚡</span>
						<h4>即開設可能</h4>
						<p>今すぐ使いたいのに申し込んでから時間がかかる…ということは有りません！必要情報を入力するだけですぐ利用することが可能です。</p>
					</div>
					<div>
						<!-- <?php include("assets/img/web.svg"); ?> -->
						<span>🗂</span>
						<h4>スケジュール管理</h4>
						<p>管理画面から、事前に予約可能日時・件数を簡単に登録することができ、予約状況と空き状況も確認できます。</p>
					</div>
					<div>
						<!-- <?php include("assets/img/responsive.svg"); ?> -->
						<span>📱</span>
						<h4>スマホからも予約OK</h4>
						<p>パソコンだけでなく、タブレット、スマートフォンからも予約が可能です。お出かけ先での予約も受けられるので、予約が取りやすくなります。</p>
					</div>
					<div>
						<!-- <?php include("assets/img/calendar.svg"); ?> -->
						<span>🗓️</span>
						<h4>わかりやすい簡単予約</h4>
						<p>予約画面は現在の空き状況がカレンダー表示で確認することができ、必要情報を入力するだけで患者様が簡単に予約ができます。</p>
					</div>
					
				</div>
			</section class="section">


			<section class="section">
				<div class="section_title">
					<h3 class="section_title_en">PRICE</h3>
					<h3 class="section_title_jp">費用</h3>
				</div>
				<div class="price price_reservation">
					<div>
						<h3>初期費用</h3>
						<p> 通常 20万円/アカウント が</p>
						<p class="triangle"></p>
						<p> 今なら <span>5</span>万円/アカウント</p>
					</div>
					<p class="price_vline price_vline_reservation"></p>
					<div>
						<h3>月額利用料</h3>
						<p>通常 3万円/月 が</p>
						<p class="triangle"></p>
						<p> 今なら<span>1</span>万円/月</p>
					</div>
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
						    'term' => 'reservation',
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