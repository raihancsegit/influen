<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package influen
 */
$influen_header_style = '';
$influen_is_page_header = 1;
$influen_page_header_bg = '';
$page_header_bg = get_template_directory_uri().'/assets/images/blog-image-2.jpg';
if( function_exists( 'influen_get_option' ) ){
    $page_options             = get_post_meta( get_the_ID(), '_influen_page_options', true );
    $influen_header_style       = isset($page_options['influen_header_style']) ? $page_options['influen_header_style'] : '';
    $influen_custom_page_header = isset($page_options['influen_custom_header']) ? $page_options['influen_custom_header'] : '';     
    $influen_page_header = isset($page_options['influen_custom_page_header']) ? $page_options['influen_custom_page_header'] : '';             
}
if (is_page() && $influen_custom_page_header == 1):
    $influen_header_style = isset($page_options['influen_header_style']) ? $page_options['influen_header_style'] : '';
else:
    $influen_header_style = influen_get_option( 'influen_header_style' );
endif;

if (is_page() && $influen_custom_page_header == 1):
    $influen_is_page_header = isset($page_options['influen_is_page_header']) ? $page_options['influen_is_page_header'] : '';
    $influen_page_subtitle  = isset($page_options['influen_page_subtitle']) ? $page_options['influen_page_subtitle'] : '';
    $influen_page_header_bg = isset($page_options['influen_page_header_bg']) ? $page_options['influen_page_header_bg'] : '';
else:
    $influen_is_page_header   = influen_get_option( 'influen_is_page_header' );
    $influen_page_header_bg   = influen_get_option( 'influen_page_header_bg' );
endif; 
$page_header_bg  = wp_get_attachment_url( $influen_page_header_bg );

?>
<!DOCTYPE html>
<html dir="ltr" <?php language_attributes(); ?>>
<head>
	<!-- Meta Tags -->	
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="Finconix - Corporate & Financial Business HTML5 Template">
	<meta name="keywords" content=" agency, audit, broker, business, company, consulting, corporate, creative, financial, portfolio, responsive, startup ">
	<meta name="author" content="shifttechplus">
		
	<!-- Favicon Icon -->
	<link rel="icon" type="image/png" href="img/favicon.png">	
	<!-- Apple Touch Icons -->
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon-180x180.png">
	
	<!-- Stylesheets Start -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">  	
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!-- Preloader Start 
	<div id="preloader">
		<div id="preloader-status"></div>
	</div>
	<!-- Preloader End -->

	<?php

    if (is_page() && $influen_custom_page_header == 1):
        $influen_header_style = isset($page_options['influen_header_style']) ? $page_options['influen_header_style'] : '';
    else:
        $influen_header_style = influen_get_option( 'influen_header_style' );
    endif;

    if (! empty($influen_header_style)):
        get_template_part('template-parts/header/header', $influen_header_style);
     else :
        get_template_part('template-parts/header/header','4');
    endif;
?>

 <?php if (!is_front_page() && !is_404() && !is_single()  && $influen_is_page_header == 1): ?>
       

    <div class="pagehding-sec" style="background-image:url(<?php echo esc_url($page_header_bg)?>);">
		<div class="pagehding-overlay"></div>		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-heading-v2">
						<h1>
                           <?php
                            if( is_archive()  ) {
                                the_archive_title();
                            } else if (is_home()) {
                                wp_title('');
                            } else if(is_page()) {
                                the_title();
                            } else if(is_search()) {
                                printf( esc_html__( 'Search Results for: %s', 'influen' ), '<span>' . get_search_query() . '</span>' );
                            } else {
                                the_title();
                            }                             
                        ?>
                        </h1>	
						<p>Process of providing funds</p>
						<div class="page-heading-border"></div>
					</div>					
				</div>				
			</div>
		</div>
	</div>
<?php endif; ?>	


