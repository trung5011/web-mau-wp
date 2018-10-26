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
    Template Name: Tổng Quan
*/
get_header();
?>
   
<div class="breadcrumb">
    <div class="breadcrumb-content">
        <a href="https://damsentower.co/chu-dau-tu/">Giới thiệu</a> |
        <a href="https://damsentower.co/tong-quan/" id="category">Tổng quan dự án</a>

    </div>
</div>

 <main class="fullpage animatedParent animateOnce" id="tong-quan">
    <div id="divContent" class="fadeIn delay-500 animated">
        <section class="div1">
            <div class="container">
                <div class="row">
                    <div class="circle-content">
                        <h2 class="special">
                            Tổng quan dự án</h2>
                        <div class="box-content text-center">
                            <p>
                                Dự án khu căn hộ thương mại <a href="https://damsentower.co">Đầm Sen Tower</a> toạ lạc ngay mặt tiền đường Tống Văn Trân do chủ đầu tư 557 xây dựng và phát triển là một trong những dự án nổi bật nhất tại quận Tân Phú trong năm 2018.<br/>
                                Cửa ngõ giao thông kết nối 4 quận Tân Bình, Tân Phú, Quận 6, Quận 11, dễ dàng kết nối đến các quận trung tâm thành phố cũng như thuận tiện di chuyển về sân bay Tân Sơn Nhất.<br/>
                                Đầm Sen Tower cung cấp đầy đủ các tiện ích phục vụ nhu cầu cư dân như trường học, công viên, chợ.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="div2">
            <div class="container list-div2">
                <div class="row">
                    <div class="col-xs-12 col-sm-3">
                        <img alt="icon quy mô" class="img-responsive icon-quymo" src="<?php bloginfo('stylesheet_directory') ?>/images/location.png" /> <b>Vị trí</b>
                        <p>
                        13A Tống Văn Trân, Phường 5, Quận 11</p>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <img alt="icon quy mô" class="img-responsive icon-quymo" src="<?php bloginfo('stylesheet_directory') ?>/images/ico-2.png" /><b>Pháp lý</b>
                        <p>
                        Đã có giấy phép xây dựng, sở hữu vĩnh viễn</p>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <img alt="icon quy mô" class="img-responsive icon-quymo" src="<?php bloginfo('stylesheet_directory') ?>/images/ico-3.png" /><b>Diện tích đất</b>
                        <p>
                        4,828.8 m<sup>2</sup></p>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <img alt="icon quy mô" class="img-responsive icon-quymo" src="<?php bloginfo('stylesheet_directory') ?>/images/ico-4.png" /><b>Mật độ xây dựng</b>
                        <p>
                            35%&nbsp;</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-3">
                        <img alt="icon quy mô" class="img-responsive icon-quymo" src="<?php bloginfo('stylesheet_directory') ?>/images/ico-5.png" /><b>Quy mô</b>
                        <p>
                        02 block căn hộ, cao 13 tầng và 2 tầng hầm</p>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <img alt="icon quy mô" class="img-responsive icon-quymo" src="<?php bloginfo('stylesheet_directory') ?>/images/ico-6.png" /><b>Loại hình</b>
                        <p>
                            Căn hộ thương mại&nbsp;</p>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <img alt="icon quy mô" class="img-responsive icon-quymo" src="<?php bloginfo('stylesheet_directory') ?>/images/ico-7.png" /><b>Số lượng căn hộ</b>
                        <p>
                        613 căn hộ<br>   Diện tích từ 50–75 m<sup>2</sup></p>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <img alt="icon quy mô" class="img-responsive icon-quymo" src="<?php bloginfo('stylesheet_directory') ?>/images/ico-8.png" /><b>Tình trạng căn hộ<br />
		khi nhận nhà</b>
                        <p>
                            Hoàn thiện cơ bản<br /> (tường, trần, sàn…)&nbsp;</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="div3">
            <div class="container">
                <div class="row">
                    <div class="circle-content">
                        <h2 class="special">
                            Thiết kế hiện đại</h2>
                        <div class="box-content text-center">
                        <p>Tại căn hộ Đầm Sen Tower, mỗi tòa nhà trong dự án đều có mặt thoáng. Các tòa nhà được thiết kế góc cạnh tạo hình như những cánh quạt gió khổng lồ mang đến gió tự nhiên cho mọi căn hộ. Nhờ thiết kế độc đáo này mà gần 100% các căn hộ của dự án đều là các căn góc có 2 mặt thoáng. Và mọi phòng trong căn hộ đều có cửa sổ, logia để đón ánh sáng và gió tự nhiên, đảm bảo căn hộ luôn ngập tràn nắng, gió tự nhiên.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br />
    </div>

</main>
<?php
get_footer();

