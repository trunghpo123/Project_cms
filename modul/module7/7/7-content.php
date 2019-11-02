<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-7">       
    <div class="wp-title">
                <div class="container">
                    <div class="title-box">
                        <h1 class="h1-title"><span class="section-title-main"><i class="fa fa-instagram"></i>Follow on instagram</span></h1>
                    </div>
                </div>
            </div>
            <div class="wp-list-img">
                <div id="slider-img" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="wp-item0img">
                            <a href="#">
                                <div class="box-img h_1">
                                    <img src="images/img1.jpg" alt="">
                                </div>
                                <div class="box-caption">
                                    <div class="caption">Switching from bikinishoots in the blinding sun to examination weeks in school 📚 Knowledge is power they say💁&zwj;♀️</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wp-item0img">
                            <a href="#">
                                <div class="box-img h_1">
                                    <img src="images/img2.jpg" alt="">
                                </div>
                                <div class="box-caption">
                                    <div class="caption">Switching from bikinishoots in the blinding sun to examination weeks in school 📚 Knowledge is power they say💁&zwj;♀️</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wp-item0img">
                            <a href="#">
                                <div class="box-img h_1">
                                    <img src="images/img3.jpg" alt="">
                                </div>
                                <div class="box-caption">
                                    <div class="caption">Switching from bikinishoots in the blinding sun to examination weeks in school 📚 Knowledge is power they say💁&zwj;♀️</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wp-item0img">
                            <a href="#">
                                <div class="box-img h_1">
                                    <img src="images/img4.jpg" alt="">
                                </div>
                                <div class="box-caption">
                                    <div class="caption">Switching from bikinishoots in the blinding sun to examination weeks in school 📚 Knowledge is power they say💁&zwj;♀️</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wp-item0img">
                            <a href="#">
                                <div class="box-img h_1">
                                    <img src="images/img5.jpg" alt="">
                                </div>
                                <div class="box-caption">
                                    <div class="caption">Switching from bikinishoots in the blinding sun to examination weeks in school 📚 Knowledge is power they say💁&zwj;♀️</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wp-item0img">
                            <a href="#">
                                <div class="box-img h_1">
                                    <img src="images/img6.jpg" alt="">
                                </div>
                                <div class="box-caption">
                                    <div class="caption">Switching from bikinishoots in the blinding sun to examination weeks in school 📚 Knowledge is power they say💁&zwj;♀️</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wp-item0img">
                            <a href="#">
                                <div class="box-img h_1">
                                    <img src="images/img7.jpg" alt="">
                                </div>
                                <div class="box-caption">
                                    <div class="caption">Switching from bikinishoots in the blinding sun to examination weeks in school 📚 Knowledge is power they say💁&zwj;♀️</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#slider-img').owlCarousel({
                    loop:true,
                    margin:0,
                    dots:false,
                    nav:true,
                    autoplay:false,
                    autoplayTimeout:6000,
                    autoplaySpeed:1500,
                    smartSpeed:1200,
                    responsive:{
                        0:{
                            items:2
                        },
                        600:{
                            items:4
                        },
                        1000:{
                            items:6
                        }
                    }
                })
            </script>

            <script>
                var h_1 = $('.h_1 img').width();
                $('.h_1 img').height( 1.000 * parseInt(h_1));
            </script>

</div>

    

