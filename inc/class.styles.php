<?php
class Influen_Styles
{

    public function __construct()
    {
        add_action('wp_enqueue_scripts', array($this, 'enqueue'));
    }

    public function enqueue()
    {
        /* influen css */
        wp_enqueue_style('influen-style', get_stylesheet_uri());

         /* bootstrap css */
         wp_enqueue_style('bootstrap', INFLUEN_ASSETS_URI . 'css/bootstrap.min.css', array(), INFLUEN_VERSION);

         /* flaticon */
         wp_enqueue_style('flaticon', INFLUEN_ASSETS_URI . 'css/flaticon.css', array(), INFLUEN_VERSION);

         /* font-awesome */
         wp_enqueue_style('font-awesome', INFLUEN_ASSETS_URI . 'css/font-awesome.min.css', array(), INFLUEN_VERSION);

         /* magnific */
         wp_enqueue_style('magnific', INFLUEN_ASSETS_URI . 'css/magnific-popup.css', array(), INFLUEN_VERSION);

         /* icofont */
         wp_enqueue_style('icofont', INFLUEN_ASSETS_URI . 'css/icofont.min.css', array(), INFLUEN_VERSION);

         /* carousel */
         wp_enqueue_style('carousel', INFLUEN_ASSETS_URI . 'css/owl.carousel.min.css', array(), INFLUEN_VERSION);

         /* animate  */
         wp_enqueue_style('animate', INFLUEN_ASSETS_URI . 'css/animate.css', array(), INFLUEN_VERSION);

         /* main  */
         wp_enqueue_style('main', INFLUEN_ASSETS_URI . 'css/main.css', array(), INFLUEN_VERSION);


         /* meanmenu  */
         wp_enqueue_style('meanmenu', INFLUEN_ASSETS_URI . 'css/meanmenu.min.css', array(), INFLUEN_VERSION);

         /* bootsnav  */
         wp_enqueue_style('bootsnav', INFLUEN_ASSETS_URI . 'css/bootsnav.css', array(), INFLUEN_VERSION);

         /* responsive  */
         wp_enqueue_style('responsive', INFLUEN_ASSETS_URI . 'css/responsive.css', array(), INFLUEN_VERSION);

        /* style css */
        wp_enqueue_style('style', INFLUEN_ASSETS_URI . 'css/style.css', array(), INFLUEN_VERSION);
    
        
    }

}

new Influen_Styles;
