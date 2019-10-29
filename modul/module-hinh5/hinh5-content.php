<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-hinh5">
    <div class="content">
        <div class="banner">
        </div>
        <div class="banner-layers container">
            <div class="text dark">
                <div class="text-inner text-center">
                    <h3 class="uppercase">
                        <strong>Signup for Newsletter</strong>
                    </h3>
                    <p class="lead">Lorem ipsum dolor sit amet, <br>consectetuer adipiscing elit, sed diam nonumm.</p>
                    <div role="form" class="wpcf7" id="wpcf7 email" lang="en-US" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <form action="#" method="post" class="wpcf7-form form-email" novalidate="novalidate">
                            <!-- <div style="display: none;">
                                <input type="hidden" name="_wpcf7" value="7042">
                                <input type="hidden" name="_wpcf7_version" value="5.0.5">
                                <input type="hidden" name="_wpcf7_locale" value="en_US">
                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f7042-p2138-o1">
                                <input type="hidden" name="_wpcf7_container_post" value="2138">
                            </div> -->
                            <div class="flex-row form-flat medium-flex-wrap">
                                <div class="flex-col flex-grow">
                                    <span class="wpcf7-form-control-wrap your-email">
                                        <input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your Email (required)">
                                    </span>
                                </div>
                                <div class="flex-col ml-half">
                                    <input type="submit" value="Sign Up" class="wpcf7-form-control wpcf7-submit button"><span class="ajax-loader"></span>
                                </div>
                            </div>
                            <!-- <div class="wpcf7-response-output wpcf7-display-none"></div>
                            <p style="display: none !important"><span class="wpcf7-form-control-wrap referer-page"> -->
                            <!-- <input type="hidden" name="referer-page" value="https://flatsome3.uxthemes.com/" class="wpcf7-form-control wpcf7-text referer-page" aria-invalid="false"></span></p> -->
                            <!-- Chimpmail extension by Renzo Johnson -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
