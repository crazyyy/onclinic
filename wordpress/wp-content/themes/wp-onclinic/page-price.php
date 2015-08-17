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
                        if ( $i < 1 ) {
                          echo 'class="active"';
                        } else {
                          echo 'class=""';
                        }
                      ?>><?php the_sub_field('name'); ?></span>

              <?php endwhile; endif; ?>

            </div><!-- tabs -->
          </div><!-- tabs-block -->

          <div class="price-block">
            <div class="price-body">
              <h2>Урология для мужчин</h2>
              <ul>
                <li>
                  УЗИ предстательной железы
                </li>
                <li>
                  Исследование кровотока сосудов полового члена (доплерография)
                </li>
                <li>
                  Определение чувствительности полового члена (биотезиометрия)
                </li>
                <li>
                  Тест вазоактивными веществами
                </li>
                <li>
                  Обследование предстательной железы
                </li>
                <li>
                  Физикальное обследование пациента
                </li>
                <li>
                  Измерение артериального давления
                </li>
                <li>
                  Общий анализ крови *
                </li>
                <li>
                  Общий анализ мочи *
                </li>
                <li>
                  Анализ крови на микрореакцию *
                </li>
                <li>
                  Консультация доктора
                </li>
              </ul>
              <div class="price">
                <p><span>Стоимость комплексной диагностики</span><b>6900</b></p>
                <p><span>Стоимость при записи на прием онлайн</span><b class="b">5500 <small>скидка 20%</small></b></p>
              </div>
              <h2>Урология для женщин</h2>
              <ul>
                <li>
                  Беседа с врачом (сбор анамнеза)
                </li>
                <li>
                  УЗИ почек
                </li>
                <li>
                  УЗИ мочевого пузыря
                </li>
                <li>
                  Измерение артериального давления
                </li>
                <li>
                  Общий анализ мочи *
                </li>
                <li>
                  Консультация доктора
                </li>
              </ul>
              <div class="price">
                <p><span>Стоимость комплексной диагностики</span><b>4800</b></p>
                <p><span>Стоимость при записи на прием онлайн</span><b class="b">3800 <small>скидка 20%</small></b></p>
              </div>
            </div>
          </div><!-- price-block -->

          <div class="price-block dn">
            <div class="price-body">
              <h2>Проктология</h2>
              <ul>
                <li>Физикальное обследование пациента</li>
                <li>Аноскопия</li>
                <li>Ректороманоскопия</li>
                <li>Пальцевое обследование прямой кишки</li>
                <li>Общий анализ крови *</li>
                <li>Анализ крови на микрореакцию *</li>
                <li>Измерение артериального давления</li>
                <li>Консультация доктора</li>
              </ul>
              <div class="price">
                <p><span>Стоимость комплексной диагностики</span><b>5800</b></p>
                <p><span>Стоимость при записи на прием онлайн</span><b class="b">4700 <small>скидка 20%</small></b></p>
              </div>
            </div>
          </div><!-- price-block dn -->


        </div><!-- prices cf -->
      </div>
    </div>
    <!-- end content -->
  </div>
<?php get_footer(); ?>
