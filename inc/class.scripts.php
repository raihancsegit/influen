<?php
class Influen_Scripts
{

    public function __construct()
    {
        add_action('wp_enqueue_scripts', array($this, 'enqueue'));
    }

    public function enqueue()
    {

         /** bootstrap scripts */
         wp_enqueue_script('plugins', INFLUEN_ASSETS_URI . 'js/bootstrap.min.js', array('jquery'), INFLUEN_VERSION, true);

         /** isotope scripts */
         wp_enqueue_script('isotope', INFLUEN_ASSETS_URI . 'js/isotope.pkgd.min.js', array('jquery'), INFLUEN_VERSION, true);

         /** magnific scripts */
         wp_enqueue_script('magnific', INFLUEN_ASSETS_URI . 'js/jquery.magnific-popup.min.js', array('jquery'), INFLUEN_VERSION, true);

         /** carousel scripts */
         wp_enqueue_script('carousel', INFLUEN_ASSETS_URI . 'js/owl.carousel.min.js', array('jquery'), INFLUEN_VERSION, true);

         /** animate scripts */
         wp_enqueue_script('carousel', INFLUEN_ASSETS_URI . 'js/owl.animate.js', array('jquery'), INFLUEN_VERSION, true);

         /** scrollUp scripts */
         wp_enqueue_script('scrollUp', INFLUEN_ASSETS_URI . 'js/jquery.scrollUp.min.js', array('jquery'), INFLUEN_VERSION, true);

         /** counterup scripts */
         wp_enqueue_script('counterup', INFLUEN_ASSETS_URI . 'js/jquery.counterup.min.js', array('jquery'), INFLUEN_VERSION, true);

         /** modernizr scripts */
         wp_enqueue_script('modernizr', INFLUEN_ASSETS_URI . 'js/modernizr.min.js', array('jquery'), INFLUEN_VERSION, true);

         /** waypoints scripts */
         wp_enqueue_script('waypoints', INFLUEN_ASSETS_URI . 'js/waypoints.min.js', array('jquery'), INFLUEN_VERSION, true);

         /** meanmenu scripts */
         wp_enqueue_script('meanmenu', INFLUEN_ASSETS_URI . 'js/jquery.meanmenu.min.js', array('jquery'), INFLUEN_VERSION, true);

         /** imagesloaded scripts */
         wp_enqueue_script('imagesloaded', INFLUEN_ASSETS_URI . 'js/imagesloaded.pkgd.min.js', array('jquery'), INFLUEN_VERSION, true);

         /** bootsnav scripts */
         wp_enqueue_script('bootsnav', INFLUEN_ASSETS_URI . 'js/bootsnav.js', array('jquery'), INFLUEN_VERSION, true);

         /** custom scripts */
         wp_enqueue_script('custom', INFLUEN_ASSETS_URI . 'js/custom.js', array('jquery'), INFLUEN_VERSION, true);

        /** Default scripts */
        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    }

}

new Influen_Scripts;