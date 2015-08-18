<?php /* Template Name: Reviews Page */ get_header(); ?>
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

      <div class="otd-filter cf">
        <div class="col col6">



          <select id="department" name="department">
            <?php if( have_rows('servicesprices') ):
              $x = 0;
              while ( have_rows('servicesprices') ) : the_row();
            $x++; ?>

            <option value="<?php echo $x ?>" <?php if ( $x < 2 ) { echo 'selected="selected"'; } ?>><?php the_sub_field('fulltitle'); ?></option>

            <?php endwhile; endif; ?>

          </select>
        </div>

        <div class="col col3">
          <a class="dotted fs19">Написать отзыв</a>
        </div>
      </div><!-- otd-filter cf -->

      <div class="comments">
        <ul>
          <li>
            <div class="name">
              Пациент№ 10041, Семья спортсменов, <span class="date">15.08.2015</span>
            </div><!-- name -->
            <div class="text">
              <p>Была трещина кишки, как всегда неудобно, ложное стеснение, короче запустил болезнь пока не надоело терпеть. Начал выбирать клиннику, в достармеде обжегся шаг в любую сторону плати, еще в догонку поставили не тот диагноз. Решил обратится в Он Клиник, встал выбор врача. По фото меньше всего хотел попасть к Муканову Амиру Сабитовичу, но так получилось, что к нему и попал. В результате не желаю, четко все грамотно рассказал, показал на фото проблему. Грамотно убедил на операцию. На операцию шел с волнением. Но в итоге операцию делали не более 10минут. Самое неприятное укол, но не больнее чем у зубного, все остальное без никакой боли. Очень рад что попал именно к Амиру Сабитовичу, он врач от Бога. С уважением семья спортсменов.</p>
            </div><!-- text -->
          </li>
        </ul>

        <div class="paginator">
          <span class="page-numbers current">1</span>
        </div>

        <div id="add-rewiew-bottom" class="add-rewiew add-rewiew-page">
          <div class="h2center">
            <h2>Написать отзыв</h2>
          </div>

          <form id="commentform" class="comment-form" action="http://onclinic.kz/wp-comments-post.php" method="post">
            <div class="form-body">
              <div class="line cf">
                <div class="col col4">
                  Ваше имя
                </div>
                <div class="col col7">
                  <input id="author" type="text" size="30" value="" name="author">
                  <input id="email" name="email" type="hidden" value="no@mail.net">
                </div>
              </div><!-- line cf -->

              <div class="line cf">
                  <div class="col col4">
                      Отделение <span class="required">*</span>
                  </div>
                  <div class="col col7">
                      <select id="department" name="department">
                          <option value="1">Отзыв о клинике</option>
                    <option value="3">Урология</option>
                    <option value="3|68">&nbsp;&nbsp;&nbsp;Волков Алексей Фадеевич</option><option value="3|71">&nbsp;&nbsp;&nbsp;Дыбов Юрий Александрович</option><option value="3|61">&nbsp;&nbsp;&nbsp;Раздорский Константин Владимирович</option><option value="3|65">&nbsp;&nbsp;&nbsp;Скипин Станислав Георгиевич</option>                                    <option value="4">Проктология</option>
                          <option value="4|1384">&nbsp;&nbsp;&nbsp;Гопкало Эдуард Борисович</option><option value="4|238">&nbsp;&nbsp;&nbsp;Замахова Елена Григорьевна</option><option value="4|235">&nbsp;&nbsp;&nbsp;Кульжабеков Акжол Жаксигельдиевич</option><option value="4|241">&nbsp;&nbsp;&nbsp;Муканов Амир Сабитович</option><option value="4|1387">&nbsp;&nbsp;&nbsp;Сибаева Эльмира Омаровна</option>                              <option value="2">Гинекология</option>
                          <option value="2|250">&nbsp;&nbsp;&nbsp;Алдынгурова Алия Балтабековна</option><option value="2|244">&nbsp;&nbsp;&nbsp;Гичева Татьяна Николаевна</option><option value="2|247">&nbsp;&nbsp;&nbsp;Ким Лариса Семёновна</option><option value="2|253">&nbsp;&nbsp;&nbsp;Салыкбаева Гульжан Жумагалиевна</option>                                    <option value="5">Неврология</option>
                          <option value="5|174">&nbsp;&nbsp;&nbsp;Воробьева Елена Михайловна</option>                                    <option value="6">Дерматология</option>
                          <option value="6|162">&nbsp;&nbsp;&nbsp;Чмеленко Галина Анатольевна</option>                                    <option value="9">Гастроэнтерология</option>
                          <option value="9|166">&nbsp;&nbsp;&nbsp;Барбасова Людмила Васильевна</option>                                    <option value="7">Отоларингология</option>
                          <option value="7|169">&nbsp;&nbsp;&nbsp;Касымхан Анара Сериккызы</option>                                    <option value="16">Эндокринология</option>
                          <option value="16|6352">&nbsp;&nbsp;&nbsp;Хайбулина Альбина Камильевна</option>                                    <option value="14">Узи</option>
                          <option value="14|262">&nbsp;&nbsp;&nbsp;Балтабаева Зауре Сарсебаевна</option><option value="14|1399">&nbsp;&nbsp;&nbsp;Умурзакова Хорлан Маликовна</option>                                </select>
                  </div>
              </div>
              <div class="line cf">
                  <div class="col col4">
                      Номер карты пациента <span class="required">*</span>
                  </div>
                  <div class="col col7">
                      <input id="card_no" type="text" size="30" value="" name="card_no">
                  </div>
              </div>
              <div class="line cf">
                  <div class="col col4">
                      Ваш отзыв <span class="required">*</span>
                  </div>
                  <div class="col col7">
                      <textarea id="comment" aria-required="true" rows="5" cols="65" name="comment"></textarea>
                  </div>
              </div>
              <div class="line cf">
                  <div class="col col4">
                      &nbsp;
                  </div>
                  <div class="col col7 cf">
                      <div class="col col2">
                          <a class="button"> Добавить отзыв </a>
                          <input type="hidden" name="comment_post_ID" value="190" id="comment_post_ID">
                          <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                      </div>
                      <div class="col col2">
                          <div class="moder">Отзыв будет опубликован после проверки модератором.</div>
                      </div>
                  </div>
              </div>
            </div><!-- form-body -->
            <input type="hidden" id="ak_js" name="ak_js" value="1439886392672">
          </form>
        </div>
      </div>











    </div>
    <!-- end content -->
  </div>
<?php get_footer(); ?>


<!--
<?php /* Template Name: All VPN Page */ get_header(); ?>
  <div class="vpn_wrapper">

    <div class="vpn_head">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>

    <div class="loop_wrapper vpn_loop_wrapper clearfix">

      <?php
      $temp = $wp_query;
      $wp_query= null;
      query_posts('post_type=servers'.'&showposts=100');
      while (have_posts()) : the_post();?>

      <div class="vpn post clearfix">
        <a href="<?php the_permalink(); ?>" class="vpn_pre" style="background-image: url('<?php the_field('background_image'); ?>');">
          <div class="vpn_content clearfix">
            <div class="vpn_info">
              <h2><?php the_title(); ?></h2>
              <b><?php the_field('price'); ?></b> / mo
            </div>
          </div>
        </a>
      </div><!-- vpn post clearfix -->

      <?php endwhile; ?>
      <?php $wp_query = null; $wp_query = $temp;?>

    </div><!-- loop_wrapper vpn_loop_wrapper -->
  </div><!-- vpn_wrapper -->
<?php get_footer(); ?>
 -->
