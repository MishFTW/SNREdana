<?php
/**
 * Template Name: Super Page
 * The template for displaying superpages, i.e. level one pages.
 * 
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dana
 */

get_header(); ?>

    <div class="hero">
        <?php echo apply_filters('the_content', get_post_meta($post->ID, 'sliderCode', true)); ?>
    </div>
    
    <div id="content" class="site-content">
        
        <div id="primary" class="container">

            <div class="row">
                <main id="main" class="site-main twelve columns" role="main">

                    <?php
                    while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content', 'page' );

                    endwhile; // End of the loop.
                    ?>
                    
                    <!-- FIX THIS
                    <aside>
                    <h3 id="entry-title">Explore More</h3>
                        
                        <div class="row">
                        < ?php
                            $child_pages = $wpdb->get_results("SELECT *    FROM $wpdb->posts WHERE post_parent = ".$post->ID."    AND post_type = 'page' ORDER BY menu_order", 'OBJECT');    ?>
                            < ?php if ( $child_pages ) : foreach ( $child_pages as $pageChild ) : setup_postdata( $pageChild ); ?>
                                <a href="< ?php echo  get_permalink($pageChild->ID); ?>" rel="bookmark" title="< ?php echo $pageChild->post_title; ?>" class=" child-thumb">
                                    <div>
                                        < ?php echo get_the_post_thumbnail($pageChild->ID, 'thumbnail'); ?>
                                        < ?php echo $pageChild->post_title; ?>
                                    </div>
                                </a>  include both 
                        < ?php endforeach; endif; ?>
                        </div>
                        
                    </aside> 

                    FIX THIS -->

                </main><!-- #main -->
                
            </div><!-- .row -->
            
        </div><!-- #primary -->
        
    </div><!-- #content -->

<?php
get_sidebar();
get_footer();