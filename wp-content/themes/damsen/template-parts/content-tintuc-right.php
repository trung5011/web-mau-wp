



<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package damsen
 */

?>

<div class='row'>
    <div class='col-xs-12 col-sm-12 col-md-5 pull-right fadeInRight delay-500 animated'>
        <a href="<?php the_permalink(); ?>">
            <div class='circle-news pull-right'><img class='img-news' src="<?php the_post_thumbnail('full') ?>"></div>
        </a>
    </div>
    <div class='col-xs-12 col-sm-12 col-md-6 col-lg-6 noi-dung fadeInLeft delay-500 animated'>
        <a href="<?php the_permalink(); ?>">
            <h2><?php the_title(); ?></h2><span class='date'><?php echo  get_the_date() ?></span>
            <p><?php the_excerpt(); ?></p>
        </a><a href="<?php the_permalink(); ?>" style='text-decoration: underline;'> Chi tiết </a>
    </div>
</div>