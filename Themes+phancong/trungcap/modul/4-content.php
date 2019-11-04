<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1105">
    <div class="container">
        <div class="featured">
            <span class="lineleft"></span>
            <div class="section-title">
                <h3>featured categories</h3>
            </div>
            <span class="lineright"></span>
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="col-md-3 box-while">
                    <!-- Hình 1 -->
                        <a href="#">
                        <img clas="lazy-active" src="<?php echo(get_template_directory_uri()); ?>/images/4/1.jpeg" alt="Bags">
                        <!-- box-image -->
                        <div class="box-text text-center">
                            <div class="box-text-inner">
                                <h5 class="uppercase header-title">Bags</h5>
                                
                                <p class="is-xsmall uppercase count ">6 Products</p>
                            </div>
                            <!-- .box-text-inner -->
                        </div>
                        </a>
                    </div>
                    <div class="col-md-3 box-while">
                    <!-- Hình 2 -->
                        <a href="#">
                        <img clas="lazy-active" src="<?php echo(get_template_directory_uri()); ?>/images/4/2.jpg" alt="Booking">
                        <!-- box-image -->
                        <div class="box-text text-center">
                            <div class="box-text-inner">
                                <h5 class="uppercase header-title">Booking</h5>
                                
                                <p class="is-xsmall uppercase count ">6 Products</p>
                            </div>
                            <!-- .box-text-inner -->
                        </div>
                        </a>
                    </div>
                    <div class="col-md-3 box-while">
                    <!-- Hình 3 -->
                        <a href="#">
                        <img clas="lazy-active" src="<?php echo(get_template_directory_uri()); ?>/images/4/3.jpg" alt="Clothing">
                        <!-- box-image -->
                        <div class="box-text text-center">
                            <div class="box-text-inner">
                                <h5 class="uppercase header-title">Clothing</h5>
                                
                                <p class="is-xsmall uppercase count ">12 Products</p>
                            </div>
                            <!-- .box-text-inner -->
                        </div>
                        </a>
                    </div>
                    <div class="col-md-3 box-while">
                    <!-- Hình 4 -->
                        <a href="#">
                        <img clas="lazy-active" src="<?php echo(get_template_directory_uri()); ?>/images/4/4.jpeg" alt="Men">
                        <!-- box-image -->
                        <div class="box-text text-center">
                            <div class="box-text-inner">
                                <h5 class="uppercase header-title">Men</h5>
                                
                                <p class="is-xsmall uppercase count ">9 Products</p>
                            </div>
                            <!-- .box-text-inner -->
                        </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                <div class="col-md-3 box-while">
                <!-- Hình 5 -->
                        <a href="#">
                        <img clas="lazy-active" src="<?php echo(get_template_directory_uri()); ?>/images/4/5.jpg" alt="Music">
                        <!-- box-image -->
                        <div class="box-text text-center">
                            <div class="box-text-inner">
                                <h5 class="uppercase header-title">Music</h5>
                                
                                <p class="is-xsmall uppercase count ">6 Products</p>
                            </div>
                            <!-- .box-text-inner -->
                        </div>
                        </a>
                    </div>
                    <div class="col-md-3 box-while">
                    <!-- Hình 6 -->
                        <a href="#">
                        <img clas="lazy-active" src="<?php echo(get_template_directory_uri()); ?>/images/4/6.jpg" alt="Posters">
                        <!-- box-image -->
                        <div class="box-text text-center">
                            <div class="box-text-inner">
                                <h5 class="uppercase header-title">Posters</h5>
                                
                                <p class="is-xsmall uppercase count ">5 Products</p>
                            </div>
                            <!-- .box-text-inner -->
                        </div>
                        </a>
                    </div>
                    <div class="col-md-3 box-while">
                    <!-- Hình 7 -->
                        <a href="#">
                        <img clas="lazy-active" src="<?php echo(get_template_directory_uri()); ?>/images/4/7.jpg" alt="Shoes">
                        <!-- box-image -->
                        <div class="box-text text-center">
                            <div class="box-text-inner">
                                <h5 class="uppercase header-title">Shoes</h5>
                                
                                <p class="is-xsmall uppercase count ">7 Products</p>
                            </div>
                            <!-- .box-text-inner -->
                        </div>
                        </a>
                    </div>
                    <div class="col-md-3 box-while">
                    <!-- Hình 8 -->
                        <a href="#">
                        <img clas="lazy-active" src="<?php echo(get_template_directory_uri()); ?>/images/4/8.jpeg" alt="Women">
                        <!-- box-image -->
                        <div class="box-text text-center">
                            <div class="box-text-inner">
                                <h5 class="uppercase header-title">Women</h5>
                                
                                <p class="is-xsmall uppercase count ">8 Products</p>
                            </div>
                            <!-- .box-text-inner -->
                        </div>
                        </a>
                    </div>
                </div>
            </div>

            <button class="flickity-button swiper-button-next" type="button">
                
            </button>
            <button class="flickity-button swiper-button-prev" type="button">
                
            </button>
            
        </div>
    </div>
</div>
<script>
    var swiper = new Swiper('.swiper-container', {
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      loop: true, 
    });
  </script>
    

