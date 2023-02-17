<footer class="footer" id="footer">
  <div class="container">
    <div class="footer__wrapper">
      <div class="footer__logos">
        <img src="img/header/synergy.svg" alt="Логотип - Университет Синергия" class="header__logos-img">
        <!-- <img src="img/header/timati.svg" alt="Логотип - Тимати" class="header__logos-img"> -->
      </div>

      <nav class="footer__nav">
          <a href="#teachers" class="footer__link scroll-link"><li>Преподаватели</li></a>
          <a href="#program" class="footer__link scroll-link"><li>Программа</li></a>
          <a href="#format" class="footer__link scroll-link"><li>Формат</li></a>
      </nav>

      <div class="footer__contacts">
        <a href="<?= $phone_link ?>" class="footer__contacts-phone"><?= $phone ?></a>
        <a href="mailto:<?= $mail ?>" class="footer__contacts-mail"><?= $mail ?></a>
      </div>
    </div>

    <div class="footer__policy">
      <p class="footer__policy-link">&copy; <?= date('Y') ?> Synergy. Все права защищены</p>
      <a href="#privacy" class="footer__policy-link" data-fansybox >Политика конфиденциальности</a>
      <a href="files/file.pdf" class="footer__policy-link" target="_blank">Публичная оферта</a>
    </div>

  </div>
</footer>


<section class="bottom-scroll">
  <button href="#popup-reg" data-fancybox class="bottom-scroll__button">Записаться</button>
</section>
