<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package damsen
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no"><!-- ////////////// Mobile title color ////////////// -->
    <meta name="theme-color" content="#000000">
    <meta name="msapplication-navbutton-color" content="#000000">
    <meta name="apple-mobile-web-app-status-bar-style" content="#000000">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;amp;subset=vietnamese" rel="stylesheet">
    <meta name="Đầm Sen Tower" content="Khu căn hộ trung tâm quận 11">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- Meta verification-->
    <meta name="google-site-verification" content="VhfbPndGW-UftEvWql2Nwt7F1F5KBgd3lMcGgjn4Ovc">
    <meta name="msvalidate.01" content="F7679394C660249FBA58732D6100A65A">
    <meta name="yandex-verification" content="bc82adfacdd74cbf">
    
<!-- ////////////// CSS Include ////////////// -->

    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="https://damsentower.co/wp-content/themes/damsen/images/logo_damsen.ico" sizes="32x32">
    <link rel="icon" type="image/png" href="https://damsentower.co/wp-content/themes/damsen/images/logo_damsen.ico" sizes="16x16">
    <link rel="manifest" href="./favicon/manifest.json">
    <link rel="mask-icon" href="./favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="https://damsentower.co/wp-content/themes/damsen/images/logo_damsen.ico">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="msapplication-TileImage" content="./favicon/mstile-144x144.png">
    <meta name="msapplication-config" content="./favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="<?php bloginfo('stylesheet_directory') ?>/css/thuvien.css" rel='stylesheet' type='text/css' />
	<link href="<?php bloginfo('stylesheet_directory') ?>/css/main.css" rel='stylesheet' type='text/css' />
	<link href="<?php bloginfo('stylesheet_directory') ?>/css/custom.css" rel='stylesheet' type='text/css' />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'damsen' ); ?></a>

	<header class="animatedParent animateOnce" id="header">
      <div class="logo fadeInLeft delay-250 animated slow"><a href="http://damsentower.co"></a></div>
      <div class="open-menu button-menu fixed fadeInRight delay-250 animated slow" data-id="#main-menu">
        <div class="container-hamberger">
          <div class="hamberger"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></div>
        </div>
      </div>
      <div class="nav-side-menu" id="main-menu">
        <nav class="menu-container">
          <div class="phone-contact"><img class="btnphone" src=" https://damsentower.co/wp-content/themes/damsen/images/ico_phone.png" alt="0938 678 018"><a href="tel:0938 678 018"><strong>0938 678 018</strong></a></div>
          <div class="top-menu">
            <div class="close-menu button-close pull-right" data-id="#main-menu"></div>
          </div>
          <div class="scroll-responsive">
            <ul class="list-item">
              <li class="dropdown li-big test animated delay-200 fadeInDownShort go"><a href="#">GIỚI THIỆU </a><span class="fa fa-chevron-down toggle-dropdown" data-menu="#menuAbout"></span>
                <ul class="dropdown uldropdown" id="menuAbout">
                  <li><i class="fa fa-angle-right"> </i><a title="Chủ đầu tư" href="/chu-dau-tu">Chủ đầu tư</a></li>
                  <li><i class="fa fa-angle-right"> </i><a title="Tổng quan dự án" href="/tong-quan">Tổng quan dự án</a></li>
                </ul>
              </li>
              <li class="li-big"><a href="/vi-tri">Vị trí</a></li>
              <li class="li-big"><a href="/mat-bang">Mặt bằng</a></li>
              <li class="li-big"><a href="/tien-ich">Tiện ích</a></li>
              <li class="li-big"><a href="/nha-mau">Nhà mẫu</a></li>
              <li class="li-big"><a href="/tin-tuc-tong-hop">Tin tức</a>
              </li>
              <li class="li-big"><a href="/lien-he">Liên hệ</a></li>
            </ul>
          </div>
        </nav>
        <div class="bg-nenden"></div>
      </div>
    </header><!-- ////////////// End Header ////////////// -->

	<div id="content" class="site-content">
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-101278675-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-101278675-3');
</script>
