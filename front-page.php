<?php
/**
 * Template Name: Front Page
 *
 * The template for displaying front page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dana
 */

get_header(); ?>

    <div id="hero-front" class="hero site-content">

        <!-- <div class="offset-by-four columns eight columns">

           <main id="main" class="site-main eight columns" role="main">
                / add bracket and q mark *php
                    while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content-front' );

                        endwhile; // End of the loop.
                ?*/>
            <!-- </main> LNBRK </div> -->
    
    </div>

 <footer id="site-footer">
        <div class="container">

            <div id="footer-widgets" class="row">
               <?php dynamic_sidebar( 'sidebar-footer-home' ); ?>
            </div>

        </div>
    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>