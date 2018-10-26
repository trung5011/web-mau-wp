<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package damsen
 */

?>

	</div><!-- #content -->

	      <script>
        $(document).ready(function (e) {

        var bienmax = $('#page-home .bx-wrapper');
        var bien = $('#page-home .bx-slider li');
        $(bien).each(function(){
        var kq = $(this).find("div.main-img").attr("style");
        if (kq == "background-image: url(/assets/uploads/myfiles/images/Slide/PHOICANHDEM.jpg);") {
        $(bienmax).next().css('right', '10%').css('left', 'unset');
        }
        else {
        $(bienmax).next().css('left', '10%').css('right', 'unset');
        }
        })
        });
      </script><a class="btn-res" href="#"><img class="img-responsive" src="<?php bloginfo('stylesheet_directory') ?>/images/register.svg" alt="Alternate Text"></a>
      <section class="contact animatedParent animateOnce" id="section-contact">
        <div class="container">
          <div class="noi-dung bounceInUp delay-750 animated">
            <p class="text-center">Đăng ký để được tư vấn và nhận thông tin mới nhất về dự án Đầm Sen Tower</p>
            <div class="form-contact" id="frmContact">
               <?php get_template_part('template-default/form','contact'); ?> 
            </div>
          </div>
          <div class="row coppy-right">
            <div class="col-sm-5 col-md-4">
              <p>© 2018 Đầm Sen Tower. All Rights Reserved.</p>
            </div>
            <div class="col-sm-3 col-md-4 text-center icon-footer"><a href="https://facebook.com/damsentower1
"><i class="fa fa-facebook"></i></a><a href="https://plus.google.com/u/0/117223717509939304769
"><i class="fa fa-google-plus"></i></a><a href="#"><i class="fa fa-youtube"></i></a><a href="https://twitter.com/sen_tower
"><i class="fa fa-twitter"></i></a></div>
            <div class="col-sm-4 col-md-4">
              <p class="pull-right"><i class="fas fa-map-marked"></i>     Địa chỉ dự án: 13A Tống Văn Trân, P5, Quận 11.</p>
            </div>
          </div>
        </div>
      </section>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
