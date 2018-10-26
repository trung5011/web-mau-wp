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
    Template Name: Mặt Bằng
*/
get_header();
?>
    <div class="breadcrumb">
            <div class="breadcrumb-content">
                <a href="https://damsentower.co/mat-bang/">Mặt bằng căn hộ</a>
            </div>
        </div>
        <main class="fullpage view" id="page-masterplan">
            <section class="map-mat-bang">
                <p>Thông tin mặt bằng sẽ cập nhật trong thời gian sớm nhất</p>
                <div id="master_plan" class="imagemapster">
                    <img alt="Mặt bằng tổng quan" class="img-responsive img-plans-lage" id="img1" src="<?php bloginfo('stylesheet_directory') ?>/images/slider2.jpg" usemap="#map-block" />
                </div>

            </section>
        </main>

      

<?php
get_footer();

