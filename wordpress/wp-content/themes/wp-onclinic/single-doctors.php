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
      <h1><?php the_title(); ?></h1>
      <div class="s-p-content clearfix">
        <div class="featureimg">
          <?php if ( has_post_thumbnail()) :
            the_post_thumbnail('medium');
          else: ?>
            <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
          <?php endif; ?>
        </div><!-- /.featureimg -->

        <?php the_content(); ?>






<?php

$posts = get_field('reviews');

if( $posts ): ?>
  <h2>Отзывы о враче</h2>





<div class="comments">
            <ul>



  <?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>

                        <li>
                <div class="name">
                    <?php echo get_the_title( $p->ID ); ?>, <span class="date"><?php echo get_the_date( '', $p->ID ); ?></span>
                </div>
                <div class="text">
                    <?php echo get_post_field('post_content', $p->ID); ?>
                </div>

                            </li>





  <?php endforeach; ?>
            </ul>
        </div><!-- comments -->
<?php endif; ?>







      </div>
    </div>
    <!-- end content -->
  </div>
<?php get_footer(); ?>
