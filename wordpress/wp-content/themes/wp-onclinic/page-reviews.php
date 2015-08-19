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

        <?php

          $terms = get_terms( 'reviews-category' );
          $x = 0;
          if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
             echo '<ul class="department">';
             foreach ( $terms as $term ) {
               echo '<li><a href="' . home_url() . '/reviews-category/'. $term->slug . '">' . $term->name . '</a></li>';
               $x++;
             }
             echo '</ul>';
          }
        ?>


        </div>

        <div class="col col3">
          <a class="dotted fs19 writerew">Написать отзыв</a>
        </div>
      </div><!-- otd-filter cf -->

      <div class="comments">
        <ul>
           <?php if (have_posts()): while (have_posts()) : the_post(); ?>
          <li>
            <div class="name">
              <?php the_title(); ?>, <span class="date"><?php the_time('d F Y'); ?></span>
            </div><!-- name -->
            <div class="text">
              <?php the_content(); ?>
            </div><!-- text -->
          </li>
          <?php endwhile; wp_reset_query(); ?>
        </ul>

        <?php get_template_part('pagination'); ?>

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
