<?php get_header(); ?>
	<?php
	/**
	 * Template Name: サービス */
	?>
	<!-- wrapper -->
	<div id="wrapper">
		<!-- main -->
		<div id="main">
			<section class="section">
				<h1 class="page_title_en">SERVICE</h1>
				<h2 class="page_title_jp">サービス</h2>
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
				<?php get_template_part('to_contact'); ?>
			</section>

		</div>
		<!-- main_end -->
	</div>
	<!-- wrapper_end -->

<?php get_footer(); ?>
