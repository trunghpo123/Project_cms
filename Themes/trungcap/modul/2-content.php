<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="image1" style="background-image: url(<?php echo(get_template_directory_uri()); ?>/images/2/img1.jpg);">             
                        <p class="lead"><span>Add any text here…</span></p>
                        <h2 class="uppercase"><span>NEW ARRIVALS ON THE SHOP</span></h2>
                        <div class="left-divider"></div> 
                        <div class="click clearfix">
                            <a href='#' class="browse">
                                <span>Browse</span>
                            </a>        
                            <a href='#' class="shopNow">
                                <span>Shop now</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image2" style="background-image: url(<?php echo(get_template_directory_uri()); ?>/images/2/img2.jpg);">
                        <h2 class="note">ADD ANY CONTENT HERE</h2>   
                        <div class="is-divider"></div> 
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="totalimg">
                        <div class="imgtop">    
                            <div class="image3" style="background-image: url(<?php echo(get_template_directory_uri()); ?>/images/2/img3.jpg);">
                                <h2 class="note">ADD ANY CONTENT HERE</h2>
                                <div class="is-divider"></div> 
                            </div>
                        </div>
                        <div class="imgbottom">
                            <div class="image4" style="background-image: url(<?php echo(get_template_directory_uri()); ?>/images/2/img4.jpg);">
                                <h2 class="note">ADD ANY CONTENT HERE</h2>
                                <div class="is-divider"></div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

