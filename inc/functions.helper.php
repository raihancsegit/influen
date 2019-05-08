<?php
/**
 * Retrive data from theme options
 * @param  int  $key
 * @param  int  $default
 * @return void
 */
function influen_has_ocdi() {
    return class_exists( 'OCDI_Plugin' );
}

function influen_mobile_search_form_top(){ ?>
    <form role="search" class="form-inline my-2 my-lg-0" method="get" id="moble-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">              
        <input type="search" class="form-control" name="s" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'influen' ); ?>" value="<?php echo get_search_query(); ?>">
        <button class="btn bg-transparent  my-sm-0" type="submit">
            <i class="icofont-search-2"></i>
        </button>
    </form>
<?php }

function influen_mobile_search_form_top2(){ ?>
    <form role="search" class="form-inline my-2 my-lg-0" method="get" id="moble-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">  
        <div class="btn radius-circle bg-white influen-btn  position-relative  mt-0 text-medium radius-pill text-active text-uppercase ">            
            <input type="search" class="form-control" name="s" value="<?php echo get_search_query(); ?>">
            <i class="icofont-search-2 d-inline-block"></i>
        </div>
    </form>
<?php }

function influen_is_static_page()
{
    return 'page' === get_option('show_on_front');
}
/**
 * Check for static front page and front page
 *
 * @return bool
 */

function influen_get_option($key, $default = false)
{
    $data = get_option(CS_OPTION);
    return (isset($data[$key]) ? $data[$key] : $default);
}

function influen_breadcrumbs() {
    if ( function_exists( 'breadcrumb_trail') ) {
        $args = array(
            'show_browse' => false,
            );
        echo breadcrumb_trail( $args );
    }
}

/**
 * single page banner
 */
function single_page_banner()
{
    $bg_id = '';
    $image = '';
    $bg_id = influen_get_option( 'page_bg' );
    $image = wp_get_attachment_url( $bg_id);
    ?>
    <section class=" position-relative set-bg" data-bg="<?php echo esc_url($image);?>">
        <div class="overlay op-P9"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-inner align-items-start flex-column justify-content-center   d-flex ">
                        <h3 class="semi-bold text-uppercase text-white"><?php the_title(); ?> </h3>
                        <nav aria-label="breadcrumb">
                            <?php influen_breadcrumbs();?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
}
/**
 * service page banner
 */
function single_service_banner()
{
    $bg_id = '';
    $image = '';
    $bg_id = influen_get_option( 'ser_bred_bg' );
    $image = wp_get_attachment_url( $bg_id);
    ?>
    <section class=" position-relative set-bg" data-bg="<?php echo esc_url($image);?>">
        <div class="overlay op-P9"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-inner align-items-start flex-column justify-content-center   d-flex ">
                        <h3 class="semi-bold text-uppercase text-white"><?php single_post_title(); ?> </h3>
                        <nav aria-label="breadcrumb">
                            <?php influen_breadcrumbs();?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
}

/**
 * Get influen brand logo
 * @return string
 */
function influen_get_logo($logo_id = 0, $retina_logo_id = 0)
{
    $default = wp_get_attachment_image_src($logo_id, 'full');
    $retina = wp_get_attachment_image_src($retina_logo_id, 'full');
    $retina_url = '';
    if (isset($retina[0])) {
        $retina_url = esc_url($retina[0]);
    }
    if (isset($default[0])) {
        return sprintf('<a class="logo" href="%1$s"><img src="%2$s" data-retina="%3$s" alt="%4$s"></a>',
            esc_url(home_url('/')),
            esc_url($default[0]),
            $retina_url,
            esc_attr(get_bloginfo('name'))
        );
    } else {
        return sprintf(
            '<a class="custom-logo-link" href="%s"><h2>%2$s</h2></a>',
            esc_url(home_url('/')),
            esc_attr(get_bloginfo('name'))
        );
    }
}

function influen_get_st_logo($logo_id = 0, $retina_logo_id = 0)
{
    $default = wp_get_attachment_image_src($logo_id, 'full');
    $retina = wp_get_attachment_image_src($retina_logo_id, 'full');
    $retina_url = '';
    if (isset($retina[0])) {
        $retina_url = esc_url($retina[0]);
    }
    if (isset($default[0])) {
        return sprintf('<a class="menu-logo" href="%1$s"><img src="%2$s" data-retina="%3$s" alt="%4$s"></a>',
            esc_url(home_url('/')),
            esc_url($default[0]),
            $retina_url,
            esc_attr(get_bloginfo('name'))
        );
    } else {
        return sprintf(
            '<a class="menu-logo" href="%s"><h2>%2$s</h2></a>',
            esc_url(home_url('/')),
            esc_attr(get_bloginfo('name'))
        );
    }
}

function influen_get_logo2($logo_id = 0, $retina_logo_id = 0)
{
    $default = wp_get_attachment_image_src($logo_id, 'full');
    $retina = wp_get_attachment_image_src($retina_logo_id, 'full');
    $retina_url = '';
    if (isset($retina[0])) {
        $retina_url = esc_url($retina[0]);
    }
    if (isset($default[0])) {
        return sprintf('<a class="navbar-brand" href="%1$s"><img src="%2$s" data-retina="%3$s" alt="%4$s"></a>',
            esc_url(home_url('/')),
            esc_url($default[0]),
            $retina_url,
            esc_attr(get_bloginfo('name'))
        );
    } else {
        return sprintf(
            '<a class="custom-logo-link" href="%s"><h2>%2$s</h2></a>',
            esc_url(home_url('/')),
            esc_attr(get_bloginfo('name'))
        );
    }
}


/**
 * Generate column based on sidebar setting
 * @param  string $sidebar
 * @return array
 */
function influen_get_column_class($sidebar = 'right')
{
    if ('right' == $sidebar) {
        $column = array('main' => 'col-md-8', 'sidebar' => 'col-md-4');
    } elseif ('left' == $sidebar) {
        $column = array('main' => 'col-md-8 col-md-push-4', 'sidebar' => 'col-md-4 col-md-pull-8');
    } elseif ('no-sidebar' == $sidebar) {
        $column = array('main' => 'col-md-12', 'sidebar' => '');
    } else {
        $column = array('main' => 'col-md-12', 'sidebar' => '');
    }
    return $column;
}
/**
 * Post Navigation
 */
function influen_posts_navigation()
{
    global $wp_query;
    $big = 999999999; // need an unlikely integer

    $links = paginate_links(array(
        'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format'    => '?paged=%#%',
        'current'   => max(1, get_query_var('paged')),
        'total'     => $wp_query->max_num_pages,
        'type'      => 'array',
        'prev_next' => true,
        'prev_text' => wp_kses_post('Prev<i class="icofont-long-arrow-left"></i> ', 'influen'),
        "next_text" => wp_kses_post('Next<i class="icofont-long-arrow-right"></i> ', 'influen'),
        'mid_size'  => 3,
    ));
    ?>
        <ul class="pagination d-flex align-items-center m-pagination justify-content-start mb-0">
        <?php
            if ($links) {
                foreach ($links as $link) {
                    if (strpos($link, "current") !== false) {
                        echo '<li class="active page-item"><a class="page-link">' . $link . "</a></li>\n";
                    } else {
                        echo '<li class="page-item">' . $link . "</li>\n";
                    }

                }
            }
        ?>
        </ul>
        <?php
}

/**
 * Display author link
 * @return string
 */
function influen_author_link()
{
    $output = '<span>' . esc_html__('Posted by ', 'influen');
    $output .= '<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a>';
    $output .= '</span>';
    return $output;
}

/**
 * Display post categories
 * @param  array  $categories
 * @return string
 */
function influen_get_post_categories($categories)
{
    $output = '';
    $separator = ', ';
    foreach ($categories as $category) {
        $output .= '<a href="' . esc_url(get_category_link($category->term_id)) . '" title="' . sprintf(esc_attr__('View all posts in %s', 'influen'), $category->name) . '">' . esc_html($category->name) . '</a>' . $separator;
    }
    echo '<span>' . trim($output, $separator) . '</span>';
}

/**
 * Display comment number
 * @return string
 */
function influen_post_comments_number()
{
    $num_comments = get_comments_number();
    $write_comments = '';
    if (comments_open()) {
        if ($num_comments == 0) {
            $comments = esc_html__('No Comments', 'influen');
        } elseif ($num_comments > 1) {
            $comments = $num_comments . ' ' . esc_html__('Comments', 'influen');
        } else {
            $comments = esc_html__('1 Comment', 'influen');
        }
        $write_comments = '<a href="' . esc_url(get_comments_link()) . '">' . $comments . '</a>';
    } else {
        $write_comments = esc_html__('Comments are off for this post.', 'influen');
    }

    echo '<span>' . $write_comments . '</span>';
}

/**
 * Get previous post link
 * @return string
 */
function influen_get_previous_post_link()
{
    $previous_post = get_previous_post();
    $link = '';
    if (!empty($previous_post)) {
        $link = get_the_permalink($previous_post->ID);
    }
    return $link;
}

/**
 * Get next post link
 * @return srting
 */
function influen_get_next_post_link()
{
    $next_post = get_next_post();
    $link = '';
    if (!empty($next_post)) {
        $link = get_the_permalink($next_post->ID);
    }
    return $link;
}

/**
 * Get previous post title
 * @return string
 */
function influen_get_previous_post_title()
{
    $previous_post = get_previous_post();
    $title = '';
    if (!empty($previous_post)) {
        $title = get_the_title($previous_post->ID);
    }
    return $title;
}

/**
 * Get next post title
 * @return string
 */
function influen_get_next_post_title()
{
    $next_post = get_next_post();
    $title = '';
    if (!empty($next_post)) {
        $title = get_the_title($next_post->ID);
    }
    return $title;
}

/**
 * Check single post pagination status
 * @return string
 */
function influen_check_link_status($title)
{
    $class = '';
    if (empty($title)) {
        $class = 'disabled';
    }
    return $class;
}

/**
 * Change HEX to RGBA color
 */
function influen_hex2rgba($color, $opacity = false)
{

    $default = 'rgb(0,0,0)';

    //Return default if no color provided
    if (empty($color)) {
        return $default;
    }

    //Sanitize $color if "#" is provided
    if ($color[0] == '#') {
        $color = substr($color, 1);
    }

    //Check if color has 6 or 3 characters and get values
    if (strlen($color) == 6) {
        $hex = array($color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5]);
    } elseif (strlen($color) == 3) {
        $hex = array($color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2]);
    } else {
        return $default;
    }

    //Convert hexadec to rgb
    $rgb = array_map('hexdec', $hex);

    //Check if opacity is set(rgba or rgb)
    if ($opacity) {
        if (abs($opacity) > 1) {
            $opacity = 1.0;
        }

        $output = 'rgba(' . implode(",", $rgb) . ',' . $opacity . ')';
    } else {
        $output = 'rgb(' . implode(",", $rgb) . ')';
    }

    //Return rgb(a) color string
    return $output;
}

// function influen_sanitize_param( $param ) {
//     return strtolower( trim( $param ) );
// }

function influen_sanitize_css_unit($value, $default)
{
    $units = '/-?\d+[px|em|%|pt|cm|ex|mm|in|rem]/';
    if (preg_match($units, $value)) {
        return $value;
    } else {
        return $value . $default;
    }
}

function influen_check_css_unit($value, $default = 'px')
{
    $value = influen_sanitize_param($value);

    if ($value === 0 || $value === '0' || $value === '') {
        $value = '0px';
    }

    $values = array_filter(explode(' ', $value));
    $out = array();
    foreach ($values as $val) {
        $out[] = influen_sanitize_css_unit($val, $default);
    }
    return implode(' ', $out);
}

function influen_backtotop()
{
    $has_backtotop = influen_get_option('display_backtotop', true);
    if ($has_backtotop) {?>
        <div class="scroll-top">
            <i class="icofont-rounded-up"></i>
        </div>
    <?php
    }
}
add_action('wp_footer', 'influen_backtotop');

// add user defined styles
function influen_enqueue_user_css()
{
    if (function_exists('influen_get_option')) {
        $data = influen_get_option('influen_css');
        $data = trim(preg_replace(array('/<style[^>]*>/i', '/<\/style>/i'), '', $data));
        if ($data) {
            echo sprintf('<style id="influen-user-styles">%s</style>', $data);
        }
    }

}
add_action('wp_head', 'influen_enqueue_user_css', 999999999);

// add user defined scripts
function influen_enqueue_user_js()
{
    if (function_exists('influen_get_option')) {
        $data = influen_get_option('influen_js');
        $data = trim(preg_replace(array('/<script[^>]*>/i', '/<\/script>/i'), '', $data));
        if ($data) {
            echo sprintf('<script id="influen-user-scripts">%s</script>', $data);
        }
    }

}
add_action('wp_footer', 'influen_enqueue_user_js', 999999999);


function influen_social_media() {
    $icons = influen_get_option( 'social_media', array() );

    if ( empty( $icons ) ) {
        return;
    }

    foreach( $icons as $icon ) {
        $name      = isset( $icon['name'] ) ? $icon['name'] : '';
        $link      = isset( $icon['link'] ) ? $icon['link'] : '';
        $link      = ( 'email' == $name ) ? 'mailto:' . esc_attr( $link ) : esc_url( $link );
        $icon_name = '';

        if ( 'email' == $name ) {
            $icon_name = 'fab fa-envelope-o';
        } elseif ( 'custom' == $name ) {
            $icon_name = isset( $icon['icon-name'] ) ? $icon['icon-name'] : '';
        } else {
            $icon_name = "fab fa-{$name}";
        }

        printf( '<a href="%s" class="text-default  rounded-circle fill-hover   social-fill-hover bg-white s-dp-1-3-15" target="_blank" rel="noopener"><i class="%s"></i></a>',
            $link,
            esc_attr( $icon_name )
            );
    }
}

function influen_social_top() {
    $icons = influen_get_option( 'social_media', array() );

    if ( empty( $icons ) ) {
        return;
    }

    foreach( $icons as $icon ) {
        $name      = isset( $icon['name'] ) ? $icon['name'] : '';
        $link      = isset( $icon['link'] ) ? $icon['link'] : '';
        $link      = ( 'email' == $name ) ? 'mailto:' . esc_attr( $link ) : esc_url( $link );
        $icon_name = '';

        if ( 'email' == $name ) {
            $icon_name = 'fab fa-envelope-o';
        } elseif ( 'custom' == $name ) {
            $icon_name = isset( $icon['icon-name'] ) ? $icon['icon-name'] : '';
        } else {
            $icon_name = "fab fa-{$name}";
        }

        printf( '<a href="%s" class="text-white" target="_blank" rel="noopener"><i class="%s"></i></a>',
            $link,
            esc_attr( $icon_name )
            );
    }
}

/**
 * Engueue user defined brand color
 */

function influen_enqueue_brand_color( $css ) {
    $color = influen_get_option('brand_color');

    if ( influen_get_option('custom_brand_color') && $color !== '#d6b161' ) {
        ob_start();
        include influen_INCLUDES_DIR . 'brand-color.php';
        $contents = ob_get_clean();
        $css .= str_replace( '{{influen_COLOR}}', esc_attr($color), $contents );
    }

    printf( "<style id='influen-brand-color' type='text/css'>\n%s\n</style>",
        $css
    );
}
add_filter( 'wp_head', 'influen_enqueue_brand_color' );

if (!function_exists('influen_social_share')):
/**
 * Social Share options
 */
    function influen_social_share()
{
        // Get current page URL
        $giURL = urlencode(get_permalink());

        // Get current page title
        $giTitle = str_replace(' ', '%20', get_the_title());

        // Construct sharing URL without using any script
        $twitterURL = 'https://twitter.com/intent/tweet?text=' . $giTitle . '&amp;url=' . $giURL . '&amp;';
        $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u=' . $giURL;
        $googleURL = 'https://plus.google.com/share?url=' . $giURL;

        // Add sharing button at the end of page/page content
        $content = '';
        $content .= '<a  class="text-default  rounded-circle fill-hover  bordered-cirlce social-fill-hover s-dp-1-3-15" href="' . $facebookURL . '" onclick="window.open(this.href, \'mywin\',\'left=50,top=50,width=600,height=350,toolbar=0\'); return false;"><i class="icofont-facebook"></i></a>';
        $content .= '<a  class="text-default  rounded-circle fill-hover  bordered-cirlce social-fill-hover s-dp-1-3-15" href="' . $twitterURL . '" onclick="window.open(this.href, \'mywin\',\'left=50,top=50,width=600,height=350,toolbar=0\'); return false;"><i class="icofont-twitter"></i></a>';
        $content .= '<a  class="text-default  rounded-circle fill-hover  bordered-cirlce social-fill-hover s-dp-1-3-15" href="' . $googleURL . '" onclick="window.open(this.href, \'mywin\',\'left=50,top=50,width=600,height=350,toolbar=0\'); return false;"><i class="icofont-google-plus"></i></a>';
        $content .= '<a class="text-default  rounded-circle fill-hover  bordered-cirlce social-fill-hover s-dp-1-3-15" href="http://pinterest.com/pin/create/button/?url=/node/[nid]&description=[title]"><i class="icofont-pinterest"></i></a>';

        echo wp_kses_post($content);
    }
endif;

if ( ! function_exists( 'influen_get_custom_terms_vc' ) ) {
    function influen_get_custom_terms_vc($texonomy){
        global $wpdb;
        $query = 'SELECT DISTINCT 
                        t.name,t.term_id,t.slug 
                    FROM
                      '.$wpdb->prefix.'terms t 
                    INNER JOIN 
                      '.$wpdb->prefix.'term_taxonomy tax 
                    ON 
                      tax.term_id = t.term_id
                    WHERE 
                        ( tax.taxonomy = \'' . $texonomy . '\')';                     
        $categories_obj =  $wpdb->get_results($query , ARRAY_A);
        $cats = array();
        $cats['All'] = '0';
        foreach ($categories_obj as $cat) {
            $cats[$cat['name']] = $cat['term_id'];
        }
        return $cats;
    }
}

if ( ! function_exists( 'influen_get_excerpt' ) ) {
    function influen_get_excerpt($limit, $source = null){

        if($source == "content" ? ($excerpt = get_the_content()) : ($excerpt = get_the_excerpt()));
        $excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
        $excerpt = strip_shortcodes($excerpt);
        $excerpt = strip_tags($excerpt);
        $excerpt = substr($excerpt, 0, $limit);
        $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
        $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
        $excerpt = $excerpt.' ';
        echo wp_kses_post($excerpt);
    }
}


/**
 * Get influen primary nav
 * @return string
 */
function influen_get_primary_nav()
{
    wp_nav_menu(array(
        'menu' => 'primary',
        'menu_class' => 'navbar-nav bcbd_nav',
        'theme_location' => 'primary',
        'walker' => new influen_walker_nav_menu(),
        'container'=> false,
    )
    );
}

if(!function_exists('influen_custom_comments')):
    function influen_custom_comments($comment, $args, $depth) {
        $GLOBALS['comment'] = $comment;
        switch ($comment->comment_type) :
            case 'pingback' :
            case 'trackback':
            ?>
            <div class="back-link"><?php comment_author_link(); ?></div>
            <?php 
            break;
            default :
            ?>
            <div <?php comment_class('media pt-4 comment position-relative  m-pb-60 blog type-1  blog-comment'); ?> id="comment-<?php comment_ID(); ?>">
            <?php comment_reply_link(array_merge($args, array(
                        'reply_text' => esc_html('Reply','influen'),
                        'depth' => $depth,
                        'max_depth' => $args['max_depth'],                   
                    )));
                    ?>
                    <?php echo get_avatar($comment, 70); ?>
                
                <div class="media-body">
                    <h5 class="comments-author mt-0 mb-0 text-dark2 fz-18"><?php comment_author(); ?></h5>
                    <span class="fz-poppins"><?php printf( _x( '%1$s', '1: date, 2:', 'influen'), get_comment_date(), get_comment_time() ); ?></span>
                    <?php comment_text(); ?>
                    
                                               
                    <?php
                    edit_comment_link( __( 'Edit', 'influen' ), '<span class="reply">', '</span>' );

                   
                    ?>
                </div>                                    

            </div><!-- #comment-<?php comment_ID(); ?> -->
            <?php
            // End the default styling of comment
            break;
        endswitch;
    }
endif;

// comment form
if(!function_exists('influen_comment_form')):
    function influen_comment_form() {
        $commenter = wp_get_current_commenter();
        $req = get_option( 'require_name_email' );
        $aria_req = ( $req ? " aria-required='true'" : '' );
        $fields =  array(
            'author' => '<div class="row"><div class="col-md-6"><input id="author" class="br form-control influen-field fz-poppins m-mb-20" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" placeholder="' .  esc_html__( 'Your Name', 'influen' ) . '"' . $aria_req . ' /></div>',
            'email'  => '<div class="col-md-6"><input id="email" class="bdr form-control influen-field fz-poppins m-mb-20" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" placeholder="' .  esc_html__( 'Your Email', 'influen' ) . '"' . $aria_req . ' /></div></div>',            
        );
        $comments_args = array(
            'fields' =>  $fields,
            'title_reply' => esc_html('Comments','influen'),
            'comment_field' => '<textarea class="m-mb-20 form-control fz-poppins influen-field" id="comment" name="comment" cols="45" rows="5" placeholder="' . esc_html__( 'Your Messages', 'influen' ) . '" aria-required="true"></textarea>',
            'comment_notes_after' => '',
        );
        comment_form($comments_args);
    }
endif;


class Influen_Template {

    

    public static function search_form() {
        ob_start();
        ?>
        <li class="nav-icon">
            <a href="javascript:void(0)"><i class="fa fa-search"></i> <?php esc_html_e( 'Search', 'influen' ); ?></a>
            <div class="megamenu megamenu-quarter-width search-box">
                <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" autocomplete="off">
                    <label class="sr-only" for="nav-search-form"><?php esc_html_e( 'Search for:', 'influen' ) ?></label>
                    <input type="text" id="nav-search-form" name="s" class="form-control" placeholder="<?php esc_attr_e( 'Search Here...', 'influen' ); ?>">
                </form>
            </div>
        </li>
        <?php
        return ob_get_clean();
    }

   

    public static function menu( $menu, array $classes ) {
        $html = '';

       
        if ( cs_get_option( 'display_search' ) ) {
            $html .= Influen_Template::search_form();
        }

        /**
         * Displays a navigation menu
         * @param array $args Arguments
         */
        $args = wp_nav_menu(array(
            'menu'           => $menu,
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'menuzord-menu ' . esc_attr( implode( ' ', $classes ) ),
           // 'walker' => new influen_Megamenu_Walker,
            'items_wrap' => '<ul id="%1$s" role="menubar" class="%2$s">%3$s' . $html . '</ul>',
            //'fallback_cb' => 'influen_Megamenu_Walker::fallback',
            'echo'           => false,
        ));
        $args = str_replace('menu-item-has-children','dropdown',$args);
        $args = str_replace('sub-menu','dropdown-menu animated',$args);
        echo $args;
       
    }

    /**
     * Get influen logo html
     * @param  int $default Default logo id
     * @param  int $retina  Retina logo id
     * @param  string $class Logo class
     * @return string       Complete brand logo html
     */
    public static function get_logo( $default = 0, $retina = 0, $class = 'logo-brand' ) {
        $default = wp_get_attachment_image_src( $default, 'full' );
        $retina = wp_get_attachment_image_src( $retina, 'full' );
        $brand_name = esc_html( get_bloginfo( 'name' ) );
        $retina_url = '';

        if ( isset( $retina[0] ) ) {
            $retina_url = apply_filters( 'influen_header_logo_url:retina', esc_url( $retina[0] ) );
        }

        if ( isset( $default[0] ) ) {
            $brand_name = sprintf( '<img src="%1$s" data-retina="%2$s" alt="%3$s">',
                apply_filters( 'influen_header_logo_url:default', esc_url( $default[0] ) ),
                $retina_url,
                esc_attr( get_bloginfo( 'name' ) )
                );
        }

        return sprintf( '<a class="%4$s" href="%1$s" title="%2$s">%3$s</a>',
            esc_url( home_url( '/' ) ),
            esc_attr( get_bloginfo( 'name' ) ),
            $brand_name,
            esc_attr( $class )
            );
    }

}

add_action( 'influen_page_start', array('Influen_Template', 'add_preloader') );

    if ( !function_exists( 'influen_esc_desc' ) ) {
        /**
         * Format translatable string with allowed html tags.
         * Use this function to esc meta box, option and other field's description.
         *
         * @param  string $translated_string Translatable format string using __() function
         * @param  array $placeholders       Placeholders for format string
         * @return string                    Formatted string
         */
        function influen_esc_desc( $translated_string = '', array $placeholders = array() ) {
            $allowed_tags = array(
                'a' => array(
                    'href' => array(),
                    'title' => array(),
                    'target' => array(),
                ),
                'br' => array(),
                'i' => array(),
                'em' => array(),
                'strong' => array(),
                'code' => array(),
                'span' => array(),
            );
    
            return wp_kses( vsprintf( $translated_string, $placeholders ), $allowed_tags );
        }
    }

    if ( ! function_exists( 'influen_get_sidebar_list' ) ) {
        /**
         * Create a list of all registered sidebars
         * @return array list of registed sidebar key => name
         */
        function influen_get_sidebar_list() {
            global $wp_registered_sidebars;
            $sidebars = array();
            if ( ! empty( $wp_registered_sidebars ) ) {
                foreach ( $wp_registered_sidebars as $key => $data ) {
                    $sidebars[$key] = $data['name'];
                }
            }
            return $sidebars;
        }
    }


