<header class="header">

  <div class="container">
    <div class="header__wrapper">
      <div class="header__logos">
        <img src="img/header/synergy.svg" alt="Логотип - Университет Синергия" class="header__logos-img">

      </div>

      <nav class="header__nav">
        <ul class="header__list">
          <a href="#teachers" class="header__link scroll-link">
            <li>Преподаватели</li>
          </a>
          <a href="#program" class="header__link scroll-link">
            <li>Программа</li>
          </a>
          <a href="#format" class="header__link scroll-link">
            <li>Формат</li>
          </a>
        </ul>

        <div class="header__nav-phone">
          <a href="<?= $phone_link ?>" class=""><?= $phone ?></a>
        </div>

        <div class="header__nav-button">
          <a href="#popup-reg" data-fancybox class="header__button-link">Участвовать</a>
        </div>
      </nav>

      <div class="header__nav-mob">
        <a href="<?= $phone_link ?>" class="header__phone-mob">
          <img src="img/header/phone.svg" alt="icon phone">
        </a>
        <div class="burger__menu">
          <svg class="ham hamRotate hamR" viewBox="0 0 100 100" width="35" onclick="this.classList.toggle('active')">
            <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
            <path class="line middle" d="m 70,50 h -40" />
            <path class="line bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
          </svg>
        </div>
      </div>

    </div>
  </div>
</header>
