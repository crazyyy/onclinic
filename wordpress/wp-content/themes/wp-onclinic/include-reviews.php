<div class="col col6">
  <h2>Пациенты о нас</h2>
  <div class="rewiews-list">
    <ul>
      <?php
        query_posts( array(
        'post_type' => reviews,
        'showposts' => 3   )
        );
      ?>
      <?php while ( have_posts() ) : the_post(); ?>

      <li><span class="text"><?php wpeExcerpt('wpeExcerpt20'); ?></span> <a class="dotted">Показать все</a><span class="dn"><?php the_content(); ?></span></li>

      <?php endwhile; ?>
    </ul>
    <div class="see-all-rew"><a class="button" href="<?php echo home_url(); ?>/reviews-category/o-klinike">Читать все отзывы</a></div>
  </div>
</div>
