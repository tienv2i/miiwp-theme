<?php

/**
 * Template Name: No title
 * The template for displaying all pages
 *
 */

get_header();
?>

<div id="content" class="site-content container">
  <div id="primary" class="content-area">

    <!-- Hook to add something nice -->
    <?php bs_after_primary(); ?>

    <div class="row">
      <div class="col-md-8 col-xxl-9">

        <main id="main" class="site-main">
          <?php the_post(); ?>

          <div class="entry-content mt-4">
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

        </main><!-- #main -->

      </div><!-- col -->
      <?php get_sidebar(); ?>
    </div><!-- row -->

  </div><!-- #primary -->
</div><!-- #content -->

<?php
get_footer();
