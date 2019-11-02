<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-2">       
    <div class="wp-banner-page">
        <div class="container">
            <div class="row flex-b">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="wp-banner-left">
                        <div class="wp-img">
                            <img src="images/img1.jpg" alt="">
                        </div>
                        <div class="wp-text">
                            <p class="lead alt-font"><span>Add any text here…</span></p>
                            <h2 class="uppercase"><span><strong>New arrivals on the shop</strong></span></h2>
                            <div class="wp-btn">
                                <a href="javascript:;" class="button primary is-outline is-larger"><span>Browse</span></a>
                                <a href="javascript:;" class="button primary is-larger"><span>Shop now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="wp-banner-right flex-b">
                        <div class="wp-banner2-1">
                            <div class="wp-img">
                                <img src="images/img2.jpg" alt="">
                            </div>
                            <div class="wp-text">
                                <a href="javascript:;">Add Any CONTENT here</a>
                            </div>
                        </div>
                        <div class="wp-banner2-2">
                            <div class="wp-item">
                                <div class="wp-img">
                                    <img src="images/img3.jpg" alt="">
                                </div>
                                <div class="wp-text">
                                    <a href="javascript:;">Add Any Headline here</a>
                                </div>
                            </div>
                            <div class="wp-item">
                                <div class="wp-img">
                                    <img src="images/img4.jpg" alt="">
                                </div>
                                <div class="wp-text">
                                    <a href="javascript:;">Add Any Headline here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .wp-banner-page .wp-banner-right {
        height: 100%;
    }
    .wp-banner-page .wp-banner-right .wp-banner2-1, .wp-banner-page .wp-banner-right .wp-banner2-2 {
        width: calc((100% - 20px)/2);
    }
    .wp-banner-page .wp-banner-right .wp-banner2-1 {
        margin-right: 20px;
        position: relative;
    }
    .wp-banner-page .wp-banner-right .wp-banner2-2 .wp-item {
        height: calc((100% - 20px)/2);
    }
    .wp-banner-page .wp-banner-right .wp-banner2-2 .wp-item:first-child {
        margin-bottom: 20px;
    }
    @media (min-width: 1024px) {
        .wp-banner-page .row.flex-b .col-md-6 {height: 580px;}
    }
</style>

    

