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
            <h1 class="page-title">Who we work with</h1>
            <?php
              the_archive_description( '<p class="lead taxonomy-description">', '</p>' );
            ?>
          </header>
      </div>
      
      <div class="col-md-12">
        <ul id="breadcrumbs" class="breadcrumb">
          <li class="item-home">
            <a class="bread-link bread-home" href="<?php echo home_url(); ?>" title="Home">Home</a>
          </li>
          <li class="separator separator-home"> &gt; </li>
          <li class="item-current item-19"><span class="bread-current bread-19">Who we work with</span></li>
        </ul>
      </div>
    </div>
  </div>

	<div id="primary" class="container">
      <main id="main" class="row" role="main">

		<?php if ( have_posts() ) : ?>
        
      <?php $archive_counter = 1 ;?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
        if($archive_counter % 5 == 0) {echo '<div class="col-md-12"></div>';}?>
        <div class="col-md-3">
        <article id="post-<?php the_ID(); ?>" <?php post_class('artist-article'); ?>>
          <div class="row">

            <div class="col-md-12">
              <?php if ( has_post_thumbnail() ) :?>
                <a href="<?php the_permalink() ;?>">
                  <?php the_post_thumbnail('medium', array('class' => 'img-responsive img-full')); ?>
                </a>
              <?php else :?>
                <a href="<?php the_permalink() ;?>">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri() . "/images/news.jpg"; ?>" alt="News">    
                </a>
              <?php endif ;?>
              <div class="block">
                <header class="entry-header">
                  <?php the_title( sprintf( '<h3 class="category-title artist-title single-line-heading"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
                </header><!-- .entry-header -->
              </div>
              
            </div>

          </div>
        </article><!-- #post-## -->
          </div>

        <?php $archive_counter++ ;?>
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main plugin-->
      
      
    </div>
	</div><!-- #primary -->


<?php get_footer(); ?>
