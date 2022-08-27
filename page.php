<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

get_header();
the_post();
?>

<div id="content" class="site-content">
  <div id="primary" class="content-area">

    <!-- Hook to add something nice -->
    <?php bs_after_primary(); ?>

    <header class="text-center py-4 border-bottom">
      <!-- Title -->
      <?php the_title('<h1>', '</h1>'); ?>

    </header>
    <main id="main" class="site-main container">
    <div class="row">
      <div class="col-md-8 col-xxl-9 border-end border-start">


          <header class="entry-header py-4 text-center">

            <!-- Featured Image-->
            <?php bootscore_post_thumbnail(); ?>
            <!-- .entry-header -->
          </header>

          <div class="entry-content">
            <!-- Content -->
            <?php the_content(); ?>
            <!-- .entry-content -->
            <?php wp_link_pages(array(
              'before' => '<div class="page-links">' . esc_html__('Pages:', 'bootscore'),
              'after'  => '</div>',
            ));
            ?>
          </div>

          <footer class="entry-footer">

          </footer>
          <!-- Comments -->
          <?php comments_template(); ?>

      </div><!-- col -->
      <?php get_sidebar(); ?>
    </div><!-- row -->
  </main>
  </div><!-- #primary -->
</div><!-- #content -->

<?php
get_footer();
