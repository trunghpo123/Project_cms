<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-11">
    
        <div class="row">
            <nav id="fixNav">
                <ul>
                  <li><a class="dropdown-toggle" href="#">Trang chủ</a></li>
                  <li><a class="dropdown-toggle" href="#">Shop</a></li>
                  
                  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page <span class="caret"></span></a>
                      <div class="col-md-3">
                        <ul class="dropdown-menu">
                            <div class="col-md-4">
                                <li class="cot-menu"><a href="#">Page 1-1</a></li>
                                <li class="cot-menu"><a href="#">Page 1-2</a></li>
                                <li class="cot-menu"><a href="#">Page 1-3</a></li>
                            </div>
                            <div class="col-md-4">
                                <li class="cot-menu"><a href="#">Page 1-1</a></li>
                                <li class="cot-menu"><a href="#">Page 1-2</a></li>
                                <li class="cot-menu"><a href="#">Page 1-3</a></li>
                            </div>
                            <div class="col-md-4">
                                <li class="cot-menu"><a href="#">Page 1-1</a></li>
                                <li class="cot-menu"><a href="#">Page 1-2</a></li>
                                <li class="cot-menu"><a href="#">Page 1-3</a></li>
                            </div>
                            
                        </ul>
                      </div>
                      
                  </li>
                  <li><a class="dropdown-toggle" href="#">JavaScript</a></li>
                  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="cot-menu"><a href="#">Page 1-1</a></li>
                        <li class="cot-menu"><a href="#">Page 1-2</a></li>
                        <li class="cot-menu"><a href="#">Page 1-3</a></li>
                    </ul>
                  </li>
                </ul>
          </nav>
          
        </div>
    
</div>
