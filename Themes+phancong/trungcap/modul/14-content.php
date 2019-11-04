<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-14">
    <div class="banner-inner">
        <div class="banner" style="background-image: url(<?php echo(get_template_directory_uri()); ?>/images/14/banner.jpeg)">
        </div>
        <div class="overlay"></div>
        <div class="text-inner">
            <h1 class="lead">About Us</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat….</p>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-12">
                    <p class="text"><strong>Lorem ipsum</strong> dolor sit amet, consectetur adipiscing elit. Morbi fermentum justo vitae convallis varius. Nulla tristique risus ut justo pulvinar mattis. Phasellus aliquet egestas mauris in venenatis. Nulla tristique risus ut justo pulvinar mattis. Phasellus aliquet egestas mauris in venenatis.</p>
                    <div class="is-divider1"></div> 
                </div>
                <div class="col-md-3">
                    <div class="col-inner">
                        <div class="box-image">
                            <img src="<?php echo(get_template_directory_uri()); ?>/images/14/img1.jpg" alt="">
                        </div>
                        <div class="box-text">
                            <div class="box-text-inner">
                                <h4 class="uppercase">
                                    <span class="person-name">Troy Gray</span><br>
                                    <span class="person-title">CEO / Founder</span>
                                </h4>
                                <div class="social-icons">
                                    <div class="icon-inner">
                                        <a href="#" class="icon"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="icon"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="icon"><i class="fa fa-envelope"></i></a>
                                        <a href="#" class="icon"><i class="fa fa-pinterest"></i></a>
                                        <a href="#" class="icon"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="col-inner">
                        <div class="box-image">
                            <img src="<?php echo(get_template_directory_uri()); ?>/images/14/img2.jpg" alt="">
                        </div>
                        <div class="box-text">
                            <div class="box-text-inner">
                                <h4 class="uppercase">
                                    <span class="person-name">Richy Lace</span><br>
                                    <span class="person-title">Marketing Director</span>
                                </h4>
                                <div class="social-icons">
                                    <div class="icon-inner">
                                        <a href="#" class="icon"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="icon"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="icon"><i class="fa fa-envelope"></i></a>
                                        <a href="#" class="icon"><i class="fa fa-pinterest"></i></a>
                                        <a href="#" class="icon"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="col-inner">
                        <div class="box-image">
                            <img src="<?php echo(get_template_directory_uri()); ?>/images/14/img3.jpg" alt="">
                        </div>
                        <div class="box-text">
                            <div class="box-text-inner">
                                <h4 class="uppercase">
                                    <span class="person-name">Jane Gray</span><br>
                                    <span class="person-title">Public Relations</span>
                                </h4>
                                <div class="social-icons">
                                    <div class="icon-inner">
                                        <a href="#" class="icon"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="icon"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="icon"><i class="fa fa-envelope"></i></a>
                                        <a href="#" class="icon"><i class="fa fa-pinterest"></i></a>
                                        <a href="#" class="icon"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="col-inner">
                        <div class="box-image">
                            <img src="<?php echo(get_template_directory_uri()); ?>/images/14/img4.jpg" alt="">
                        </div>
                        <div class="box-text">
                            <div class="box-text-inner">
                                <h4 class="uppercase">
                                    <span class="person-name">July Wood</span><br>
                                    <span class="person-title">Customer Support</span>
                                </h4>
                                <div class="social-icons">
                                <div class="social-icons">
                                    <div class="icon-inner">
                                        <a href="#" class="icon"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="icon"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="icon"><i class="fa fa-envelope"></i></a>
                                        <a href="#" class="icon"><i class="fa fa-pinterest"></i></a>
                                        <a href="#" class="icon"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
    

