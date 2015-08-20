<?php /* Template Name: Order Page */ get_header(); ?>
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
        <div id="zapis-na-priem" class="add-rewiew">
        <?php echo do_shortcode('[contact-form-7 id="120" title="Запись"]'); ?>
        </div><!-- zapis-na-priem -->
      </div>
    </div>
    <!-- end content -->
  </div>
<?php get_footer(); ?>
