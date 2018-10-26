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
    Template Name: Tiện Ích
*/
get_header();
?>
   
       <div class="breadcrumb">
            <div class="breadcrumb-content">
                <a href="<?php bloginfo('stylesheet_directory') ?>/tien-ich">Tiện ích</a>
            </div>
        </div>
        <main class="fullpage" id="tien-ich">
            <section class="div1">
                <div class="container">
                    <div class="row">
                        <div class="circle-content">
                            <div id="divContent">
                                <h2 class="special">
                                    Tiện ích đẳng cấp</h2>
                                <div class="box-content text-center">
                                    <p style="text-align: center;">
                                        Không gian sống thường ngày đậm chất thư giãn như đang trải nghiệm du lịch cho cư dân: Hồ bơi xanh mát, spa thân thiện hay phòng gym phục hồi năng lượng, khu trò chơi khám phá kỹ năng vận động, màu sắc và sáng tạo của trẻ con... chỉ có tại <a href="https://damsentower.co">dam sen tower</a><br
                                        />
                                        <br /> Phục vụ mọi nhu cầu cư dân: Công viên, hồ bơi, nhà trẻ, Gym, Spa, dịch vụ tiện lợi, mua sắm...<br />
                                        <br /> Tận hưởng mọi tiện ích hàng đầu tại Q.11, Q.6, Q.Tân Phú, Q.Bình Tân, Tân Bình.<br /> &nbsp;
                                    </p>
                                </div>
                                <br />
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section class="div2">

                <ul class="bx-slider slidertienich">
                <li data-title='Hồ bơi'>
                        <div class='main-img' style='background-image: url(<?php bloginfo('stylesheet_directory') ?>/images/gallery_14.jpg);'></div>
                    </li>
                    <li data-title='Coffee Shop'>
                        <div class='main-img' style='background-image: url(<?php bloginfo('stylesheet_directory') ?>/images/14.jpg);'></div>
                    </li>
                    <li data-title='Gym'>
                        <div class='main-img' style='background-image: url(<?php bloginfo('stylesheet_directory') ?>/images/shutterstock162568466.jpg);'></div>
                    </li>
                    <li data-title='Đầm Sen'>
                        <div class='main-img' style='background-image: url(<?php bloginfo('stylesheet_directory') ?>/images/damsen.jpg);'></div>
                    </li>
                    <li data-title='Siêu thị'>
                        <div class='main-img' style='background-image: url(<?php bloginfo('stylesheet_directory') ?>/images/4mx2m8-01.jpg);'></div>
                    </li>
                    <li data-title='Khu vui chơi trẻ em'>
                        <div class='main-img' style='background-image: url(<?php bloginfo('stylesheet_directory') ?>/images/shutterstock213322138.jpg);'></div>
                    </li>
                    <li data-title='Mua sắm'>
                        <div class='main-img' style='background-image: url(<?php bloginfo('stylesheet_directory') ?>/images/shutterstock423421135.jpg);'></div>
                    </li>
                </ul>
                <div class="control">
                    <div class="bx-pager bx-default-pager">
                        <div class="headline">
                            <div class="container-headline3">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="headline">
                    <div class="container-headline2">
                    </div>
                </div>

                <!--   <div class="control">
                    <div class="next-prev">
                        <span class="prev"></span>
                      
                    </div>
                    <div class="pager">
                        01 / 03
                    </div>
                    <div class="next-prev">
                        <span class="next"></span>
                      
                    </div>
                </div> -->
            </section>
        </main>


<?php
get_footer();

