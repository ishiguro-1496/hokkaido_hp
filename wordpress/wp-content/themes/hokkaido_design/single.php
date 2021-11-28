<?php get_header(); ?>

	<!-- wrapper -->
	<div id="wrapper">
		<!-- main -->
		<div id="main">
			<div class="single_page">
				<div class="article_info">
					<div>
						<p><?php the_modified_date("Y.m.d"); ?></p>
						<?php
							$cat = get_the_category();
							$cat_name = $cat[0]->cat_name;
							$cat_slug  = $cat[0]->category_nicename;
						?>
						<p class="article_category"><?php echo $cat_name; ?></p>
					</div>
					<h1><?php the_title(); ?></h1>
					<img src="<?php the_post_thumbnail( 'medium' );?>">
				</div>

<!-- 				<div class="article_tob">
					<h2>目次</h2>
				</div> -->
				<div class="article_body">
				    <?php echo the_content(); ?>
				</div>
				<div class="single_bottom_buttons">
					<p>
						<?php if (get_previous_post()):?>
						<?php previous_post_link('%link', '←前の記事へ'); ?>
						<?php endif; ?>	
					</p>
					<p>
						<a href="<?php echo home_url('/blog/'); ?>">一覧へ
						</a>
					</p>
					<p>
						<?php if (get_next_post()):?>
						<?php next_post_link('%link', '次の記事へ→'); ?>
						<?php endif; ?>
					</p>
				</div>
			</div>
		</div>
		<!--main_end -->
	</div>
	<!-- wrapper_end -->

<?php get_footer(); ?>