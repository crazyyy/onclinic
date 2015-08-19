<?php /* Template Name: Doctors Page */ get_header(); ?>
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
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
      <div class="s-p-content">

        <?php

          $terms = get_terms( 'doctors-category' );

          if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){



             foreach ( $terms as $term ) {
              echo '<h3>' . $term->name . '</h3>';
              echo '<div class="doctors-rubrik-list cf">';
              $args = array(
                'post_type' => 'doctors',
                'tax_query' => array(
                  array(
                    'taxonomy' => 'doctors-category',
                    'field' => 'slug',
                    'terms' => $term->slug
                    )
                  ),
                );

              query_posts($args);

              if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>

        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><p class="in"><?php if ( has_post_thumbnail()) :
          the_post_thumbnail('medium');
        else: ?>
          <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
        <?php endif; ?><span><?php the_title(); ?></span></p></a>

      <?php endwhile;
        echo '</div><!-- doctors-rubrik-list cf -->';
      endif; wp_reset_query(); ?>






   <?php






             }



          }
        ?>
















      </div><!-- s-p-content -->





    </div>
    <!-- end content -->
  </div>
<?php get_footer(); ?>
