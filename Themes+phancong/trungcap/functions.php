<?php
/**
 * khai báo giá trị
 * themes_url = lấy đường dẫn của thư mục core
 */

define('THEME_URL', get_stylesheet_directory() );

define('CORE',THEME_URL."/core");

/**
 * @ NHung file /core/init.php
 */
require_once (CORE."/init.php");
/**
 * thiet lap cieu rong noi dung
 */
if(!isset($content_width)){
    $content_width = 620;
}
/**
 * khai bao chuc nang cuar theme
 */
if(!function_exists('trungcap_theme_setup')){
    function trungcap_theme_setup(){
        $language_folder = THEME_URL .'/languages';
        load_theme_textdomain('trungcap', $language_folder);
        /*tu dong them link vao head*/
        add_theme_support('automatic-feed-links');
        /*theme post thumbnail*/
        add_theme_support('post-thumbnails');
        /*theme post Format*/
        add_theme_support('post-formats', array(
            'image',
            'video',
            'gallery',
            'quote',
            'link'
        ));
        add_theme_support('title-tag');
        
        $default_background = array(
            'default-color' => '#e8e8e8'
        );
        add_theme_support('custom-background', $default_background);
        
        register_nav_menu('primary-menu', __('Primary Menu', 'trungcap'));
        
        $sidebar = array(
            'name' => __('Main Sidebar', 'trungcap'),
            'id' => 'main-sidebar',
            'description' => __('Default sidebar'),
            'class' => 'main-sidebar',
            'before_title'=> '<h3 class="widgettitle">',
            'after_title' =>'</h3>'
            
        );
        register_sidebar($sidebar);
        
        
        
    }   
    add_action('init','trungcap_theme_setup');
    
}
/*-----
 * teamplate fun
 */
if(!function_exists('trungcap_header')){
    function trungcap_header(){?>
        <div class="site-name">
            <?php
                global $tp_options;
                if( $tp_options['logo-on'] == 0 ) :
            ?>
            <?php
                if(is_home()){
                    printf('<h1><a href="%1$s" title="%2$s">%3$s</a></h1>',
                    get_bloginfo('url'),
                    get_bloginfo('description'),
                    get_bloginfo('sitename'));
                } else {
                    printf('<h2><a href="%1$s" title="%2$s">%3$s</a></h2>',
                    get_bloginfo('url'),
                    get_bloginfo('description'),
                    get_bloginfo('sitename'));
                }
                
            ?>
            <?php
                                else :
                        ?>
                                <img src="<?php echo $tp_options['logo-image']['url']; ?>" />
                <?php endif; ?>
        </div>
<div class="site-description"><?php bloginfo('description');?></div><?php
    }
}
/**
 * thiet lap menu
 */
if(!function_exists('trungcap_menu')){
    function trungcap_menu($menu){
        $menu =array(
            'theme_location' => $menu,
            'container' => 'nav',
            'container_class' => $menu,
            'items_wrap' => '<ul id="%1$s" class="%2$s sf-menu">%3$s</ul1>'
        );
        wp_nav_menu($menu);
    }
}
/** phan trang
 
 */
if(!function_exists('trungcap_pagination')){
    function trungcap_pagination(){
        if($GLOBALS['wp_query']->max_num_pages < 2){
            return '';
        }?>
        <nav class="pagination" role="pavigation">
            <?php if (get_next_posts_link()) : ?>
            <div class="prev"><?php next_posts_link( __('Next...','trungcap'));?></div>
            <?php endif; ?>
            <?php if (get_previous_posts_link()) : ?>
            <div class="next"><?php previous_posts_link( __('...Prev','trungcap'));?></div>
            <?php endif; ?>
        </nav>
    <?php }
}
/** ham hien thij thumbnail
 * 
 */
if(!function_exists('trungcap_thumbnail')){
    function trungcap_thumbnail($size){
        if(!is_single() && has_post_thumbnail() && !post_password_required() || has_post_format('image')) : ?>
        <figure class="post-thumbnail"><?php the_post_thumbnail($size); ?></figure>
<?php endif; ?>
    <?php }
}
/**hien thi tieu de baif viet
 * 
 */
if(!function_exists('trungcap_entry_header')){
    function trungcap_entry_header(){?>
        <?php if (is_single()) :?>
        <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
        <?php else : ?>
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
            <?php endif;?>
        <?php }
}
/**
 * laays du lieu post
 *
 */
if(!function_exists('trungcap_entry_meta()')){
    function trungcap_entry_meta(){?>
        <?php if (!is_page() ) : ?>
        <div class="entry-meta">
            <?php
                printf( __('<span class="author"> Posted by %1$s ', 'trungcap'),
                get_the_author());
                printf( __('<span class="date-published"> at %1$s ', 'trungcap'),
                get_the_date());
                printf( __('<span class="category"> in %1$s ' , 'trungcap'),
                get_the_category_list( ',' ));
                if(comments_open()):
                    echo '<span class="meta-reply">';
                    comments_popup_link(
                            __('Leave a comment ','trungcap'),
                            __('One comment', 'trungcap'),
                            __('%comments'),
                            __('Read all comments','trungcap')
                            );
                            echo '</span>';
                endif;
            ?>
        </div>
        <?php endif; ?>
    <?php }
}
/**
 * trungcap_entry_content = hien thi noi dung post
 */
if(!function_exists('trungcap_entry_content')){
    function trungcap_entry_content(){
        if(!is_single() && !is_page()){
            the_excerpt();
        } else {
            the_content();
            
            //phan trang trong post
            $link_pages =array(
                'before' => __('<p>Page: |', 'trungcap'),
                'after' => '</p>',
                'nextpagelink'=> __('Next Page', 'trungcap'),
                'previouspagelink' => __('Previous Page', 'trungcap')
            );
            wp_link_pages($link_pages);
        }
    }
}
function trungcap_readmore(){
    return '<a class="read-more" href="'.get_permalink(get_the_ID()). '">'. __('[...Read Morel]', 'trungcap').'</a>';
}
add_filter('excerpt_more', 'trungcap_readmore');

/** hien thi tag
 * 
 */
if (!function_exists('trungcap_entry_tag')){
    function trungcap_entry_tag(){
        if (has_tag()) :
            echo '<div class="entry-tag">';
            printf( __('Tagged in %1$s', 'trungcap'), get_the_tag_list('',','));
            echo '</div>';
            
        endif;
    }
}


/** 
 * nhung style.css
 */
function trungcap_style(){
    wp_register_style('main-style', get_template_directory_uri() . "/style.css", 'all');
    wp_enqueue_style('main-style');
    //11-12
    wp_register_style('31-style', get_template_directory_uri() . "/css/11-12/bootstrap.min.css", 'all');
    wp_enqueue_style('31-style');
    wp_register_script('32-script', get_template_directory_uri() ."/css/11-12/bootstrap.min.js", array('jquery'));
    wp_enqueue_script('32-script');
    wp_register_script('33-script', get_template_directory_uri() ."/css/11-12/jquery/node_modules/jquery/dist/jquery.min.js", array('jquery'));
    wp_enqueue_script('33-script');
    //13
    wp_register_script('13-script', get_template_directory_uri() ."/css/13/hinh13.js", array('jquery'));
    wp_enqueue_script('13-script');
    //3
    wp_register_style('111-style', get_template_directory_uri() . "/css/3/bootstrap.min.css", 'all');
    wp_enqueue_style('111-style');
    
    wp_register_script('113-script', get_template_directory_uri() ."/css/3/swiper.min.js", array('jquery'));
    wp_enqueue_script('113-script');
    wp_register_style('114-style', get_template_directory_uri() . "/css/3/swiper.min.css", 'all');
    wp_enqueue_style('114-style');
    //4
    wp_register_script('aaaaaa-script', get_template_directory_uri() ."/css/4/swiper.min.js", array('jquery'));
    wp_enqueue_script('aaaaaa-script');
    //
    wp_register_style('21-style', get_template_directory_uri() . "/css/21-22-23.css", 'all');
    wp_enqueue_style('21-style');
    wp_register_style('4-style', get_template_directory_uri() . "/css/4.css", 'all');
    wp_enqueue_style('4-style');
    wp_register_style('55-style', get_template_directory_uri() . "/css/3.css", 'all');
    wp_enqueue_style('55-style');
    wp_register_style('9-style', get_template_directory_uri() . "/css/9.css", 'all');
    wp_enqueue_style('9-style');
    wp_register_style('8-style', get_template_directory_uri() . "/css/8.css", 'all');
    wp_enqueue_style('8-style');
    wp_register_style('1-style', get_template_directory_uri() . "/css/1.css", 'all');
    wp_enqueue_style('1-style');
    wp_register_style('6-style', get_template_directory_uri() . "/css/6.css", 'all');
    wp_enqueue_style('6-style');
    wp_register_style('14-style', get_template_directory_uri() . "/css/14.css", 'all');
    wp_enqueue_style('14-style');
    wp_register_style('13-style', get_template_directory_uri() . "/css/13.css", 'all');
    wp_enqueue_style('13-style');
    wp_register_style('17-style', get_template_directory_uri() . "/css/17.css", 'all');
    wp_enqueue_style('17-style');
    wp_register_style('18-style', get_template_directory_uri() . "/css/18.css", 'all');
    wp_enqueue_style('18-style');
    wp_register_style('19-style', get_template_directory_uri() . "/css/19.css", 'all');
    wp_enqueue_style('19-style');
    wp_register_style('20-style', get_template_directory_uri() . "/css/20.css", 'all');
    wp_enqueue_style('20-style');
    wp_register_style('11-style', get_template_directory_uri() . "/css/11-12.css", 'all');
    wp_enqueue_style('11-style');
    wp_register_style('10-style', get_template_directory_uri() . "/css/10.css", 'all');
    wp_enqueue_style('10-style');
    wp_register_style('2-style', get_template_directory_uri() . "/css/2.css", 'all');
    wp_enqueue_style('2-style');
    wp_register_style('5-style', get_template_directory_uri() . "/css/5.css", 'all');
    wp_enqueue_style('5-style');
    wp_register_style('1-style', get_template_directory_uri() . "/css/1.css", 'all');
    wp_enqueue_style('1-style');
    wp_register_style('footer-style', get_template_directory_uri() . "/css/footer.css", 'all');
    wp_enqueue_style('footer-style');
    wp_register_style('reset-style', get_template_directory_uri() . "/reset.css", 'all');
    wp_enqueue_style('reset-style');
    
    wp_register_style('bootstrap1-style', get_template_directory_uri() . "/css/bootstrap.min.css", 'all');
    wp_enqueue_style('bootstrap1-style');
    wp_register_style('fontwea-style', get_template_directory_uri() . "/css/font-awesome.min.css", 'all');
    wp_enqueue_style('fontwea-style');
//    book
     
    //menu
    wp_register_style('superfish-style', get_template_directory_uri() . "/superfish.css", 'all');
    wp_enqueue_style('superfish-style');
    wp_register_script('superfish-script', get_template_directory_uri() ."/superfish.js", array('jquery'));
    wp_enqueue_script('superfish-script');
    wp_register_script('jquery-script', get_template_directory_uri() ."/js/jquery-3.1.1.min.js", array('jquery'));
    wp_enqueue_script('jquery-script');
    // scrip
    wp_register_script('custom-script', get_template_directory_uri() ."/custom.js", array('jquery'));
    wp_enqueue_script('custom-script');
    wp_register_script('booet-script', get_template_directory_uri() ."/css/jquery/node_modules/jquery/dist/jquery.min.js", array('jquery'));
    wp_enqueue_script('booet-script');
    wp_register_script('bot-script', get_template_directory_uri() ."/css/bootstrap-3.3.7/dist/bootstrap.min.js", array('jquery'));
    wp_enqueue_script('bot-script');
    wp_register_script('sw-script', get_template_directory_uri() ."/js/scripts.js", array('jquery'));
    wp_enqueue_script('sw-script');
    
}
add_action('wp_enqueue_scripts', 'trungcap_style');


add_filter( 'gettext', function ( $strings ) {
/**
* Holding translations/changes.
'to translate' => 'the translation or rewording'
*/
$text = array(
'QUICK VIEW' => 'Xem nhanh',

'FILTER' => 'Bộ Lọc',
'Price' => 'Giá',
'CATEGORY ARCHIVES' =>'Danh mục',
'This entry was posted in' => 'Bài này đã được đăng',
'Posted in'=>'Đăng trong',
'Leave a comment'=>'Để lại bình luận',
'Continue reading '=>'Xem thêm',
'POSTED ON'=> 'Đăng trên',
'admin'=>'Quốc Đạt',
'Lựa chọn các tùy chọn' => 'Mua hàng',
' by '=>'bởi',
'Bookmark the'=>'Đánh dấu trang',

);
$strings = str_ireplace( array_keys( $text ), $text, $strings );
return $strings;
}, 20 );
// Add custom Theme Functions here
function hrm_widgets_init() {
    // First footer widget area.
    register_sidebar( array(
        'name' => __( 'First Footer Widget Area', 'hrm' ),
        'id' => 'first-footer-widget-area',
        'description' => __( 'The first footer widget area', 'hrm' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    
    
        
}
add_action( 'widgets_init', 'hrm_widgets_init' );

