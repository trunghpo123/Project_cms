<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-25">
    <article id="post-3097" class="post-3097 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized">
        <div class="article-inner ">
            <header class="entry-header">
                <div class="entry-header-text entry-header-text-top text-center">
                    <h6 class="entry-category is-xsmall">
                        <a href="#" rel="category tag">Style</a>
                    </h6>

                    <h2 class="entry-title">
                        <a href="#" rel="bookmark" class="plain">Just a cool blog post with Images</a>
                    </h2>
                    <div class="entry-divider is-divider small"></div>

                    <div class="entry-meta uppercase is-xsmall">
                        <span class="posted-on">Posted on 
                            <a href="#" rel="bookmark">
                                <time class="entry-date published" datetime="2013-12-30T16:50:40+00:00">December 30, 2013</time>
                                <time class="updated" datetime="2016-08-08T13:23:12+00:00">August 8, 2016</time>
                            </a>
                        </span>
                        <span class="byline"> by 
                            <span class="meta-author vcard">
                                <a class="url fn n" href="#">Tommy Vedvik</a>
                            </span>
                        </span>	
                    </div><!-- .entry-meta -->
                </div><!-- .entry-header -->

                <div class="entry-image relative">
                    <a href="#">
                        <img class="img-responsive" src="./images/hinh25.jpg">
                    </a>
                    <div class="badge absolute top post-date badge-outline">
                        <div class="badge-inner">
                            <span class="post-date-day">30</span><br>
                            <span class="post-date-month is-small">Dec</span>
                        </div>
                    </div>			
                </div><!-- .entry-image -->
            </header><!-- post-header -->
            <div class="entry-content">
                <div class="entry-summary">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed vulputate massa. Fusce ante magna, iaculis ut purus ut, facilisis ultrices nibh. Quisque commodo nunc eget tortor dapibus, et tristique magna convallis. Phasellus egestas nunc eu venenatis vehicula. Phasellus et magna nulla. Proin ante nunc, mollis a lectus ac, volutpat placerat ante. Vestibulum sit amet […]
                    </p>
                    <div class="text-center">
                        <a class="more-link button primary is-outline is-smaller" href="#">Continue reading <span class="meta-nav">→</span></a>
                    </div>
                </div><!-- .entry-summary -->

            </div><!-- .entry-content -->		
            <footer class="entry-meta clearfix">
                <span class="cat-links">Posted in 
                    <a href="#" rel="category tag">Style</a>		
                </span>

                <span class="sep">&nbsp;|&nbsp;</span>

                <span class="tags-links">Tagged 
                    <a href="#" rel="tag">brooklyn</a>, 
                    <a href="#" rel="tag">fashion</a>, 
                    <a href="#" rel="tag">style</a>, 
                    <a href="#" rel="tag">women</a>		
                </span>
    
                <span class="comments-link pull-right">
                    <a href="#"><strong>5</strong> Comments</a>
                </span>
            </footer><!-- .entry-meta -->
        </div><!-- .article-inner -->
    </article>
    <ul class="page-numbers nav-pagination links text-center">
        <li>
            <span aria-current="page" class="page-number current">1</span>
        </li>
        <li>
            <a class="page-number" href="#">2</a>
        </li>
        <li>
            <a class="next page-number" href="#">
                <i class="fa fa-angle-right"></i>
            </a>
        </li>
    </ul>
</div>


