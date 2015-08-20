<?php get_header(); ?>
<div class="content static-page">
  <div class="block cf">
    <div class="cont-l">
      <?php get_sidebar(); ?>
    </div>

    <!-- content -->
    <div class="cont-r">
      <div class="brcr">
        <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
      </div>
      <h1><?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); echo $term->name; ?></h1>

      <div class="otd-filter cf">
        <div class="col col12">
          <a class="dotted fs19 writerew">Написать отзыв</a>
        </div>
      </div><!-- otd-filter cf -->

      <div class="comments">
        <ul>
          <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <li>
              <div class="name">
                <?php the_title(); ?>, <span class="date"><?php the_time('d F Y'); ?></span>
              </div><!-- name -->
              <div class="text">
                <?php the_content(); ?>
              </div><!-- text -->
            </li>
          <?php endwhile; endif; ?>
        </ul>

        <?php get_template_part('pagination'); ?>

        <div id="add-rewiew-bottom" class="add-rewiew add-rewiew-page">
          <div class="h2center">
            <h2>Написать отзыв</h2>
          </div>

          <?php echo do_shortcode('[contact-form-7 id="118" title="Отзыв"]'); ?>
        </div>
      </div>

    </div>
    <!-- end content -->
  </div>
<?php get_footer(); ?>
