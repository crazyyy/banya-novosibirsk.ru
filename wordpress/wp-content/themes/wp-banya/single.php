<?php get_header(); ?>

    <div class="white-layer"></div>
    <div itemscope="" itemtype="http://schema.org/Article" class="container">

      <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>

      <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <div class="row">
          <div class="col-xs-12 col-md-9 col-md-offset-3 text-center">
            <h1 itemprop="name headline"><?php the_title(); ?></h1>
          </div>
        </div>

        <div class="row">
          <div class="article-detail-wrapper">

            <?php get_sidebar(); ?>

            <div class="col-xs-12 col-md-9">
              <div class="padding-left-15 content" id="publication-content">
                <div>
                  <?php the_content(); ?>
                </div>

                <?php get_template_part('prevnext'); ?>

              </div><!-- publication-content -->
            </div>

          </div><!--/article-detail-wrapper -->
        </div>
      <?php endwhile; endif; ?>

    </div>


<?php get_footer(); ?>
