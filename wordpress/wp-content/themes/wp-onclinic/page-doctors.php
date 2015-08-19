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

              $termSlug = $term->slug;

              echo $term->slug;




$args = array(
    'post_type' => 'doctors',
    'tax_query' => array(
        array(
            'taxonomy' => 'doctors-category',
            'field' => 'slug',
            'terms' => $term->slug
        )
     )
);

$query = new WP_Query($args);

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post;
        // do something
        the_title();
    }
}















              echo '<li><a href="' . home_url() . '/doctors-category/'. $term->slug . '">' . $term->name . '</a></li>';


             }


             echo '</ul>';
          }
        ?>












        <div class="doctors-rubrik-list cf">
        <a href="http://onclinic.kz/urologi/dybov/"><p class="in"><img src="http://onclinic.kz/wp-content/uploads/2014/07/dybov.jpg"><span>Дыбов Юрий Александрович</span></p></a>


        <a href="http://onclinic.kz/urologi/volkov/"><p class="in"><img src="http://onclinic.kz/wp-content/uploads/2014/07/volkov.jpg"><span>Волков Алексей Фадеевич</span></p></a><a href="http://onclinic.kz/urologi/skipin/"><p class="in"><img src="http://onclinic.kz/wp-content/uploads/2014/07/skipin.jpg"><span>Скипин Станислав Георгиевич</span></p></a><a href="http://onclinic.kz/urologi/razdorskiy/"><p class="in"><img src="http://onclinic.kz/wp-content/uploads/2014/07/razdorskiy-300x300.jpg"><span>Раздорский Константин Владимирович</span></p></a>

        </div><!-- doctors-rubrik-list cf -->


      </div><!-- s-p-content -->





    </div>
    <!-- end content -->
  </div>
<?php get_footer(); ?>
