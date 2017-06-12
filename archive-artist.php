<?php
/**
 * The template for displaying artist archive pages.
 *
 *
 * @package sth
 */

get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
          <header>
            <?php
              the_archive_title( '<h1 class="page-title">', '</h1>' );
              the_archive_description( '<p class="lead taxonomy-description">', '</p>' );
            ?>
          </header>
      </div>
      
      <div class="col-md-12">
               <ul id="breadcrumbs" class="breadcrumb"><li class="item-home"><a class="bread-link bread-home" href="<?php echo home_url(); ?>" title="Home">Home</a></li><li class="separator separator-home"> &gt; </li><li class="item-current item-19"><span class="bread-current bread-19"> Archive</span></li></ul>
      </div>
    </div>
  </div>

	<div id="primary" class="container">
    
    <div class="row">
      <main id="main" class="col-md-7 col-sm-8" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'archive' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main plugin-->
      
      <aside class="col-md-4 col-md-offset-1 col-sm-4">
        <?php get_sidebar(); ?>
      </aside>
      
    </div>
	</div><!-- #primary -->


<?php get_footer(); ?>
