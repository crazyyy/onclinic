<?php get_header(); ?>
<div class="content static-page">
  <div class="block cf">
    <div class="cont-l">
      <?php get_sidebar(); ?>
    </div>
    <!-- content -->
    <div class="cont-r">

      <h1 class="ctitle"><?php _e( 'Page not found', 'wpeasy' ); ?></h1>
      <div class="s-p-content">
        <h2><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wpeasy' ); ?></a></h2>
      </div>
    </div>
    <!-- end content -->
  </div>
<?php get_footer(); ?>
