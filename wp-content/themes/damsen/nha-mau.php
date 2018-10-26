<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *  
 *
 * @package damsen
 */
/*
    Template Name: Nhà Mẫu
*/
get_header();

?>
       <div class="breadcrumb">
            <div class="breadcrumb-content">
                <a href="https://damsentower.co/nha-mau/">Nhà mẫu</a>
            </div>
        </div>
       
        <main class="fullpage section-project section-slide" id="project">

            <div class="slider-slick">
                <div class="item">
                    <div id="divContent" class="editor-content">
                        <img alt="" src="<?php bloginfo('stylesheet_directory') ?>/images/Type-B-1.jpg" />
                        <img alt="" src="<?php bloginfo('stylesheet_directory') ?>/images/Type-B-4.jpg"  />
                        <img alt="" src="<?php bloginfo('stylesheet_directory') ?>/images/Type-B-5.jpg"  />
                        <img alt="" src="<?php bloginfo('stylesheet_directory') ?>/images/Type-C6.jpg"  />
                        <img alt="" src="<?php bloginfo('stylesheet_directory') ?>/images/Type-C7.jpg"  />
                        <img alt="" src="<?php bloginfo('stylesheet_directory') ?>/images/Type-C8.jpg"  />
                        <div class='clearfix'></div>
                    </div>
                </div>



            </div>
        </main>
      

<?php
get_footer();

get_template_part('script','slider');
