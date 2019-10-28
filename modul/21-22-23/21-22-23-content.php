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
            <div class="backround-img">
                <div class="load"></div>
                <div class="img-text">
                    <div class="fill"></div>
                    <div class="bog-text">
                        <h1 class="uppercase"><strong>OUR BLOG</strong></h1>
                        <p class="lead">Change This header to anything by using the UX Builder. You can also remove it. It's only visible on the blog homepage.</p>
                        <div class="bog-icon">
                            <a class="button" href="#"><i class="fa fa-facebook-f"></i></a>
                            <a class="button" href="#"><i class="fa fa-star"></i></a>
                            <a class="button" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="button" href="#"><i class="fa fa-envelope"></i></a>
                            <a class="button" href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    
</div>
<div class="type-12">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="post-new">
                    <header class="entry-header">
                        <div class="title-blog1">
                            <h6><a href="#">Uncategorized</a></h6>
                            <h2><a href="#">Just another post with A Gallery</a></h2>
                            <div class="entry-divider"></div>
                            <div class="entry-meta">
                                <span class="posted-on">
                                    Posted on 
                                    <a href="#">
                                        <time class="entry-date published">
                                            October 13, 2015
                                        </time>
                                        <time class="updated">
                                            May 10, 2016
                                        </time>
                                    </a>
                                </span>
                                <span class="byline">
                                    by
                                    <span class="meta-author vcard">
                                        <a class="url">
                                            Tommy Vedvik
                                        </a>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="img-blog1">
                            <a href="#">
                                <img src="../21-22-23/images/blog-header2-1000x625.jpg">
                            </a>
                            <div class="date-img">
                                <span class="post-date-day">13</span><br>
		                <span class="post-date-month">Oct</span>
                            </div>
                        </div>
                    </header>
                    <div class="conten-1">
                        <div class="conten-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed vulputate massa. Fusce ante magna, iaculis ut purus ut, facilisis ultrices nibh. Quisque commodo nunc eget tortor dapibus, et tristique magna convallis. Phasellus egestas nunc eu venenatis vehicula. Phasellus et magna nulla. Proin ante nunc, mollis a lectus ac, volutpat placerat ante. Vestibulum sit amet […]</p>
                            <div class="text-center1">
                                <a href="#">
                                    Continue reading 
                                    <span class="meta-nav">→</span>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <footer class="footer-post">
                        <span class="cat-links">
			Posted in 
                        <a href="#">
                            Uncategorized
                        </a>
                        </span>
                        <span class="comments-link">
                            <a href="#">
                                <strong>
                                    3
                                </strong>
                                Comments
                            </a>
                        </span>
                    </footer>
                </div>
                <div class="post-new">
                    <header class="entry-header">
                        <div class="title-blog1">
                            <h6><a href="#">Uncategorized</a></h6>
                            <h2><a href="#">Just another post with A Gallery</a></h2>
                            <div class="entry-divider"></div>
                            <div class="entry-meta">
                                <span class="posted-on">
                                    Posted on 
                                    <a href="#">
                                        <time class="entry-date published">
                                            October 13, 2015
                                        </time>
                                        <time class="updated">
                                            May 10, 2016
                                        </time>
                                    </a>
                                </span>
                                <span class="byline">
                                    by
                                    <span class="meta-author vcard">
                                        <a class="url">
                                            Tommy Vedvik
                                        </a>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="img-blog1">
                            <a href="#">
                                <img src="../21-22-23/images/blog-header31-1000x625.jpg">
                            </a>
                            <div class="date-img">
                                <span class="post-date-day">13</span><br>
		                <span class="post-date-month">Oct</span>
                            </div>
                        </div>
                    </header>
                    <div class="conten-1">
                        <div class="conten-text">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus Typi non habent claritatem insitam; est […]
		</p>
                            <div class="text-center1">
                                <a href="#">
                                    Continue reading 
                                    <span class="meta-nav">→</span>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <footer class="footer-post">
                        <span class="cat-links">
			Posted in 
                        <a href="#">
                            Uncategorized
                        </a>
                        </span>
                        <span class="comments-link">
                            <a href="#">
                                <strong>
                                    3
                                </strong>
                                Comments
                            </a>
                        </span>
                    </footer>
                </div>
                <div class="post-new">
                    <header class="entry-header">
                        <div class="title-blog1">
                            <h6><a href="#">Uncategorized</a></h6>
                            <h2><a href="#">Just another post with A Gallery</a></h2>
                            <div class="entry-divider"></div>
                            <div class="entry-meta">
                                <span class="posted-on">
                                    Posted on 
                                    <a href="#">
                                        <time class="entry-date published">
                                            October 13, 2015
                                        </time>
                                        <time class="updated">
                                            May 10, 2016
                                        </time>
                                    </a>
                                </span>
                                <span class="byline">
                                    by
                                    <span class="meta-author vcard">
                                        <a class="url">
                                            Tommy Vedvik
                                        </a>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="img-blog1">
                            <a href="#">
                                <img src="../21-22-23/images/12738.jpg">
                            </a>
                            <div class="date-img">
                                <span class="post-date-day">13</span><br>
		                <span class="post-date-month">Oct</span>
                            </div>
                        </div>
                    </header>
                    <div class="conten-1">
                        <div class="conten-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed vulputate massa. Fusce ante magna, iaculis ut purus ut, facilisis ultrices nibh. Quisque commodo nunc eget tortor dapibus, et tristique magna convallis. Phasellus egestas nunc eu venenatis vehicula. Phasellus et magna nulla. Proin ante nunc, mollis a lectus ac, volutpat placerat ante. Vestibulum sit amet […]</p>
                            <div class="text-center1">
                                <a href="#">
                                    Continue reading 
                                    <span class="meta-nav">→</span>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <footer class="footer-post">
                        <span class="cat-links">
			Posted in 
                        <a href="#">
                            Uncategorized
                        </a>
                        </span>
                        <span class="comments-link">
                            <a href="#">
                                <strong>
                                    3
                                </strong>
                                Comments
                            </a>
                        </span>
                    </footer>
                </div>
                <div class="post-new">
                    <header class="entry-header">
                        <div class="title-blog1">
                            <h6><a href="#">Uncategorized</a></h6>
                            <h2><a href="#">Just another post with A Gallery</a></h2>
                            <div class="entry-divider"></div>
                            <div class="entry-meta">
                                <span class="posted-on">
                                    Posted on 
                                    <a href="#">
                                        <time class="entry-date published">
                                            October 13, 2015
                                        </time>
                                        <time class="updated">
                                            May 10, 2016
                                        </time>
                                    </a>
                                </span>
                                <span class="byline">
                                    by
                                    <span class="meta-author vcard">
                                        <a class="url">
                                            Tommy Vedvik
                                        </a>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="img-blog1">
                            <a href="#">
                                <img src="../21-22-23/images/breezi_placeit-1000x666.jpg">
                            </a>
                            <div class="date-img">
                                <span class="post-date-day">13</span><br>
		                <span class="post-date-month">Oct</span>
                            </div>
                        </div>
                    </header>
                    <div class="conten-1">
                        <div class="conten-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed vulputate massa. Fusce ante magna, iaculis ut purus ut, facilisis ultrices nibh. Quisque commodo nunc eget tortor dapibus, et tristique magna convallis. Phasellus egestas nunc eu venenatis vehicula. Phasellus et magna nulla. Proin ante nunc, mollis a lectus ac, volutpat placerat ante. Vestibulum sit amet […]</p>
                            <div class="text-center1">
                                <a href="#">
                                    Continue reading 
                                    <span class="meta-nav">→</span>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <footer class="footer-post">
                        <span class="cat-links">
			Posted in 
                        <a href="#">
                            Uncategorized
                        </a>
                        </span>
                        <span class="comments-link">
                            <a href="#">
                                <strong>
                                    3
                                </strong>
                                Comments
                            </a>
                        </span>
                    </footer>
                </div>
                <div class="post-new">
                    <header class="entry-header">
                        <div class="title-blog1">
                            <h6><a href="#">Uncategorized</a></h6>
                            <h2><a href="#">Just another post with A Gallery</a></h2>
                            <div class="entry-divider"></div>
                            <div class="entry-meta">
                                <span class="posted-on">
                                    Posted on 
                                    <a href="#">
                                        <time class="entry-date published">
                                            October 13, 2015
                                        </time>
                                        <time class="updated">
                                            May 10, 2016
                                        </time>
                                    </a>
                                </span>
                                <span class="byline">
                                    by
                                    <span class="meta-author vcard">
                                        <a class="url">
                                            Tommy Vedvik
                                        </a>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="img-blog1">
                            <a href="#">
                                <img src="../21-22-23/images/Untitled-3-1000x649.jpg">
                            </a>
                            <div class="date-img">
                                <span class="post-date-day">13</span><br>
		                <span class="post-date-month">Oct</span>
                            </div>
                        </div>
                    </header>
                    <div class="conten-1">
                        <div class="conten-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed vulputate massa. Fusce ante magna, iaculis ut purus ut, facilisis ultrices nibh. Quisque commodo nunc eget tortor dapibus, et tristique magna convallis. Phasellus egestas nunc eu venenatis vehicula. Phasellus et magna nulla. Proin ante nunc, mollis a lectus ac, volutpat placerat ante. Vestibulum sit amet […]</p>
                            <div class="text-center1">
                                <a href="#">
                                    Continue reading 
                                    <span class="meta-nav">→</span>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <footer class="footer-post">
                        <span class="cat-links">
			Posted in 
                        <a href="#">
                            Uncategorized
                        </a>
                        </span>
                        <span class="comments-link">
                            <a href="#">
                                <strong>
                                    3
                                </strong>
                                Comments
                            </a>
                        </span>
                    </footer>
                </div>
            </div>
            <div class="col-md-3">
                <div class="sidebar-blog">
                    <div class="blog-about">
                        <span class="widget-title ">
                            <span>About</span> 
                        </span>
                        <div class="is-divider"></div>
                        <div class="textwidget">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.
                        </div>
                    </div>
                    <div class="blog-about2">
                        <span class="widget-title ">
                            <span>Latest Posts</span> 
                        </span>
                        <div class="is-divider"></div>
                        <ul class="cot">
                            <li>
                                <div class="wid-box">
                                    <div class="container-box">
                                        <div class="date-box">
                                            <div class="badge-inner">
                                                <span class="post-date">19</span>
                                                <br>
                                                <span class="post-dateth">Nov</span>
                                                
                                            </div>
                                            
                                        </div>
                                        <div class="container-title">
                                        <a href="#">Welcome to Flatsome</a>
                                        <span>
                                            <a href="#"><strong>1</strong> Comment</a>
                                        </span>
                                    </div>
                                    </div>
                                    
                                </div>
                            </li>
                            <li>
                                <div class="wid-box">
                                    <div class="container-box">
                                        <div class="date-box">
                                            <div class="badge-inner">
                                                <span class="post-date">13</span>
                                                <br>
                                                <span class="post-dateth">Oct</span>
                                                
                                            </div>
                                            
                                        </div>
                                        <div class="container-title">
                                        <a href="#">Just another post with A Gallery</a>
                                        <span>
                                            <a href="#"><strong>3</strong> Comment</a>
                                        </span>
                                    </div>
                                    </div>
                                    
                                </div>
                            </li>
                            <li>
                                <div class="wid-box">
                                    <div class="container-box">
                                        <div class="date-box">
                                            <div class="badge-inner">
                                                <span class="post-date">13</span>
                                                <br>
                                                <span class="post-dateth">Oct</span>
                                                
                                            </div>
                                            
                                        </div>
                                        <div class="container-title">
                                        <a href="#">A Simple Blog Post</a>
                                        <span>
                                            <a href="#"><strong>2</strong> Comment</a>
                                        </span>
                                    </div>
                                    </div>
                                    
                                </div>
                            </li>
                            <li>
                                <div class="wid-box">
                                    <div class="container-box">
                                        <div class="date-box">
                                            <div class="badge-inner">
                                                <span class="post-date">01</span>
                                                <br>
                                                <span class="post-dateth">Jav</span>
                                                
                                            </div>
                                            
                                        </div>
                                        <div class="container-title">
                                        <a href="#">A Video Blog Post</a>
                                        <span>
                                            <a href="#"><strong>1</strong> Comment</a>
                                        </span>
                                    </div>
                                    </div>
                                    
                                </div>
                            </li>
                            <li class="hang">
                                <div class="wid-box">
                                    <div class="container-box">
                                        <div class="date-box">
                                            <div class="badge-inner">
                                                <span class="post-date">30</span>
                                                <br>
                                                <span class="post-dateth">Dec</span>
                                                
                                            </div>
                                            
                                        </div>
                                        <div class="container-title">
                                        <a href="#">Just a cool blog post with Images</a>
                                        <span>
                                            <a href="#"><strong>5</strong> Comment</a>
                                        </span>
                                    </div>
                                    </div>
                                    
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="blog-about3">
                        <span class="widget-title ">
                            <span>Recent Comments</span> 
                        </span>
                        <div class="is-divider"></div>
                        <ul class="cot2">
                            <li>
                                <span class="comment-author-link">admin</span>
                                 on 
                                 <a href="#">Just another post with A Gallery</a>
                            </li>
                            <li>
                                <span class="comment-author-link">admin</span>
                                 on 
                                 <a href="#">Just another post with A Gallery</a>
                            </li>
                            <li>
                                <span class="comment-author-link">admin</span>
                                 on 
                                 <a href="#">Beyond Top NLY Trend</a>
                            </li>
                            <li>
                                <span class="comment-author-link">admin</span>
                                 on 
                                 <a href="#">Happy Ninja</a>
                            </li>
                            <li class="hang2">
                                <span class="comment-author-link">admin</span>
                                 on 
                                 <a href="#">Beyond Top NLY Trend</a>
                            </li>
                        </ul>
                    </div>
                    <div class="blog-about4">
                        <span class="widget-title ">
                            <span>Tag Cloud</span> 
                        </span>
                        <div class="is-divider"></div>
                        <div class="tagclould">
                            <a href="#">brooklyn</a>
                            <a href="#">fashion</a>
                            <a href="#">style</a>
                            <a href="#">women</a>
                        </div>
                    </div>
                    <div class="blog-about5">
                        <span class="widget-title ">
                            <span>Categories</span> 
                        </span>
                        <div class="is-divider"></div>
                        <ul class="cot3">
                            <li><a href="#">Style</a> (5)</li>
                            <li class="hang3"><a href="#">Uncategorized</a>(3)</li>
                        </ul>
                    </div>
                    <div class="blog-about6">
                        <span class="widget-title ">
                            <span>Archives</span> 
                        </span>
                        <div class="is-divider"></div>
                        <ul class="cot4">
                            <li><a href="#">November 2015</a> (1)</li>
                            <li><a href="#">October 2015</a> (2)</li>
                            <li><a href="#">January 2014</a> (1)</li>
                            <li><a href="#">December 2013</a> (2)</li>
                            <li class="hang4"><a href="#">August 2013</a>(2)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>