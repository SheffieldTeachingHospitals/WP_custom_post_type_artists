<?php
/**
 * The template for displaying all single posts.
 *
 * @package sth
 */

get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
          <header>
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
          </header>
      </div>
      
      <div class="col-md-12">
         <?php sth_breadcrumbs(); ?>
      </div>
    </div>
  </div>

	<div id="primary" class="container">
    
    <div class="row">
      <main id="main" class="col-md-7 col-sm-8" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="entry-content artist">
            <?php the_content(); ?>
            <?php
              wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sth' ),
                'after'  => '</div>',
              ) );
            ?>
          </div><!-- .entry-content -->

          <footer class="entry-footer">
            <?php sth_entry_footer(); ?>
          </footer><!-- .entry-footer -->
        </article><!-- #post-## -->  
        
        
          <?php get_template_part( 'template-parts/content', 'parts' ); ?> 
          <?php get_template_part( 'template-parts/content', 'nav' ); ?>

        <?php endwhile; // End of the loop. ?>

        </main><!-- #main plugin .container -->
      
      <aside class="col-md-4 col-md-offset-1 col-sm-4">
        <?php get_sidebar(); ?>
      </aside>
    </div>
	</div><!-- #primary-->

<?php get_template_part( 'template-parts/content', 'marketing' ); ?> 
<?php get_footer(); ?>