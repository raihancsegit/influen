<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package influen
 */

get_header();
$blog_column       = is_active_sidebar( 'sidebar' ) ? '8' : '12';
$influen_blog_layout = influen_get_option( 'influen_blog_layout' );
switch($influen_blog_layout){
    case 'full-width': 
        $col_class      = 'col-md-12  col-sm-12';
        $post_col_class = 'col-lg-4 col-md-6';
        break;
    default: 
        $col_class      = 'col-md-'.$blog_column.'';
        $post_col_class = 'col-lg-6 col-md-6';
}
?>
<section class="page-content bg-gray pt-100 pb-70">
    <div class="container">
        <div class="row">
            <?php
                if ($influen_blog_layout == 'left-sidebar'):
                ?>
                <div class="col-lg-3  col-md-4 col-sm-12">
                    <?php
                    get_sidebar();
                    ?>
                </div>
            <?php endif; ?>
			<div class="<?php echo esc_attr($col_class) ?>">
				<div class="row">
					<?php
					if ( have_posts() ) :

						/* Start the Loop */
						while ( have_posts() ) :
							the_post();
							/*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							*/
							get_template_part( 'template-parts/content', get_post_type() );

						endwhile;
						?>
                </div>
                <div class="row">
                    <div class="col">
                        <nav aria-label="Page navigation" class=" m-pb-140">
                            <?php influen_posts_navigation(); ?>
                        </nav>
                    </div>
                </div>
            <?php 
            else :

                get_template_part( 'template-parts/content', 'none' );
    
            endif;
            ?>
            </div>
            
            <?php
                if ($influen_blog_layout == 'right-sidebar'):
                    ?>
                    <div class="col-lg-3 offset-lg-1 col-md-4 col-sm-12">
                        <?php
                        get_sidebar();
                        ?>
                    </div>
                    <?php
                endif;
                ?>
                <?php if(!$influen_blog_layout == 'full-width'):?>
                    <div class="col-lg-3 offset-lg-1 col-md-4 col-sm-12">
                        <?php
                        get_sidebar();
                        ?>
                    </div>
                <?php endif; ?>
            
            
        </div>
    </div>
</section>
<!-- End Section -->
<?php
get_footer();
