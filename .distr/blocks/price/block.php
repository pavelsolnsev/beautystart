<section class="price" id="price">
  <div class="container">
  <h2 class="section-title price__title">Стоимость курсов</h2>

  <div class="price__card">

    <div class="price__wrapper">

      <div class="price__item" data-card>

        <div class="price__tag price__tag--pay">
          <div class="price__tag-title">Эксперт 20 мест</div>
          <div class="price__item">
            <div class="price__item-id"><?=$product_expert?></div>
            <h4 class="price__item-title">В стоимость входят:</h4>
            <ul class="price__item-list">
              <li class="price__item-point">Доступ к&nbsp;записи курса на&nbsp;3&nbsp;месяца (все модули)</li>
              <li class="price__item-point">Полный комплект материалов курса (чек-листы, шаблоны, договоры, презентации спикеров)</li>
              <li class="price__item-point">Доступ на образовательную платформу synergy.online 10 000 часов образовательного контента и записи форумов Школы Бизнеса Синергия</li>
              <li class="price__item-point">Именной сертификат о пройденном обучении</li>
              <li class="price__item-point">Домашние задания по прохождению каждого модуля</li>
              <li class="price__item-point">Посещение форума Школы Бизнеса Синергия категория Standart (очно или онлайн)</li>
            </ul>
          </div>
          <div class="price__tag-oldfrice">80&nbsp;000&nbsp;₽</div>
          <div class="price__tag-price" data-price><?=$expert_price?><span>₽</span></div>
          <p class="price__tag-description">(При единовременной оплате)</p>

          <a href="#popup-pay-expert" data-fancybox class="price__tag-button">Купить</a>
        </div>

        <div class="price__tag">
          <div class="price__tag-title" data-title>Рассрочка</div>
          <div class="price__tag-oldfrice"></div>
          <div class="price__tag-price">8&nbsp;750&nbsp;₽</div>
          <p class="price__tag-description">(При рассрочке на&nbsp;6&nbsp;месяцев)</p>
          <p class="price__tag-description">Первый платеж&nbsp;&mdash; через месяц после старта курса</p>
          <?php if ($partner) { ?>
            <a href="#popup-reg" data-fancybox class="price__tag-button">Оформить рассрочку</a>
          <?php } else { ?>
            <!-- <div class="price__tag-button" data-installment>Оформить рассрочку</div> -->
            <a href="#popup-reg" data-fancybox class="price__tag-button">Оформить рассрочку</a>
          <?php } ?>
          

        </div>
        
      </div>

    </div>

    <div class="price__wrapper">

      <div class="price__item" data-card>

        <div class="price__tag price__tag--pay">
          <div class="price__tag-title">Бизнес (с экскурсией) 5 мест</div>
          <div class="price__item">
            <div class="price__item-id"><?=$product_business?></div>
            <h4 class="price__item-title">В стоимость входят:</h4>
            <ul class="price__item-list">
              <li class="price__item-point">Доступ к&nbsp;записи курса на&nbsp;3&nbsp;месяца (все модули)</li>
              <li class="price__item-point">Полный комплект материалов курса (чек-листы, шаблоны, договоры, презентации спикеров)</li>
              <li class="price__item-point">Доступ на образовательную платформу synergy.online 10 000 часов образовательного контента и записи форумов Школы Бизнеса Синергия</li>
              <li class="price__item-point">Именной сертификат о пройденном обучении</li>
              <li class="price__item-point">Домашние задания по прохождению каждого модуля</li>
              <li class="price__item-point">Посещение форума Школы Бизнеса Синергия категория Business (онлайн или очно)</li>
              <li class="price__item-point">Второй онлайн - курс в подарок на выбор от школы бизнеса Синергия (24 курса на выбор) себе или коллегам</li>
              <li class="price__item-point">Участие в одном из самых крупных событий в beauty - индустрии Synergy Beauty Forum (онлайн или очно)</li>
              <li class="price__item-point">Экскурсия в один из действующих салонов салонов красоты с практикой</li>
            </ul>
          </div>
          <div class="price__tag-oldfrice">110&nbsp;000&nbsp;₽</div>
          <div class="price__tag-price" data-price><?=$business_price?><span>₽</span></div>
          <p class="price__tag-description">(При единовременной оплате)</p>
          <a href="#popup-pay-business" data-fancybox class="price__tag-button">Купить</a>
        </div>

        <div class="price__tag">
          <div class="price__tag-title" data-title>Рассрочка</div>
          <div class="price__tag-oldfrice"></div>
          <div class="price__tag-price">13&nbsp;000&nbsp;₽</div>
          <p class="price__tag-description">(При рассрочке на&nbsp;6&nbsp;месяцев)</p>
          <p class="price__tag-description">Первый платеж&nbsp;&mdash; через месяц после старта курса</p>
          <?php if ($partner) { ?>
            <a href="#popup-reg" data-fancybox class="price__tag-button">Оформить рассрочку</a>
          <?php } else { ?>
            <!-- <div class="price__tag-button" data-installment>Оформить рассрочку</div> -->
            <a href="#popup-reg" data-fancybox class="price__tag-button">Оформить рассрочку</a>
          <?php } ?>
          

        </div>
        
      </div>

    </div>

  </div>

  </div>
</section>
