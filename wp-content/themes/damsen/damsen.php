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
    Template Name: Ladding-page
*/
get_header();
?>
   
      <div>
        <input id="__EVENTTARGET" type="hidden" name="__EVENTTARGET" value="">
        <input id="__EVENTARGUMENT" type="hidden" name="__EVENTARGUMENT" value="">
        <input id="__VIEWSTATE" type="hidden" name="__VIEWSTATE" value="/wEPDwUENTM4MWRk4v4pD7FMfBsEIMf3jh0K+FupOo8=">
      </div>
      <script type="text/javascript">
        //<![CDATA[
        var theForm = document.forms['tqForm'];
        if (!theForm) {
        theForm = document.tqForm;
        }
        function __doPostBack(eventTarget, eventArgument) {
        if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
        }
        }
        //]]>
      </script>
      <script type="text/javascript">$('body').attr('id', 'home');</script>
      <div>
        <input id="__VIEWSTATEGENERATOR" type="hidden" name="__VIEWSTATEGENERATOR" value="CA0B0334">
      </div>
      <div class="divMsg" id="divMsg"></div>
      <main class="fullpage" id="page-home">
        <section class="slider animatedParent animatedParent animateOnce">
          <ul class="bx-slider">
            <li data-title="Hạnh phúc &lt;strong&gt;trong tầm tay&lt;/strong&gt;">
              <div class="main-img" style="background-image: url(<?php bloginfo('stylesheet_directory') ?>/images/slider1.jpg);"></div>
            </li>
            <li data-title="Hạnh phúc &lt;strong&gt;trong tầm tay&lt;/strong&gt;">
              <div class="main-img" style="background-image: url(<?php bloginfo('stylesheet_directory') ?>/images/slider2.jpg);"></div>
            </li>
          </ul>
          <div class="headline">
            <div class="container-headline"></div>
          </div>
        </section>
        <section class="why animatedParent animateOnce">
          <div class="container">
            <div class="noi-dung">
              <div class="col-md-6 pull-left fadeInLeft delay-500 animated slow'">
                <big>Đầm Sen Tower</big>
                <h2>Tổ ấm yên bình</h2>
                <div class="box-content">
                  <p>Tổ hợp thương mại căn hộ Đầm Sen Tower do Công ty cổ phần đầu tư và xây dựng công trình 557 làm chủ đầu tư. Dự án Đầm Sen Tower chính là khu phức hợp căn hộ và trung tâm thương mại - dịch vụ trọng điểm của Q.11 nằm trong đồ án quy hoạch chung của quận đến năm 2020.</p>
                  <p>Từ căn hộ Đầm Sen Tower chỉ mất 5 phút để đến công viên Đầm Sen, 10 phút đến TTTM Parkson Hùng Vương, TTTM An Đông, bệnh viện Chợ Rẫy, bến xe Miền Tây…</p>
                </div>
              </div>
              <div class="col-md-6 pull-right fadeInRight delay-500 animated slow"><img class="img-responsive" src="<?php bloginfo('stylesheet_directory') ?>/images/tong_quan.png" alt=""></div>
            </div>
          </div>
        </section>
        <section class="location animatedParent animateOnce">
          <div class="container-fluid">
            <div class="row noi-dung">
              <div class="col-md-6 pull-left fadeInLeft delay-500 animated slow"><img class="img-responsive img-vitri" src="<?php bloginfo('stylesheet_directory') ?>/images/img_vitri.png" alt=""></div>
              <div class="col-md-6 pull-right vitri-content fadeInRight delay-500 animated slow">
                <h2 class="special">Trung tâm quận 11</h2>
                <div class="box-content">
                  <p>Đầm Sen Tower Tọa lạc tại số 13A đường Tống Văn Trân, cách Đầm Sen 2 phút. Trung tâm kết nối của 4 quận Tân Bình, Tân Phú, Quận 6 và Quận 11.</p>
                  <p>Đầm sen Tower chính là cửa ngõ giao thương kết nối 4 quận Tân Bình, Tân Phú, Quận 10, Quận 6, Quận 11, dễ dàng kết nối đến các quận trung tâm thành phố cũng như thuện tiện di chuyển về sân bay Tân Sơn Nhất.</p>
                  <div class="row vi-tri-content">
                    <div class="col-sm-6">
                      <ul class="list-vitri">
                        <h3>SIÊU THỊ - CHỢ</h3>
                        <li>Chợ Bình Thới</li>
                        <li>Chợ Trần Văn Quang </li>
                        <li>Aeon Tân Phú</li>
                      </ul>
                    </div>
                    <div class="col-sm-6">
                      <ul class="list-vitri">
                        <h3>TRƯỜNG HỌC</h3>
                        <li>THCS Lê Quý Đôn</li>
                        <li>THPT Trần Quang Khải</li>
                        <li>THCS Nguyễn Huệ</li>
                        <li>THPT Lê Quý Đôn</li>
                        <li>Trường Phùng Hưng</li>
                      </ul>
                    </div>
                    <div class="col-sm-6">
                      <ul class="list-vitri">
                        <h3>BỆNH VIỆN</h3>
                        <li>BV Quận 11 </li>
                        <li>BV Trưng Vương</li>
                        <li>BV Tân Phú</li>
                      </ul>
                    </div>
                    <div class="col-sm-6">
                      <ul class="list-vitri">
                        <h3>TT VĂN HÓA -GIẢI TRÍ</h3>
                        <li>TTVH Đầm Sen</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="overview animatedParent animateOnce">
          <div class="container-fluid">
            <div class="row">
              <div class="circle-content bounceInUp delay-750 animated">
                <h2 class="special">Thiết kế hiện đại</h2>
                <div class="box-content text-center">
                  <p>Tại căn hộ Đầm Sen Tower, mỗi tòa nhà trong dự án đều có mặt thoáng. Các tòa nhà được thiết kế góc cạnh tạo hình như những cánh quạt gió khổng lồ mang đến gió tự nhiên cho mọi căn hộ. Nhờ thiết kế độc đáo này mà gần 100% các căn hộ của dự án đều là các căn góc có 2 mặt thoáng. Và mọi phòng trong căn hộ đều có cửa sổ, logia để đón ánh sáng và gió tự nhiên, đảm bảo căn hộ luôn ngập tràn nắng, gió tự nhiên.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="scale animatedParent animateOnce">
          <div class="container">
            <div class="row noi-dung">
              <div class="col-md-4">
                <h2 class="special bounceInDown delay-750 animated">Quy mô dự án </h2>
                <div class="row box-content">
                  <div class="col-sm-6 fadeInLeft delay-500 animated slow">
                    <ul class="list-quymo list-quymo1"><img class="img-responsive icon-quymo" src="<?php bloginfo('stylesheet_directory') ?>/images/location.png" alt="icon quy mô">
                      <li><b>Vị trí</b>                                    13A Tống Văn Trân, Phường 5, Quận 11</li><img class="img-responsive icon-quymo" src="<?php bloginfo('stylesheet_directory') ?>/images/ico-3.png" alt="icon quy mô">
                      <li><b>Diện tích đất</b>                                    4,828.8 m<sup>2</sup></li><img class="img-responsive icon-quymo" src="<?php bloginfo('stylesheet_directory') ?>/images/ico-5.png" alt="icon quy mô">
                      <li><b>Quy mô</b>                                    02 block căn hộ, cao 13 tầng và 2 tầng hầm</li><img class="img-responsive icon-quymo" src="<?php bloginfo('stylesheet_directory') ?>/images/ico-7.png" alt="icon quy mô">
                      <li><b>Số lượng căn hộ Đầm Sen Tower</b> 613 căn hộ<br>   Diện tích từ 50–75 m<sup>2</sup></li>
                    </ul>
                  </div>
                  <div class="col-md-6 fadeInRight delay-500 animated slow">
                    <ul class="list-quymo list-quymo2"><img class="img-responsive icon-quymo" src="<?php bloginfo('stylesheet_directory') ?>/images/ico-2.png" alt="icon quy mô">
                      <li><b>Pháp lý</b>                                    Đã có giấy phép xây dựng, sở hữu vĩnh viễn</li><img class="img-responsive icon-quymo" src="<?php bloginfo('stylesheet_directory') ?>/images/ico-4.png" alt="icon quy mô">
                      <li><b>Mật độ xây dựng</b>                                    35%</li><img class="img-responsive icon-quymo" src="<?php bloginfo('stylesheet_directory') ?>/images/ico-6.png" alt="icon quy mô">
                      <li><b>Loại hình</b>                                    Căn hộ thương mại</li><img class="img-responsive icon-quymo" src="<?php bloginfo('stylesheet_directory') ?>/images/ico-8.png" alt="icon quy mô">
                      <li><b>Tình trạng căn hộ khi nhận nhà</b>                                    Hoàn thiện cơ bản (tường, trần, sàn…)</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-8 pull-right bounceInUp delay-750 animated"><img class="img-responsive images" src="<?php bloginfo('stylesheet_directory') ?>/images/img_quymo.png" alt=""></div>
            </div>
          </div>
        </section>
        <section class="utility animatedParent animateOnce">
          <ul class="bx-slider">
            <li data-title="Luxury Apartment">
              <div class="main-img" style="background-image: url(<?php bloginfo('stylesheet_directory') ?>/images/gallery_1.jpg);"></div>
            </li>
            <li data-title="Luxury Apartment">
              <div class="main-img" style="background-image: url(<?php bloginfo('stylesheet_directory') ?>/images/gallery_2.jpg);"></div>
            </li>
            <li data-title="Luxury Apartment">
              <div class="main-img" style="background-image: url(<?php bloginfo('stylesheet_directory') ?>/images/gallery_3.jpg);"></div>
            </li>
            <li data-title="Luxury Apartment">
              <div class="main-img" style="background-image: url(<?php bloginfo('stylesheet_directory') ?>/images/gallery_1.jpg);"></div>
            </li>
            <li data-title="Luxury Apartment">
              <div class="main-img" style="background-image: url(<?php bloginfo('stylesheet_directory') ?>/images/gallery_2.jpg);"></div>
            </li>
            <li data-title="Luxury Apartment">
              <div class="main-img" style="background-image: url(<?php bloginfo('stylesheet_directory') ?>/images/gallery_3.jpg);"></div>
            </li>
          </ul>
          <div class="control">
            <div class="next-prev"><span class="prev"></span></div>
            <div class="pager">01 / 03</div>
            <div class="next-prev"><span class="next"></span></div>
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="circle-content fadeInLeft delay-500 animated">
                <h2 class="special">Tiện ích hoàn hảo</h2>
                <div class="box-content text-center">
                  <p>Đơn giản nhưng độc đáo, hiện đại và hài hòa, căn hộ Đầm Sen Tower cung cấp đầy đủ mọi tện ích nội khu phục vụ tối đa nhu cầu sống cho cộng đồng cư dân văn minh, hiện đại: Hồ bơi, spa thân thiện hay phòng gym, khu trò chơi khám phá kỹ năng vận động, màu sắc và sáng tạo của con trẻ…</p>
                  <p>- Phục vụ mọi nhu cầu cư dân: Công viên, hồ bơi, nhà trẻ Gym, Spa, dịch vụ tiện lợi, mua sắm,…</p>
                  <p>- Tận hưởng mọi tiện ích hàng đầu tại Q.11, Q.10, Q.Tân Phú, Q.Bình Tân, Q.Tân Bình khi sở hữu căn hộ Đầm Sen Tower</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="noithat animatedParent animateOnce">
          <div class="container">
            <div class="row">
              <div class="col-md-5 noi-dung fadeInLeft delay-500 animated">
                <h2 class="special">Nội thất cao cấp</h2>
                <div class="box-content">
                  <p>Căn hộ Đầm Sen Tower “Hạnh phúc trong tầm tay” của CIENCO 557 . Không gian nội thất căn hộ tại Đầm Sen Tower được thiết kế hợp lý phong cách Singapore, các phòng chức năng phù hợp với các khe thoáng, cửa sổ, lô gia nhằm tận hưởng ánh sáng và lưu thông không khi tự nhiên..</p>
                  <p>Thanh khoản tốt, dễ mua, dễ bán và dễ cho thuê. Xây dựng và bàn giao đúng tiến độ, nhận sổ hồng chỉ trong vòng hơn 1 năm sau khi nhận nhà.</p>
                  <ul>
                    <li>
                      Sống thư thái trong căn hộ view Đầm Sen - 
                      Đầm Sen Tower
                    </li>
                    <li>Sống tận hưởng, nhiều tiện ích đẳng cấp tại căn hộ Đầm Sen Tower</li>
                    <li>Không còn căng thẳng lo âu khi mọi thứ được trang bị đầy đủ bên trong căn hộ ầm sen tower</li>
                  </ul>
                </div>
              </div>
              <div class="col-md-7 fadeInRight delay-500 animated">
                <div class="slider-noithat">
                  <ul class="bx-slider">
                    <li data-title="Luxury Apartment">
                      <div class="main-img" style="background-image: url(<?php bloginfo('stylesheet_directory') ?>/images/img_noithat.png);"></div>
                    </li>
                    <li data-title="Luxury Apartment">
                      <div class="main-img" style="background-image: url(<?php bloginfo('stylesheet_directory') ?>/images/img_noithat3.png);"></div>
                    </li>
                    <li data-title="Luxury Apartment">
                      <div class="main-img" style="background-image: url(<?php bloginfo('stylesheet_directory') ?>/images/img_noithat4.png);"></div>
                    </li>
                  </ul>
                  <div class="control">
                    <div class="next-prev"><span class="prev"></span></div>
                    <div class="pager">01 / 03</div>
                    <div class="next-prev"><span class="next"></span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="doitac animatedParent animateOnce">
          <div class="container">
            <div class="noi-dung">
              <h2 class="special text-center fadeIn delay-750 animated">Chủ đầu tư & phát triển dự án</h2><a class="fadeIn delay-750 animated" href="#"><img src="<?php bloginfo('stylesheet_directory') ?>/images/logo_cienco.png" alt="Cienco 5"></a>
              <div class="box-content fadeInUp delay-750 animated">
                <p><a href="https://damsentower.co/chu-dau-tu-cienco-557/">Chủ đầu tư </a> của căn hộ Đầm Sen Tower chính là công ty Cổ phần Đầu tư và Xây dựng Công trình 557, đây là đơn vị thành viên của Tổng công ty Xây dựng Công trình Giao thông 5 – Bộ Giao Thông Vận Tải hoạt động trên các lĩnh vực: Tư vấn và đầu tư xây dựng công trình giao thông, thủy điện, thủy lợi, xây dựng cơ sở hạ tầng khu dân cư, kinh doanh bất động sản v.v ….</p>
                <p>Sự thành công bền vững của Tổng công ty Xây dựng Công trình Giao thông 5 đã chỉ đạo và dẫn dắt Công ty Cổ phần Đầu tư và Xây dựng Công trình 557 (Cienco 557) sớm bước vào hội nhập không chỉ thi công ngành nghề truyền thống cầu & đường mà kết hợp đầu tư vào lĩnh vực địa ốc, xây dựng và khai thác chung cư cao tầng và những lãnh vực khác.</p>
                <p>Với tiêu chí góp phần vào sự phát triển của đất nước, từ lúc được thành lập đến nay, Công ty 557 luôn luôn cố gắng tạo ra những công trình có chất lượng cao cho xã hội và đặt quyền lợi của khách hàng lên hàng đầu, là điều kiện tiên quyết để Công ty phát  triển nền móng bền vững trong tương lai: Cienco557 – NỀN TẢNG TƯƠNG LAI.</p>
                <p>Đồng hành cùng sự phát triển của 557 là tập thể các nhà quản lý năng động, đội ngũ cán bộ công nhân viên lành nghề, chuyên nghiệp, có nhiều kinh nghiệm, nhiệt huyết và tận tâm với công việc, cộng với sự mở rộng quan hệ hợp tác đầu tư trên nhiều phương diện. Công ty Cổ phần Đầu tư và Xây dựng Công trình 557 luôn luôn đảm bảo tiến độ thi công và chất lượng công trình mà Công ty đảm nhiệm cũng như các dịch vụ, sản phẩm luôn mang đến cho Khách hàng sự hài lòng và tin cậy nhất. Tiêu biểu là các dự án đã được hoàn thành trước đây như: ToKy Tower, Auco Tower và tiếp theo chắc chắn sẽ là Đầm Sen Tower.</p>
              </div>
            </div>
          </div>
        </section>
      </main>

	

<?php
get_footer();

