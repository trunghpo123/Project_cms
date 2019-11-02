<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-2">       
    <div class="banner-inner">
                <div class="banner"></div>
                <div class="overlay"></div>
                <div class="text-inner">
                    <h1 class="lead">About Us</h1>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat….</p>
                </div>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row clearfix mar-top30">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="col-inner">
                                <p class="text"><strong>Lorem ipsum</strong> dolor sit amet, consectetur adipiscing elit. Morbi fermentum justo vitae convallis varius. <br> Nulla tristique risus ut justo pulvinar mattis. Phasellus aliquet egestas mauris in venenatis. Nulla <br> tristique risus ut justo pulvinar mattis. Phasellus aliquet egestas mauris in venenatis.</p>
                                <div class="is-divider"></div> 
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="col-inner2">
                                <div class="box-image">
                                    <img src="images/img1.jpg" alt="">
                                </div>
                                <div class="box-text">
                                    <div class="box-text-inner">
                                        <h4 class="uppercase">
                                            <span class="person-name">Troy Gray</span><br>
                                            <span class="person-title">CEO / Founder</span>
                                        </h4>
                                        <div class="social-icons">
                                            <div class="icon-inner">
                                                <a href="#" class="a-fb icon"><i class="fa fa-facebook-f"></i></a>
                                                <a href="#" class="a-tw icon"><i class="fa fa-twitter"></i></a>
                                                <a href="#" class="a-env icon"><i class="fa fa-envelope"></i></a>
                                                <a href="#" class="a-pin icon"><i class="fa fa-pinterest"></i></a>
                                                <a href="#" class="a-lin icon"><i class="fa fa-linkedin"></i></a>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="col-inner2">
                                <div class="box-image">
                                    <img src="images/img2.jpg" alt="">
                                </div>
                                <div class="box-text">
                                    <div class="box-text-inner">
                                        <h4 class="uppercase">
                                            <span class="person-name">Richy Lace</span><br>
                                            <span class="person-title">Marketing Director</span>
                                        </h4>
                                        <div class="social-icons">
                                            <div class="icon-inner">
                                                <a href="#" class="a-fb icon"><i class="fa fa-facebook-f"></i></a>
                                                <a href="#" class="a-tw icon"><i class="fa fa-twitter"></i></a>
                                                <a href="#" class="a-env icon"><i class="fa fa-envelope"></i></a>
                                                <a href="#" class="a-pin icon"><i class="fa fa-pinterest"></i></a>
                                                <a href="#" class="a-lin icon"><i class="fa fa-linkedin"></i></a>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="col-inner2">
                                <div class="box-image">
                                    <img src="images/img3.jpg" alt="">
                                </div>
                                <div class="box-text">
                                    <div class="box-text-inner">
                                        <h4 class="uppercase">
                                            <span class="person-name">Jane Gray</span><br>
                                            <span class="person-title">Public Relations</span>
                                        </h4>
                                        <div class="social-icons">
                                            <div class="icon-inner">
                                                <a href="#" class="a-fb icon"><i class="fa fa-facebook-f"></i></a>
                                                <a href="#" class="a-tw icon"><i class="fa fa-twitter"></i></a>
                                                <a href="#" class="a-env icon"><i class="fa fa-envelope"></i></a>
                                                <a href="#" class="a-pin icon"><i class="fa fa-pinterest"></i></a>
                                                <a href="#" class="a-lin icon"><i class="fa fa-linkedin"></i></a>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="col-inner2">
                                <div class="box-image">
                                    <img src="images/img4.jpg" alt="">
                                </div>
                                <div class="box-text">
                                    <div class="box-text-inner">
                                        <h4 class="uppercase">
                                            <span class="person-name">July Wood</span><br>
                                            <span class="person-title">Customer Support</span>
                                        </h4>
                                        <div class="social-icons">
                                            <div class="icon-inner">
                                                <a href="#" class="a-fb icon"><i class="fa fa-facebook-f"></i></a>
                                                <a href="#" class="a-tw icon"><i class="fa fa-twitter"></i></a>
                                                <a href="#" class="a-env icon"><i class="fa fa-envelope"></i></a>
                                                <a href="#" class="a-pin icon"><i class="fa fa-pinterest"></i></a>
                                                <a href="#" class="a-lin icon"><i class="fa fa-linkedin"></i></a>
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

    

