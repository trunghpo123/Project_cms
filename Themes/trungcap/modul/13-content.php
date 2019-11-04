<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-13">
    <div class="container">
        <div class="content">
            <div class="page-title"> 
                <div class="page-title-innner flex-row">
                    <div class="flex-col flex-grow">
                        <h1 class="entry-title uppercase mb-0">Portfolio</h1>
                    </div>
                </div>    
            </div>    
            <div class="col-6 col-xs-6 col-sm-6 col-md-6 col-lg-6 div-nav">
                <nav class="navbar navbar-default" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->          
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active" id="all"><a href="#" data-filter="[data-id]"><span>All</span></a></li>
                            <li><a href="#  " data-filter="[data-id*='Design']"><span>Design</span></a></li>
                            <li><a href="#" data-filter="[data-id*='Lookbook']"><span>Lookbook</span></a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>
            <div class="row grids">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 grid-col" data-id="Lookbook">
                    <div class="col-inner">
                        <a href="#" class="plain ">
                            <div class="portfolio-box box has-hover">
                                <div class="box-image">
                                    <div class="image">
                                        <img class="img-responsive img" src="<?php echo(get_template_directory_uri()); ?>/images/13/hinh13-1.jpg">                                                
                                    </div>
                                </div><!-- box-image -->
                                <div class="box-text text-center">
                                    <div class="box-text-inner">
                                        <h6 class="uppercase portfolio-box-title">Flat T-Shirt Company</h6>
                                        <p class="uppercase portfolio-box-category is-xsmall op-6">
                                            <span class="show-on-hover">Lookbook</span>
                                        </p>
                                    </div><!-- box-text-inner -->
                                </div><!-- box-text -->
                            </div><!-- .box  -->
                         </a>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 grid-col" data-id="Design">
                    <div class="col-inner">
                        <a href="#" class="plain ">
                            <div class="portfolio-box box has-hover">
                                <div class="box-image">
                                    <div class="image">
                                        <img class="img-responsive img" src="<?php echo(get_template_directory_uri()); ?>/images/13/hinh13-2.jpg">                                                
                                    </div>
                                </div><!-- box-image -->
                                <div class="box-text text-center">
                                    <div class="box-text-inner">
                                        <h6 class="uppercase portfolio-box-title">Magazine</h6>
                                        <p class="uppercase portfolio-box-category is-xsmall op-6">
                                            <span class="show-on-hover">Design</span>
                                        </p>
                                    </div><!-- box-text-inner -->
                                </div><!-- box-text -->
                            </div><!-- .box  -->
                         </a>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 grid-col" data-id="Design">
                    <div class="col-inner">
                        <a href="#" class="plain ">
                            <div class="portfolio-box box has-hover">
                                <div class="box-image">
                                    <div class="image">
                                        <img class="img-responsive img" src="<?php echo(get_template_directory_uri()); ?>/images/13/hinh13-3.jpg">                                                
                                    </div>
                                </div><!-- box-image -->
                                <div class="box-text text-center">
                                    <div class="box-text-inner">
                                        <h6 class="uppercase portfolio-box-title">Flatsome Poster Print</h6>
                                        <p class="uppercase portfolio-box-category is-xsmall op-6">
                                            <span class="show-on-hover">Design</span>
                                        </p>
                                    </div><!-- box-text-inner -->
                                </div><!-- box-text -->
                            </div><!-- .box  -->
                         </a>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 grid-col" data-id="Design">
                    <div class="col-inner">
                        <a href="#" class="plain ">
                            <div class="portfolio-box box has-hover">
                                <div class="box-image">
                                    <div class="image">
                                        <img class="img-responsive img" src="<?php echo(get_template_directory_uri()); ?>/images/13/hinh13-4.jpg">                                                
                                    </div>
                                </div><!-- box-image -->
                                <div class="box-text text-center">
                                    <div class="box-text-inner">
                                        <h6 class="uppercase portfolio-box-title">Portfolio typography</h6>
                                        <p class="uppercase portfolio-box-category is-xsmall op-6">
                                            <span class="show-on-hover">Design</span>
                                        </p>
                                    </div><!-- box-text-inner -->
                                </div><!-- box-text -->
                            </div><!-- .box  -->
                         </a>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 grid-col" data-id="Design">
                    <div class="col-inner">
                        <a href="#" class="plain ">
                            <div class="portfolio-box box has-hover">
                                <div class="box-image">
                                    <div class="image">
                                        <img class="img-responsive img" src="<?php echo(get_template_directory_uri()); ?>/images/13/hinh13-5.jpg">                                                
                                    </div>
                                </div><!-- box-image -->
                                <div class="box-text text-center">
                                    <div class="box-text-inner">
                                        <h6 class="uppercase portfolio-box-title">Awesome Pencil Poster</h6>
                                        <p class="uppercase portfolio-box-category is-xsmall op-6">
                                            <span class="show-on-hover">Design</span>
                                        </p>
                                    </div><!-- box-text-inner -->
                                </div><!-- box-text -->
                            </div><!-- .box  -->
                         </a>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 grid-col" data-id="Design">
                    <div class="col-inner">
                        <a href="#" class="plain ">
                            <div class="portfolio-box box has-hover">
                                <div class="box-image">
                                    <div class="image">
                                        <img class="img-responsive img" src="<?php echo(get_template_directory_uri()); ?>/images/13/hinh13-6.jpg">                                                
                                    </div>
                                </div><!-- box-image -->
                                <div class="box-text text-center">
                                    <div class="box-text-inner">
                                        <h6 class="uppercase portfolio-box-title">FL3 Print Package</h6>
                                        <p class="uppercase portfolio-box-category is-xsmall op-6">
                                            <span class="show-on-hover">Design</span>
                                        </p>
                                    </div><!-- box-text-inner -->
                                </div><!-- box-text -->
                            </div><!-- .box  -->
                         </a>
                    </div>  
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 grid-col" data-id="Design">
                    <div class="col-inner">
                        <a href="#" class="plain ">
                            <div class="portfolio-box box has-hover">
                                <div class="box-image">
                                    <div class="image">
                                        <img class="img-responsive img" src="<?php echo(get_template_directory_uri()); ?>/images/13/hinh13-7.jpg">                                                
                                    </div>
                                </div><!-- box-image -->
                                <div class="box-text text-center">
                                    <div class="box-text-inner">
                                        <h6 class="uppercase portfolio-box-title">Another Print Package</h6>
                                        <p class="uppercase portfolio-box-category is-xsmall op-6">
                                            <span class="show-on-hover">Design</span>
                                        </p>
                                    </div><!-- box-text-inner -->
                                </div><!-- box-text -->
                            </div><!-- .box  -->
                         </a>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 grid-col" data-id="Lookbook">
                    <div class="col-inner">
                        <a href="#" class="plain ">
                            <div class="portfolio-box box has-hover">
                                <div class="box-image">
                                    <div class="image">
                                        <img class="img-responsive img" src="<?php echo(get_template_directory_uri()); ?>/images/13/hinh13-8.jpg">                                                
                                    </div>
                                </div><!-- box-image -->
                                <div class="box-text text-center">
                                    <div class="box-text-inner">
                                        <h6 class="uppercase portfolio-box-title">Lookbook Summer</h6>
                                        <p class="uppercase portfolio-box-category is-xsmall op-6">
                                            <span class="show-on-hover">Lookbook</span>
                                        </p>
                                    </div><!-- box-text-inner -->
                                </div><!-- box-text -->
                            </div><!-- .box  -->
                         </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


