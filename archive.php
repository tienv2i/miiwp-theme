<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

get_header();
?>

<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <!-- Hook to add something nice -->
    <?php bs_after_primary(); ?>
    <header class="page-header border-bottom text-center py-4">
        <h1><?php the_archive_title(); ?></h1>
        <?php the_archive_description('<div class="archive-description">', '</div>'); ?>
    </header>
    <main id="main" class="site-main container">
      <div class="row">
        <div class="col border-start border-end py-3">
          <!-- Grid Layout -->
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <div class="card horizontal mb-4 rounded-0 border-0 border-bottom">
                <div class="row">
                  <!-- Featured Image-->
                  <?php if (has_post_thumbnail())
                    echo '<div class="card-img-left-md col-lg-5">' . get_the_post_thumbnail(null, 'medium', ['class' => 'rounded-0']) . '</div>';
                  ?>
                  <div class="col">
                    <div class="card-body">

                      <?php bootscore_category_badge(); ?>

                      <!-- Title -->
                      <h2 class="blog-post-title">
                        <a href="<?php the_permalink(); ?>">
                          <?php the_title(); ?>
                        </a>
                      </h2>
                      <!-- Meta -->
                      <?php if ('post' === get_post_type()) : ?>
                        <small class="text-muted mb-2">
                          <?php
                          bootscore_date();
                          bootscore_author();
                          bootscore_comments();
                          bootscore_edit();
                          ?>
                        </small>
                      <?php endif; ?>
                      <!-- Excerpt & Read more -->
                      <div class="card-text mt-auto">
                        <?php the_excerpt(); ?> <a class="read-more" href="<?php the_permalink(); ?>"><?php _e('Read more »', 'bootscore'); ?></a>
                      </div>
                      <!-- Tags -->
                      <?php bootscore_tags(); ?>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>

          <!-- Pagination -->
          <div>
            <?php bootscore_pagination(); ?>
          </div>

          </div><!-- col -->

        <?php get_sidebar(); ?>
      </div><!-- row -->
    </main><!-- #main -->
  </div><!-- #primary -->
</div><!-- #content -->

<?php
get_footer();
