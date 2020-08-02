<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta name="robots" content="noindex,follow" />              
        <meta charset="utf-8">
        <title>お問い合わせ｜公益財団法人 アジア学生文化協会</title>
        <meta name="description" content="日本とアジア諸国の青年学生が共同生活を通じて、人間的和合と学術、文化および経済の交流をはかることにより、アジアの親善と世界の平和に貢献することを目的とする財団法人。">
   		<meta name="viewport" content="width=device-width,user-scalable=no,shrink-to-fit=yes">			
		<script src="<?php echo get_template_directory_uri(); ?>/js/viewport.js"></script>

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
    </head>
    <body class="under contact">
		<?php get_header(); ?>					
		<section class="fv flex-wrap_par">
			<h2 class="fc_red">お問い合わせ</h2>
			<div class="pix"></div>
		</section>
		<section class="international_dormitory wrap_800 sec_pad_1">
			<span class="in_tx">
お問合せ・ご要望等は、以下のフォームに入力のうえ送信して下さい。<br>
<span class="fc_red">●</span>は必須入力項目です。			
			</span>
					<?php

					// Start the Loop.
					while ( have_posts() ) :
						the_post();

		//				get_template_part( 'template-parts/content/content', 'page' );
						the_content();

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}

					endwhile; // End the loop.
					?>

		</section>
				
		<?php get_footer(); ?>				
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>        
        <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-3.2.1.min.js"><\/script>')</script>       
        <script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.sliderPro.min.js"></script>
    </body>
</html>
