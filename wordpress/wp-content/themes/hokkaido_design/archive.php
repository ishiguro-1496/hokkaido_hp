<?php get_header(); ?>

	<!-- wrapper -->
	<div id="wrapper">
		<!-- main -->
		<div id="main">
			<h1 class="page_title_en">BLOG</h1>
			<h2 class="page_title_jp">ブログ</h2>
			<div class="blog">
				<div class="category_tag">
					<ul>
						<p>
							<a href="<?php echo home_url('/blog/'); ?>">ALL</a>
						<p>
					　　　<?php wp_list_categories('title_li'); ?>
					</ul>
				</div>
				<div class="articles">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
				<div class="page_nation_wrapper">
					<?php if( function_exists("the_pagination") ) the_pagination(); ?>
				</div>
			</div>
		</div>
		<!-- main_end -->
	</div>
	<!-- wrapper_end -->

<?php get_footer(); ?>