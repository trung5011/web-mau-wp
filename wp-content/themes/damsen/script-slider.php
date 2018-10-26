
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/slick.css" type="text/css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/slick-theme.css" type="text/css">
<style>
    .section-project .slick-prev:hover, .section-project .slick-prev:focus, .section-project .slick-next:hover, .section-project .slick-next:focus{
        background:#00DAF2;
    }
</style>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/js/slick.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var link = $('ul.list-canho2 li a').attr('href');

        $('ul.list-canho2 li a').each(function() {

            $(this).click(function() {
                if ($(this).attr('href') == "/can-ho-360/canho-360.html") {

                    $(this).attr('href', "/canho-360.html");
                } else {
                    //alert("2");
                }
            })
        })

        if ($('.section-project .slider-slick').length > 0 && !$('.section-project .slider-slick .item iframe').length == 0) {

            $('.section-project .slider-slick .item #divContent').slick({
                dots: true,
                infinite: true,

                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1400,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true
                        }
                    }, {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    }, {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        } else {
            $(".slider-slick").css('display', 'none');
        }
    });
</script>
