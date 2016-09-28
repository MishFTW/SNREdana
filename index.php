<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dana
 */

get_header(); ?>

    <div id="content" class="site-content">

        <div id="primary" class="container">
            <main id="main"  role="main">
                <div class="row">


                    <div class="eight columns">
                        <h1 id="entry-title">Latest Posts</h1>
                        <?php
                             $postslist = get_posts('numberposts=3&order=DESC&orderby=date');
                             foreach ($postslist as $post) :
                                setup_postdata($post);
                             ?>
                             <div class="entry">
                             <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                             <?php the_time(get_option('date_format')) ?>
                             <?php the_excerpt(); ?>
                             </div>
                         <?php endforeach; ?>
                    </div>

                    <aside class="four columns" id="secondary">
                        <h1 id="entry-title">View Others</h1>
                    </aside>


                </div>


            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- #content -->

<?php
get_footer();