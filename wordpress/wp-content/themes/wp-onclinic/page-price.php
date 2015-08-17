<?php /* Template Name: Price Page */ get_header(); ?>
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
      <div class="s-p-content">
        <?php the_content(); ?>
        <div class="prices cf">

          <div class="tabs-block">
            <div class="tabs">

              <?php if( have_rows('servicesprices') ):
                $i = 0;
                while ( have_rows('servicesprices') ) : the_row(); ?>
                <?php $i++; ?>

                <span <?php
                        if ( $i < 2 ) {
                          echo 'class="active"';
                        } else {
                          echo 'class=""';
                        }
                      ?>><?php the_sub_field('name'); ?></span>

                <?php endwhile; endif; ?>

            </div><!-- tabs -->
          </div><!-- tabs-block -->

            <?php if( have_rows('servicesprices') ):
              $x = 0;
              while ( have_rows('servicesprices') ) : the_row(); ?>
              <?php $x++; ?>

              <div class="price-block <?php
                      if ( $x < 2 ) {
                        echo '';
                      } else {
                        echo 'dn';
                      }
                    ?>">
                <div class="price-body">
                  <h2><?php the_sub_field('fulltitle'); ?></h2>
                  <?php the_sub_field('servicelist'); ?>
                  <div class="price">
                    <p><span>Стоимость комплексной диагностики</span><b><?php the_sub_field('price'); ?></b></p>
                    <p><span>Стоимость при записи на прием онлайн</span><b class="b"><?php the_sub_field('priceonline'); ?> <small>скидка 20%</small></b></p>
                  </div>
                </div>
              </div><!-- price-block dn -->

              <?php endwhile; endif; ?>

        </div><!-- prices cf -->
      </div>
    </div>
    <!-- end content -->
  </div>
<?php get_footer(); ?>
