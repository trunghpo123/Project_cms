<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-11">
    <div class="container">
        <div class="row">
                    <div class="icon-menu">
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="#" id="trung2"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
                    <ul class="dropdown-menu " id="trung1" >
                    <li><a href="#">Action</a></li>
                    </ul>
                </div>
                            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
                </div>
            <div class="col-md-3" id="aaaa">
                <div class="shop-sidebar">
                    <div class="shop1">
                        <span class="side-title">Browse</span>
                        <div class="is-divider small"></div>
                        <ul>
                            <li class="btn-group" >
                                <a href="#">Bags</a>
                                <a href="#" id="trung3"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>

                                <ul class="dropdown-menu" >
                                  <li><a href="#">Action</a></li>
                                </ul>

                                
                            </li >
                            <li class="btn-group">
                                <a href="#">Booking</a>
                            </li>
                            <li class="btn-group">
                                <a href="#">Clothing</a>
                                <a href="#" id="trung3"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>

                                <ul class="dropdown-menu" >
                                  <li><a href="#">Action</a></li>
                                </ul>
                            </li>
                            <li class="btn-group">
                                <a href="#">Men</a>
                                <a href="#" id="trung3"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>

                                <ul class="dropdown-menu" >
                                  <li><a href="#">Action</a></li>
                                </ul>
                            </li>
                            <li class="btn-group">
                                <a href="#">Music</a>
                                <a href="#" id="trung3"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>

                                <ul class="dropdown-menu" >
                                  <li><a href="#">Action</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Posters</a>
                            </li>
                            <li>
                                <a href="#">Shoes</a>
                            </li>
                            <li>
                                <a href="#">Uncategorized</a>
                            </li>
                            <li class="btn-group">
                                <a href="#">Women</a>
                                <a href="#" id="trung3"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>

                                <ul class="dropdown-menu" >
                                  <li><a href="#">Action</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="shop2">
                        <span class="side-title">Filter by</span>
                        <div class="is-divider small"></div>
                        <ul>
                            <li>
                                <a href="#">Black</a>
                                <span class="count">(3)</span>
                            </li>
                            <li>
                                <a href="#">Blue</a>
                                <span class="count">(1)</span>
                            </li>
                            <li>
                                <a href="#">Green</a>
                                <span class="count">(2)</span>
                            </li>
                        </ul>
                    </div>
                    <div class="shop3">
                        <div data-role="page">
                            <div data-role="header">
                              <h1>Range Slider</h1>
                            </div>

                            <div data-role="main" class="ui-content">
                              <form method="post" action="/action_page_post.php">
                                <div data-role="rangeslider">
                                  <label for="price-min">Price:</label>
                                  <input type="range" name="price-min" id="price-min" value="200" min="0" max="1000">
                                  <label for="price-max">Price:</label>
                                  <input type="range" name="price-max" id="price-max" value="800" min="0" max="1000">
                                </div>
                                  <input type="submit" data-inline="true" value="Submit">
                                  <p>The range slider can be useful for allowing users to select a specific price range when browsing products.</p>
                                </form>
                            </div>
                          </div> 
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="shop-container">
                    <div class="col-md-4">
                        <a href="#">
                            <div class="product">
                                <div class="container1">
                                    <img class="ima" src="<?php echo(get_template_directory_uri()); ?>/images/hoodie_4_front-247x296.jpg" style="z-index: 998 ">
                                    <div class="overlay">
                                        <h5>Clothing</h5>
                                        <p>12 Products</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="product">
                                <div class="container1">
                                    <img class="ima" src="<?php echo(get_template_directory_uri()); ?>/images/589864-5295_1-247x296.jpeg" style="z-index: 998">
                                    <div class="overlay">
                                        <h5>Clothing</h5>
                                        <p>12 Products</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="product">
                                <div class="container1">
                                    <img class="ima" src="<?php echo(get_template_directory_uri()); ?>/images/602779-0083_1-247x296.jpeg" style="z-index: 998">
                                    <div class="overlay">
                                        <h5>Clothing</h5>
                                        <p>12 Products</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                
                
                    <div class="col-md-4">
                        <a href="#">
                            <div class="product">
                                <div class="container1">
                                    <img class="ima" src="<?php echo(get_template_directory_uri()); ?>/images/282259-0001_2-247x296.jpeg" style="z-index: 998">
                                    <div class="overlay">
                                        <h5>Clothing</h5>
                                        <p>12 Products</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="product">
                                <div class="container1">
                                    <img class="ima" src="<?php echo(get_template_directory_uri()); ?>/images/cd_5_angle-247x296.jpg" style="z-index: 998">
                                    <div class="overlay">
                                        <h5>Clothing</h5>
                                        <p>12 Products</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="product">
                                
                                    <div class="container1">
                                    <img class="ima" src="<?php echo(get_template_directory_uri()); ?>/images/poster_1_up-247x296.jpg" style="z-index: 998">
                                    <div class="overlay">
                                        <h5>Clothing</h5>
                                        <p>12 Products</p>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </a>
                    </div>
                    
                
                
                    <div class="col-md-4">
                        <a href="#">
                            <div class="product">
                               <div class="container1">
                                   <img class="ima" src="<?php echo(get_template_directory_uri()); ?>/images/217212-0001_2-247x296.jpg" style="z-index: 998">
                                    <div class="overlay">
                                        <h5>Clothing</h5>
                                        <p>12 Products</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="product">
                                
                                <div class="container1">
                                    <img class="ima" src="<?php echo(get_template_directory_uri()); ?>/images/poster_1_up-247x296.jpg" style="z-index: 998">
                                    <div class="overlay">
                                        <h5>Clothing</h5>
                                        <p>12 Products</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        
                    </div>
                    </div>
                    
                
                
            </div>
        </div>
    </div>
</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>