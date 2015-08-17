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
      <h1 class="cat-title"><?php the_category(', '); ?></h1>
      <div class="s-p-content rubrika-text">
        <?php get_template_part('loop'); ?>

      </div>
    </div>
    <?php get_template_part('pagination'); ?>
    <!-- end content -->
  </div>
<?php get_footer(); ?>
