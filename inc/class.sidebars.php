<?php 
class Influen_Sidebars {

    public function __construct() {
        add_action( 'widgets_init', array($this, 'register') );
    }

    public function register() {

        register_sidebar( array(
	        'name'          => esc_html__( 'Sidebar', 'influen' ),
	        'id'            => 'sidebar',
	        'description'   => esc_html__( 'Add widgets here.', 'influen' ),
	        'before_widget' => '<div class="widget-cat">',
	        'after_widget'  => '</div>',
	        'before_title'  => '<h4 class="widget-title">',
	        'after_title'   => '</h4>',
	    ) );

        register_sidebar( array(
            'name'          => esc_html__( 'Footer First Column', 'influen' ),
            'id'            => 'footer-1',
            'description'   => esc_html__( 'Add widgets here for footer first column.', 'influen' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<div class="section_heading"><h5 class="title title_sm">',
            'after_title'   => '</h5></div>',
        ) );

        register_sidebar( array(
            'name'          => esc_html__( 'Footer Second Column', 'influen' ),
            'id'            => 'footer-2',
            'description'   => esc_html__( 'Add widgets here for footer second column.', 'influen' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<div class="section_heading"><h5 class="title title_sm">',
            'after_title'   => '</h5></div>',
        ) );

        register_sidebar( array(
            'name'          => esc_html__( 'Footer Third Column', 'influen' ),
            'id'            => 'footer-3',
            'description'   => esc_html__( 'Add widgets here for footer third column.', 'influen' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<div class="section_heading"><h5 class="title title_sm">',
            'after_title'   => '</h5></div>',
        ) );

        register_sidebar( array(
            'name'          => esc_html__( 'Footer Fourth Column', 'influen' ),
            'id'            => 'footer-4',
            'description'   => esc_html__( 'Add widgets here for footer fourth column.', 'influen' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<div class="section_heading"><h5 class="title title_sm">',
            'after_title'   => '</h5></div>',
        ) );

        register_sidebar( array(
	        'name'          => esc_html__( 'Megamenu One Column', 'influen' ),
	        'id'            => 'mega-1',
	        'description'   => esc_html__( 'Add widgets here.', 'influen' ),
	        'before_widget' => '<div class="blog-widget">',
	        'after_widget'  => '</div>',
	        'before_title'  => '<h6 class="nav-link mb-0">',
	        'after_title'   => '</h6>',
	    ) );
        register_sidebar( array(
	        'name'          => esc_html__( 'Megamenu Two Column', 'influen' ),
	        'id'            => 'mega-2',
	        'description'   => esc_html__( 'Add widgets here.', 'influen' ),
	        'before_widget' => '<div class="blog-widget">',
	        'after_widget'  => '</div>',
	        'before_title'  => '<h6 class="nav-link mb-0">',
	        'after_title'   => '</h6>',
	    ) );
        register_sidebar( array(
	        'name'          => esc_html__( 'Megamenu There Column', 'influen' ),
	        'id'            => 'mega-3',
	        'description'   => esc_html__( 'Add widgets here.', 'influen' ),
	        'before_widget' => '<div class="blog-widget">',
	        'after_widget'  => '</div>',
	        'before_title'  => '<h6 class="nav-link mb-0">',
	        'after_title'   => '</h6>',
	    ) );
        register_sidebar( array(
	        'name'          => esc_html__( 'Megamenu Four Column', 'influen' ),
	        'id'            => 'mega-4',
	        'description'   => esc_html__( 'Add widgets here.', 'influen' ),
	        'before_widget' => '<div class="blog-widget">',
	        'after_widget'  => '</div>',
	        'before_title'  => '<h6 class="nav-link mb-0">',
	        'after_title'   => '</h6>',
	    ) );

        register_sidebar( array(
            'name'          => esc_html__( 'Footer Style 2 Newslatter', 'influen' ),
            'id'            => 'footer-st-2',
            'description'   => esc_html__( 'Add widgets here for footer fourth column.', 'influen' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<div class="section_heading"><h5 class="title title_sm">',
            'after_title'   => '</h5></div>',
        ) );

    }
    

}

new Influen_Sidebars;