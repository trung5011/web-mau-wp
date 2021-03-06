<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package damsen
 */

get_header();
?>
          
        <div class="breadcrumb">
            <div class="breadcrumb-content">

                <a href="<?php bloginfo('stylesheet_directory') ?>/tin-tuc">Tin tức</a>
                

            </div>
        </div>
	    <div class="banner">
        </div>
		<main id="news" class="fullpage news news-home">
            <div class="container content-news animatedParent animatedParent animateOnce">
        		<?php
        		$co = 0;
        		if ( have_posts() ) :
        
        			if ( is_home() && ! is_front_page() ) :
        				?>
        				<header>
        					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
        				</header>
        				
        				<?php
        			endif;
                    
        			/* Start the Loop */
        			while ( have_posts() ) :
        				the_post();
        
        				/*
        				 * Include the Post-Type-specific template for the content.
        				 * If you want to override this in a child theme, then include a file
        				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
        				 */
        				 $co++;
        				 ($co%2 !== 0 ) ? get_template_part( 'template-parts/content-tintuc-left', get_post_type() ):get_template_part( 'template-parts/content-tintuc-right', get_post_type() );
        				
        
        			endwhile;
        
        			the_posts_navigation();
        
        		else :
        
        			get_template_part( 'template-parts/content', 'none' );
        
        		endif;
        		?>
            </div>
		</main><!-- #main -->


<?php

get_footer();
