<div class="entry-list">
 <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div class="entry cf">
    <div class="img">
      <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <?php if ( has_post_thumbnail()) :
          the_post_thumbnail('medium');
        else: ?>
          <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
        <?php endif; ?>
      </a><!-- /post thumbnail -->
    </div>
    <div class="text">
      <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3> <?php wpeExcerpt('wpeExcerpt40'); ?>
    </div>
  </div>
<?php endwhile; else: ?>
  <div>
    <h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
  </div><!-- /article -->
<?php endif; ?>
</div><!-- entry-list -->
