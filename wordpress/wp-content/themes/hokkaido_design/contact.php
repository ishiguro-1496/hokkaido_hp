<?php get_header(); ?>
	<?php
	/**
	 * Template Name: お問い合わせ */
	?>
	<!-- wrapper -->
	<div id="wrapper">
		<!-- main -->
		<div id="main">
			<h1 class="page_title_en">CONTACT</h1>
			<h2 class="page_title_jp">お問い合わせ</h2>
			<div id="contact">
				<p class="contact_note">必要事項をご入力の上、お気軽にお問い合わせください。3営業日以内に、担当よりメールにてご連絡差し上げます。😀</p>
				<?php echo do_shortcode('[contact-form-7 id="6" title="お問い合わせ"]'); ?>
			</div>
		</div>
		<!-- main_end -->
	</div>
	<!-- wrapper_end -->

<?php get_footer(); ?>
