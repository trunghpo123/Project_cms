<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-hinh8">
    <div class="container footer-1">
        <div class="row row-footer-1">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 column">
                <span class="title">Latest</span>
                <div class="is-divider small"></div>
                <ul class="product-list">
                    <li>
                        <a href="#">
                            <img src="images/hinh8-1.jpeg" alt="hinh1">
                            <span class="product-title">On1 Jersey UNIF-2</span>
                        </a>
                        <span class="product-price">$39,00</span>
                    </li>
                </ul>
                <ul class="product-list">
                    <li>
                        <a href="#">
                            <img src="images/hinh8-2.jpeg" alt="hinh2">
                            <span class="product-title">Osaka Entry Tee Superdry 12</span>
                        </a>
                        <div class="star-rating">
                            <span class="rating">
                                <!-- <strong class="fa fa-star rating">4.00</strong> -->
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star"></strong>
                            </span>
                        </div>
                        <span class="product-price">$29,00</span>
                    </li>
                </ul>
                <ul class="product-list">
                    <li>
                        <a href="#">
                            <img src="images/hinh8-3.jpeg" alt="hinh3">
                            <span class="product-title">All Star Canvas Hi Converse</span>
                        </a>
                        <div class="star-rating">
                            <span class="rating">
                                <!-- <strong class="fa fa-star rating">4.00</strong> -->
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                            </span>
                        </div>
                        <span class="product-price">$29,00</span>
                    </li>
                </ul>
                <ul class="product-list" id="product">
                    <li>
                        <a href="#">
                            <img src="images/hinh8-4.jpeg" alt="hinh4">
                            <span class="product-title">Fluro Big Pullover Designers Remix</span>
                        </a>
                        <div class="star-rating">
                            <span class="rating">
                                <!-- <strong class="fa fa-star rating">4.00</strong> -->
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                            </span>
                        </div>
                        <span class="product-price">$49,00</span>
                    </li>
                </ul>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 column">
                <span class="title">Best Selling</span>
                <div class="is-divider small"></div>
                <ul class="product-list">
                    <li>
                        <a href="#">
                            <img src="images/hinh8-5.jpeg" alt="hinh5">
                            <span class="product-title">Daisy Bag Sonia by Sonia Rykiel</span>
                        </a>
                        <div class="star-rating">
                            <span class="rating">
                                <!-- <strong class="fa fa-star rating">4.00</strong> -->
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star"></strong>
                            </span>
                        </div>
                        <span class="product-price">$2.999,00</span>
                    </li>
                </ul>
                <ul class="product-list">
                    <li>
                        <a href="#">
                            <img src="images/hinh8-1.jpeg" alt="hinh1">
                            <span class="product-title">On1 Jersey UNIF</span>
                        </a>
                        <div class="star-rating">
                            <span class="rating">
                                <!-- <strong class="fa fa-star rating">4.00</strong> -->
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star"></strong>
                            </span>
                        </div>
                        <span class="product-price">$39,00</span>
                    </li>
                </ul>
                <ul class="product-list">
                    <li>
                        <a href="#">
                            <img src="images/hinh8-6.jpeg" alt="hinh1">
                            <span class="product-title">Beyond Top NLY Trend</span>
                        </a>
                        <div class="star-rating">
                            <span class="rating">
                                <!-- <strong class="fa fa-star rating">4.00</strong> -->
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star"></strong>
                            </span>
                        </div>
                        <span class="product-price">$9,90</span>
                    </li>
                </ul>
                <ul class="product-list" id="product">
                    <li>
                        <a href="#">
                            <img src="images/hinh8-7.jpeg" alt="hinh1">
                            <span class="product-title">Harissa O-Neck Sweat</span>
                        </a>
                        <div class="star-rating">
                            <span class="rating">
                                <!-- <strong class="fa fa-star rating">4.00</strong> -->
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star"></strong>
                            </span>
                        </div>
                        <span class="product-price">$101,00</span>
                    </li>
                </ul>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 column">
                <span class="title">Featured</span>
                <div class="is-divider small"></div>
                <ul class="product-list">
                    <li>
                        <a href="#">
                            <img src="images/hinh8-2.jpeg" alt="hinh2">
                            <span class="product-title">Osaka Entry Tee Superdry 12</span>
                        </a>
                        <div class="star-rating">
                            <span class="rating">
                                <!-- <strong class="fa fa-star rating">4.00</strong> -->
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star"></strong>
                            </span>
                        </div>
                        <span class="product-price">$29,00</span>
                    </li>
                </ul>
                <ul class="product-list">
                    <li>
                        <a href="#">
                            <img src="images/hinh8-3.jpeg" alt="hinh3">
                            <span class="product-title">All Star Canvas Hi Converse</span>
                        </a>
                        <div class="star-rating">
                            <span class="rating">
                                <!-- <strong class="fa fa-star rating">4.00</strong> -->
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                            </span>
                        </div>
                        <span class="product-price">$29,00</span>
                    </li>
                </ul>
                <ul class="product-list">
                    <li>
                        <a href="#">
                            <img src="images/hinh8-4.jpeg" alt="hinh4">
                            <span class="product-title">Fluro Big Pullover Designers Remix</span>
                        </a>
                        <div class="star-rating">
                            <span class="rating">
                                <!-- <strong class="fa fa-star rating">4.00</strong> -->
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                            </span>
                        </div>
                        <span class="product-price">$49,00</span>
                    </li>
                </ul>
                <ul class="product-list" id="product">
                    <li>
                        <a href="#">
                            <img src="images/hinh8-8.jpeg" alt="hinh4">
                            <span class="product-title">Varanise CN Tee Hilfiger Denim</span>
                        </a>
                        <div class="star-rating">
                            <span class="rating">
                                <!-- <strong class="fa fa-star rating">4.00</strong> -->
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                            </span>
                        </div>
                        <span class="product-price">$15,00</span>
                    </li>
                </ul>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 column">
                <span class="title">Top Rated Products</span>
                <div class="is-divider small"></div>
                <ul class="product-list">
                    <li>
                        <a href="#">
                            <img src="images/hinh8-1.jpeg" alt="hinh1">
                            <span class="product-title">On1 Jersey UNIF</span>
                        </a>
                        <div class="star-rating">
                            <span class="rating">
                                <!-- <strong class="fa fa-star rating">4.00</strong> -->
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                            </span>
                        </div>
                        <span class="product-price">$39.00</span>
                    </li>
                </ul>
                <ul class="product-list">
                    <li>
                        <a href="#">
                            <img src="images/hinh8-9.jpeg" alt="hinh1">
                            <span class="product-title">Pima SS O-Neck NOOS  Selected Homme</span>
                        </a>
                        <div class="star-rating">
                            <span class="rating">
                                <!-- <strong class="fa fa-star rating">4.00</strong> -->
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                            </span>
                        </div>
                        <span class="product-price">$29.00</span>
                    </li>
                </ul>
                <ul class="product-list" id="product">
                    <li>
                        <a href="#">
                            <img src="images/hinh8-10.jpg" alt="hinh1">
                            <span class="product-title">Ninja Silhouette</span>
                        </a>
                        <div class="star-rating">
                            <span class="rating">
                                <!-- <strong class="fa fa-star rating">4.00</strong> -->
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                                <strong class="fa fa-star checked"></strong>
                            </span>
                        </div>
                        <span class="product-price">$20.00</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>