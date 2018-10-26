<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package damsen
 */

?>
 <div class="breadcrumb">
    <div class="breadcrumb-content">
        <a href="<?php bloginfo('stylesheet_directory') ?>/tin-tuc">Tin tức</a> |
        <a href="<?php the_permalink(); ?>l" id="category">Tin dự án</a>

    </div>
</div>
<div class="banner">
</div>
<div class="content-news">
    

    <div class="container">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        	<header class="entry-header">
        		<?php
        		if ( is_singular() ) :
        			the_title( '<h1 class="entry-title">', '</h1>' );
        		else :
        			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        		endif;
        
        		if ( 'post' === get_post_type() ) :
        			?>
        			<div class="entry-meta">
        				<?php
        				damsen_posted_on();
        				damsen_posted_by();
        				?>
        			</div><!-- .entry-meta -->
        		<?php endif; ?>
        	</header><!-- .entry-header -->
        
        	<?php damsen_post_thumbnail(); ?>
        
        	<div class="entry-content">
        		<?php
        		the_content( sprintf(
        			wp_kses(
        				/* translators: %s: Name of current post. Only visible to screen readers */
        				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'damsen' ),
        				array(
        					'span' => array(
        						'class' => array(),
        					),
        				)
        			),
        			get_the_title()
        		) );
        
        		wp_link_pages( array(
        			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'damsen' ),
        			'after'  => '</div>',
        		) );
        		?>
        	</div><!-- .entry-content -->
        
        	<footer class="entry-footer">
        		<?php damsen_entry_footer(); ?>
        	</footer><!-- .entry-footer -->
        </article><!-- #post-<?php the_ID(); ?> -->
    </div>   
</div>    
  
