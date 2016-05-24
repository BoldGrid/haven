<?php
/**
 * The template for displaying search results pages.
 *
 * @package BoldGrid
 */

get_header(); ?>

<div class="row">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <section id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">
							<?php if ( have_posts() ) : ?>
                    
                                <header class="page-header">
                                    <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'boldgrid' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                                </header><!-- .page-header -->
                    
                                <?php /* Start the Loop */ ?>
                                <?php while ( have_posts() ) : the_post(); ?>
                    
                                    <?php
                                    /**
                                     * Run the loop for the search to output the results.
                                     * If you want to overload this in a child theme then include a file
                                     * called content-search.php and that will be used instead.
                                     */
                                    get_template_part( 'template-parts/content', 'search' );
                                    ?>
                    
                                <?php endwhile; ?>
                    
                                <?php boldgrid_paging_nav(); ?>
                    
                            <?php else : ?>
                    
                                <?php get_template_part( 'template-parts/content', 'none' ); ?>
                    
                            <?php endif; ?>
                    </main><!-- #main -->
                </section><!-- #primary -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .row -->

<?php get_footer(); ?>
