
    </div><!-- content -->
    <div class="footer">
      <div class="block">
        <div class="line1 cf">
          <div class="col col7">
            <div class="hor-menu">
              <?php wpeHeadNav(); ?>
            </div>
          </div>
          <div class="col col4">
            <a class="mail-me" href="mailto:almaty@onclinic.kz"><i></i><span class="dotted">Написать нам</span></a>
          </div>
        </div>
        <div class="line2 cf">
          <div class="col col6">
            <p class="text">Звоните нам ежедневно с 8:00 до 20:00</p>
            <ul class="f-nums">
              <li>
                <a href="tel:+7 (727) 250-10-05">8 (727) 250-10-05</a>
              </li>
              <li>
                <a href="tel:+7 (707) 250-10-05">8 (707) 250-10-05</a>
              </li>
              <li>
                <a href="tel:+7 (705) 250-10-05">8 (705) 250-10-05</a>
              </li>
            </ul>
          </div>
          <div class="col col3">
            <p class="text">Мы в социальных сетях:</p>
            <div class="social">
              <a class="fb" target="_blank" rel="nofollow" title="Фейсбук" href="https://www.facebook.com/onclinic"></a>
              <a class="vk" target="_blank" rel="nofollow" title="Вконтакте" href="http://vk.com/onclinic"></a>
            </div>
          </div>
        </div>
        <div class="line3 cf">
          <div class="col col7 copiright">
            © Международный медицинский центр On Clinic (Он Клиник) 2002-2015
          </div>
          <div class="col col4 stat">
            <img src="http://counter.yadro.ru/hit?t41.1;r;s1920*1080*24;uhttp%3A//onclinic.kz/;0.9837585629429668" alt="" title="LiveInternet" border="0" width="31" height="31" style="display: none !important;">
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php wp_footer(); ?>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      if (typeof sliders === "undefined") {
        var sliders = new Array();
      }
      sliders['bx-gallery-0'] = $('#bx-gallery-0 .bxslider').bxSlider({

        pagerCustom: '#bx-gallery-0 .bxpager',

        adaptiveHeight: false,
        auto: true,
        mode: 'horizontal',
        speed: 500,
        pause: 2000,
      });

      if (typeof pagers === "undefined") {
        var pagers = new Array();
      }
      pagers['bx-gallery-0'] = $('#bx-gallery-0 .bxpager').bxSlider({
        minSlides: 4,
        maxSlides: 10,
        slideWidth: 60,
        slideMargin: 5,
        slideMove: 0
      });

    });
  </script>

</body>
</html>
