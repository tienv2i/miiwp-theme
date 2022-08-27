<?php
/*
	 * Template Post Type: post
	 */

get_header();  ?>

<div id="content" class="site-content">
  <?php the_post(); ?>

  <div id="primary" class="content-area">

    <!-- Hook to add something nice -->
    <header class="border-bottom pb-4">
      <div class="container">
        <?php bs_after_primary(); ?>
        <?php the_breadcrumb(); ?>
        <?php the_title('<h1 class="text-center">', '</h1>'); ?>
      </div>
    </header>
    <main id="site-main" class="container border-start" >
    <div class="row">
      <div class="col-md-8 col-xxl-9 border-end p-4">
          <header class="entry-header border-bottom mb-4">
            <?php bootscore_category_badge();?>
            <p class="entry-meta">
              <small class="text-muted">
                <?php
                bootscore_date();
                _e(' by ', 'miiwp');
                the_author_posts_link();
                bootscore_comment_count();
                ?>
              </small>
            </p>
            <?php bootscore_post_thumbnail(); ?>
          </header>

          <div class="entry-content">
            <?php the_content(); ?>
          </div>

          <footer class="entry-footer clear-both border-bottom mb-4">
            <div class="mb-4">
              <?php bootscore_tags(); ?>
            </div>
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-item">
                  <?php previous_post_link('%link'); ?>
                </li>
                <li class="page-item">
                  <?php next_post_link('%link'); ?>
                </li>
              </ul>
            </nav>
          </footer>

          <?php comments_template(); ?>
      </div><!-- col -->
      <?php get_sidebar(); ?>
    </div><!-- row -->
  </main>

  </div><!-- #primary -->
</div><!-- #content -->

<?php get_footer(); ?>