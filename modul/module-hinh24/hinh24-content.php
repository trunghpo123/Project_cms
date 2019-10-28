<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-24">
    <article id="post-3097" class="post-3097 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized">
        <div class="article-inner ">
            <header class="entry-header">
                <div class="entry-header-text entry-header-text-top text-center">
                    <h6 class="entry-category is-xsmall">
                        <a href="#" rel="category tag">Uncategorized</a>
                    </h6>

                    <h2 class="entry-title">
                        <a href="#" rel="bookmark" class="plain">A Simple Blog Post</a>
                    </h2>
                    <div class="entry-divider is-divider small"></div>

                    <div class="entry-meta uppercase is-xsmall">
                        <span class="posted-on">Posted on 
                            <a href="#" rel="bookmark">
                                <time class="entry-date published" datetime="2015-10-13T19:28:03+00:00">October 13, 2015</time>
                                <time class="updated" datetime="2016-02-02T18:06:09+00:00">February 2, 2016</time>
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
                    <a href="https://flatsome3.uxthemes.com/2015/10/13/a-simple-blog-post/">
                        <img class="img-responsive" src="./images/hinh24.jpg">
                    </a>
                    <div class="badge absolute top post-date badge-outline">
                        <div class="badge-inner">
                            <span class="post-date-day">13</span><br>
                            <span class="post-date-month is-small">Oct</span>
                        </div>
                    </div>			
                </div><!-- .entry-image -->
            </header><!-- post-header -->
            <div class="entry-content">
                <div class="entry-summary">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus Typi non habent claritatem insitam; est […]
                    </p>
                    <div class="text-center">
                        <a class="more-link button primary is-outline is-smaller" href="#">Continue reading <span class="meta-nav">→</span></a>
                    </div>
                </div><!-- .entry-summary -->

            </div><!-- .entry-content -->		
            <footer class="entry-meta clearfix">
                <span class="cat-links">Posted in 
                    <a href="#" rel="category tag">Uncategorized</a>		
                </span>

    
                <span class="comments-link pull-right">
                    <a href="#"><strong>2</strong> Comments</a>
                </span>
            </footer><!-- .entry-meta -->
        </div><!-- .article-inner -->
    </article>
</div>


