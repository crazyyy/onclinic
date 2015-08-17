<?php get_header(); ?>
    <div class="content">
      <div class="block cf">
        <?php get_sidebar(); ?>
        <!-- content -->
        <div class="cont-r">
          <div class="s-p-content">
            <?php get_template_part('include-slider'); ?>

            <h1 class="h2 m30 upp b">Международный медицинский центр On Clinic в Алматы</h1>
            <div class="m20">
              <p class="taj">Он Клиник Алматы был открыт в 2002 году и является первым филиалом крупнейшей международной корпорации на территории Казахстана.</p>
              <p class="taj">За годы успешного развития на рынке частных медицинских услуг наши специалисты обрели бесценный практический опыт в области диагностики и лечения сексуальных расстройств у мужчин, проктологических и гинекологических заболеваний.</p>
              <p class="taj">Секрет успеха On Clinic — высокие стандарты лечения и сервиса. Доказательство тому — сотни тысяч благодарных пациентов и их семей.</p>
            </div>
            <div class="m40 cf">
              <?php get_template_part('include-reviews'); ?>

              <?php get_template_part('include-doctors'); ?>
            </div>
            <div class="m20">
              <h2>Почему Он Клиник?</h2>
              <div class="cf m10">
                <div class="col col2">
                  <ul class="o-list">
                    <li>Эффективные методики лечения</li>
                    <li>Многолетний опыт работы</li>
                    <li>Высококвалифицированный персонал</li>
                    <li>Современное оборудование</li>
                    <li>Отсутствие очередей</li>
                  </ul>
                </div>
                <div class="col col2">
                  <ul class="o-list">
                    <li>Индивидуальный подход в лечении</li>
                    <li>Конфиденциальность приемов</li>
                    <li>Работаем без выходных</li>
                    <li>Лечение без потери рабочего времени</li>
                    <li>Независимая лабораторная диагностика</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="main-bottom-order">
              <a class="button" href="<?php echo home_url(); ?>/zapis.htm">Записаться на прием к врачу</a>
            </div>
          </div>
        </div>
        <!-- end content -->
      </div>

<?php get_footer(); ?>
