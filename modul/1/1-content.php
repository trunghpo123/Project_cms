<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-11">
    
        <div class="header-seach">
            <div id="trung44" class="col-md-4">
                <div class="seach">
                    <input type="search" id="woocommerce-product" class="search-field" placeholder="Search…" value="" name="s" autocomplete="off">
                </div>
                <button class="button-search">
                    <i class="fa fa-search"></i>
                </button>
            </div>
            <div class="col-md-4">
                <div class="logo-home">
                    <img src="./images/logo-light (1).png">
                </div>
            </div>
            <div id="trung44" class="col-md-4">
                <div class="cart-home">
                    <ul class="acc">
                        <li class="cartcout">
                            <a href="#">
                                <span>Login</span>
                            </a>
                        </li>
                        <li class="header-divider"></li>
                        <li>
                            <a href="#">
                                <span>Cart/$0,00</span>
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>  
    
</div>