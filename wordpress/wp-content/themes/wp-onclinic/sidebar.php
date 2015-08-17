<div class="cont-l">
  <div class="menu-left">
    <?php wpeSideNav(); ?>
  </div>
  <div class="banner-left">
    <a href="http://onclinic.kz/lechenie-v-izraile/">
      <img src="<?php echo get_template_directory_uri(); ?>/img/izrail.png">
    </a>
  </div>
</div>

<?php if ( is_active_sidebar('widgetarea1') ) : ?>
  <?php dynamic_sidebar( 'widgetarea1' ); ?>
<?php else : ?>

<?php endif; ?>
