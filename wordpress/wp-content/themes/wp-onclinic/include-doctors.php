<div class="col col3">
  <h2>Наши врачи</h2>
  <div class="doc-slider cf">
    <div class="doc-sl-control"><span class="doc-sl-left noselect"><i></i></span><span class="doc-sl-right noselect"><i></i></span></div>
    <div class="doc-sl-items">
      <ul class="cf">

        <?php
          query_posts( array(
          'post_type' => doctors,
          'showposts' => 5   )
          );
        ?>
        <?php while ( have_posts() ) : the_post(); ?>

          <li>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
              <div class="border">
                <p class="img"><?php if ( has_post_thumbnail()) :
                  the_post_thumbnail('medium');
                else: ?>
                  <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                <?php endif; ?></p>
              </div>
              <p class="name"><?php the_title(); ?></p></a>
          </li>

        <?php endwhile; ?>

        <li><a class="see-all-docs" href="<?php echo home_url(); ?>/doctors">Все врачи клиники</a></li>
      </ul>
    </div>
  </div>
  <div class="doc-q-main"><a class="button" href="<?php echo home_url(); ?>/zadat-vopros.htm">Задать вопрос врачу</a></div>
</div>
