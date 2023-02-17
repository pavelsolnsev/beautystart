<!DOCTYPE html>

<?php
$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
$query_string = http_build_query($_GET);
$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace( substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI'] ) : '') . ($query_string ? '?' . $query_string : '');
$URL = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$version = isset($_GET['version']) ? urldecode( strtolower($_GET['version']) ) : '';
$partner = isset($_GET['partner']) ? urldecode( strtolower($_GET['partner']) ) : '';

include_once $ROOT . 'config.php';
include_once $ROOT . 'version.php';
include_once $ROOT . 'elastic.php';
?>

<html lang="ru">
<head>
  <base href="<?= $BASE_HREF ?>">

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="description" content="<?= strip_tags($desc) ?>">
  <meta name="application-name" content="<?= strip_tags($title) ?>">
  <title><?= $title ?></title>

  <meta property="og:title" content="<?= strip_tags($title) ?>">
  <meta property="og:description" content="<?= strip_tags($desc) ?>">
  <meta property="og:url" content="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
  <meta property="og:image" content="//synergy.ru/img/logo.png">
  <meta property="og:type" content="article">


  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','<?= $GTM_ID?>');</script>
  <!-- End Google Tag Manager -->

  <?php if ($Facebook_ID != '') { ?>
    <script>!function(f,b,e,v,n,t,s) {if(f.fbq)return;n=f.fbq=function(){n.callMethod? n.callMethod.apply(n,arguments):n.queue.push(arguments)}; if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0'; n.queue=[];t=b.createElement(e);t.async=!0; t.src=v;s=b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t,s)}(window, document,'script', 'https://connect.facebook.net/en_US/fbevents.js'); fbq('init', '<?= $Facebook_ID ?>'); fbq('track', 'PageView');</script>
  <?php } ?>

  <?php if ($tiktok) { ?>
    <script>
      !function (w, d, t) { w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i="https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};var o=document.createElement("script");o.type="text/javascript",o.async=!0,o.src=i+"?sdkid="+e+"&lib="+t;var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(o,a)}; ttq.load('<?= $tiktok ?>'); ttq.page(); }(window, document, 'ttq');
    </script>
  <?php } ?>

  <script type="text/javascript">!function(){var t=document.createElement("script"); t.type="text/javascript", t.async=!0, t.src='https://vk.com/js/api/openapi.js?169'; t.onload=function(){VK.Retargeting.Init("VK-RTRG-1273590-fjzLO"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script>



  <link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="icon">
  <link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="shortcut icon">

  <link rel="preload" as="style" href="https://cdn.jsdelivr.net/npm/reseter.css" onload="this.rel ='stylesheet'; this.onload=null">


	<link rel="stylesheet" href="libs/fancybox/jquery.fancybox.min.css">


  <link href="css/fonts.css" rel="stylesheet">
  <link href="css/style.css?<?= time() ?>" rel="stylesheet">

</head>
<body class="<?= $version ? 'version-' . $version : '' ?> <?= $partner ? 'partner-' . $partner : '' ?> ">
  <!-- Google Tag Manager -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $GTM_ID ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager -->

  <?php if ($Facebook_ID != '') { ?>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?= $Facebook_ID ?>&ev=PageView&noscript=1" /></noscript>
  <?php } ?>

  <noscript><img src="https://vk.com/rtrg?p=VK-RTRG-1273590-fjzLO" style="position:fixed; left:-999px;" alt=""/></noscript>

  <!-- Reseter --><noscript link rel=" stylesheet " href=" https://cdn.jsdelivr.net/npm/reseter.css "></noscript><!-- End Reseter -->


  

  <div class="wrapper">
    
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

  <main class="main" id="main">
  <div class="container main__container">
    <div class="main__wrapper">
      <div class="main__item">
      </div>

      <div class="main__item">
      </div>

      <div class="main__item">
      </div>

      <div class="main__item">
      </div>

      <div class="main__item">
        <div class="main__item-description">
            <div class="main__item-date"><?= $date ?></div>
            <h1 class="main__item-title">&laquo;Как открыть <br> салон красоты?&raquo;</h1>
            <p class="main__item-subtitle">Онлайн-курс по запуску и развитию бизнеса в beauty-сфере. <br>Первый модуль бесплатно</p>
            <div class="main__item-course">
              
              <span>Практический курс</span>
              <span>Первый урок бесплатно</span>
            </div>
            <div class="main__item-box">
              <!-- <div class="main__item-box-text">Курс создан совместно с&nbsp;Академией 13&nbsp;by&nbsp;Timati</div> -->
              <a href="#popup-reg" data-fancybox class="main__item-box-button">Записаться</a>
            </div>
        </div>
      </div>
    </div>
  </div>
</main>

  <section class="form-block">
  <div class="container">
    
<form action="<?= $action; ?>&form=reg" class="form ">
  <div class="form__title ">Оставьте заявку на участие в программе</div>

  

  <div class="form__fields">
    
    
<div class="form__item ">
  
  <input name="name" type="text" value="" placeholder="Имя" class="form__input"  required>
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" value="" placeholder="Почта" class="form__input"  required>
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" value="" placeholder="Телефон" class="form__input"  required>
  
</div>

    

    

    <button class="button form__button form__button-fields " type="submit">Оставить заявку</button>
  </div>

  <div class="form__bottom">
    <label class="form__footer">
      <div class="form__footer_checkbox">
        <input type="checkbox" name="personalDataAgree" checked>
        <div class="form__footer_check_icon"></div>
      </div>
      <div class="form__footer_text">
        Я&nbsp;согласен на&nbsp;обработку персональных данных, получение рассылок, а&nbsp;также с&nbsp;<a href="#privacy" data-fancybox>политикой конфиденциальности</a>.
      </div>
    </label>
    <!-- <button class="button form__button " type="submit">Оставить заявку</button> -->
  </div>

</form>

  </div>
</section>
  
<section class="teachers lazy" id="teachers">
  <div class="container">
    <h2 class="section-title teachers__title">Преподаватели</h2>
    <div class="teachers__wrapper">

      
      <div class="teachers__item">

        
        <div class="teachers__item-elem">
          <img src="img/teachers/teachers/pahomov.png" alt="Преподаватель Сергей Пахомов" class="teachers__item-foto">
          <h3 class="teachers__item-title">Сергей Пахомов</h3>
          <p class="teachers__item-description">Управляющий партнёр агентства Beauty Alliance, 11&nbsp;лет опыта в&nbsp;бьюти-индустрии, маркетолог-практик</p>
        </div>
        
        <div class="teachers__item-elem">
          <img src="img/teachers/teachers/berdnikova.png" alt="Преподаватель Лариса Бердникова" class="teachers__item-foto">
          <h3 class="teachers__item-title">Лариса Бердникова</h3>
          <p class="teachers__item-description">Создатель и&nbsp;ведущий бизнес-тренер компании АртМедиКонсалт, владелец клиники в&nbsp;Санкт-Петербурге, а&nbsp;также эксперт в&nbsp;области управления, маркетинга и&nbsp;менеджмента в&nbsp;медицине и&nbsp;beauty-индустрии.</p>
        </div>
        

      </div>
      
      <div class="teachers__item">

        
        <div class="teachers__item-elem">
          <img src="img/teachers/teachers/alonchikova.png" alt="Преподаватель Елена Алончикова" class="teachers__item-foto">
          <h3 class="teachers__item-title">Елена Алончикова</h3>
          <p class="teachers__item-description">Исполнительный директор Synergy Speakers Agency</p>
        </div>
        
        <div class="teachers__item-elem">
          <img src="img/teachers/teachers/hanin.png" alt="Преподаватель Даниил Ханин" class="teachers__item-foto">
          <h3 class="teachers__item-title">Даниил Ханин</h3>
          <p class="teachers__item-description">CEO, Founder (Data Driven Decisions), Founder (UECalc) и&nbsp;трекер, эксперт по&nbsp;unit-экономике, лектор (Бизнес-инкубатор НИУ ВШЭ)</p>
        </div>
        

      </div>
      
      <div class="teachers__item">

        
        <div class="teachers__item-elem">
          <img src="img/teachers/teachers/hlebnova.png" alt="Преподаватель Жанна Хлебнова" class="teachers__item-foto">
          <h3 class="teachers__item-title">Жанна Хлебнова</h3>
          <p class="teachers__item-description">Продюсер и&nbsp;методолог в&nbsp;Speakers Agency. Эксперт по&nbsp;упаковке и&nbsp;продвижению личного бренда, бренд-продюсер</p>
        </div>
        
        <div class="teachers__item-elem">
          <img src="img/teachers/teachers/cvetkova.png" alt="Преподаватель Татьяна Цветкова" class="teachers__item-foto">
          <h3 class="teachers__item-title">Татьяна Цветкова</h3>
          <p class="teachers__item-description">Сооснователь Mellennium Group of&nbsp;companies, сертифицированный эксперт по&nbsp;клиентскому сервису</p>
        </div>
        

      </div>
      
      <div class="teachers__item">

        
        <div class="teachers__item-elem">
          <img src="img/teachers/teachers/achepkov.png" alt="Преподаватель Дмитрий Ащепков" class="teachers__item-foto">
          <h3 class="teachers__item-title">Дмитрий Ащепков</h3>
          <p class="teachers__item-description">Предприниматель, бизнес-тренер и&nbsp;консультант, специалист по&nbsp;продажам и&nbsp;переговорам</p>
        </div>
        
        <div class="teachers__item-elem">
          <img src="img/teachers/teachers/chernokalceva.png" alt="Преподаватель Елена Чернокальцева" class="teachers__item-foto">
          <h3 class="teachers__item-title">Елена Чернокальцева</h3>
          <p class="teachers__item-description">Кандидат юридических наук, адвокат, специалист в&nbsp;области медицинского, гражданского и&nbsp;трудового законодательства</p>
        </div>
        

      </div>
      
      <div class="teachers__item">

        
        <div class="teachers__item-elem">
          <img src="img/teachers/teachers/golandceva.png" alt="Преподаватель Мила Голландцева" class="teachers__item-foto">
          <h3 class="teachers__item-title">Мила Голландцева</h3>
          <p class="teachers__item-description">Предприниматель, основательница сети салонов красоты ВeBeauty</p>
        </div>
        
        <div class="teachers__item-elem">
          <img src="img/teachers/teachers/sazonova.png" alt="Преподаватель Ирина Сазонова" class="teachers__item-foto">
          <h3 class="teachers__item-title">Ирина Сазонова</h3>
          <p class="teachers__item-description">Эксперт по&nbsp;мотивации персонала для малого и&nbsp;среднего бизнеса</p>
        </div>
        

      </div>
      
      <div class="teachers__item">

        
        <div class="teachers__item-elem">
          <img src="img/teachers/teachers/chernocalcev.png" alt="Преподаватель Дмитрий Чернокальцев" class="teachers__item-foto">
          <h3 class="teachers__item-title">Дмитрий Чернокальцев</h3>
          <p class="teachers__item-description">Адвокат, специалист в&nbsp;области медицинского, гражданского и&nbsp;уголовного законодательства.</p>
        </div>
        
        <div class="teachers__item-elem">
          <img src="img/teachers/teachers/manatkina.png" alt="Преподаватель Манаткина Наталья" class="teachers__item-foto">
          <h3 class="teachers__item-title">Манаткина Наталья</h3>
          <p class="teachers__item-description">Эксперт по&nbsp;найму и&nbsp;управлению персонала для салонов красоты</p>
        </div>
        

      </div>
      

    </div>
  </div>
</section>
  <section class="form-block">
  <div class="container">
    
<form action="<?= $action; ?>&form=reg" class="form ">
  <div class="form__title ">Оставьте заявку на участие в программе</div>

  

  <div class="form__fields">
    
    
<div class="form__item ">
  
  <input name="name" type="text" value="" placeholder="Имя" class="form__input"  required>
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" value="" placeholder="Почта" class="form__input"  required>
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" value="" placeholder="Телефон" class="form__input"  required>
  
</div>

    

    

    <button class="button form__button form__button-fields " type="submit">Оставить заявку</button>
  </div>

  <div class="form__bottom">
    <label class="form__footer">
      <div class="form__footer_checkbox">
        <input type="checkbox" name="personalDataAgree" checked>
        <div class="form__footer_check_icon"></div>
      </div>
      <div class="form__footer_text">
        Я&nbsp;согласен на&nbsp;обработку персональных данных, получение рассылок, а&nbsp;также с&nbsp;<a href="#privacy" data-fancybox>политикой конфиденциальности</a>.
      </div>
    </label>
    <!-- <button class="button form__button " type="submit">Оставить заявку</button> -->
  </div>

</form>

  </div>
</section>
  

<section class="program lazy" id="program">
  <div class="container">
    <h2 class="section-title program__title">Программа курса</h2>

    <div class="program__wrapper">

      
      <div class="program__item active">
        <!-- <div class="program__item-arrow arrow"></div> -->

        <div class="program__item-img">
          <img src="img/program/01.png" alt="icon" class="">
        </div>

        <div class="program__item-question">
          <div class="program__item-title">Концепция салона красоты. <br> Портрет клиента</div>
        </div>


        <div class="program__item-answer">
          <ul class="program__item-list">
            
            <li class="program__item-point">Анализ рынка бьюти-салонов</li>
            
            <li class="program__item-point">Тенденции бизнеса в&nbsp;бьюти-индустрии</li>
            
            <li class="program__item-point">Разработка концепции салона красоты</li>
            
            <li class="program__item-point">Описание портрета клиента вашего будущего салона</li>
            
          </ul>
        </div>

      </div>
      
      <div class="program__item active">
        <!-- <div class="program__item-arrow arrow"></div> -->

        <div class="program__item-img">
          <img src="img/program/02.png" alt="icon" class="">
        </div>

        <div class="program__item-question">
          <div class="program__item-title">Позиционирование салона и создание узнаваемого бренда. Выбор локации</div>
        </div>


        <div class="program__item-answer">
          <ul class="program__item-list">
            
            <li class="program__item-point">УТП салона красоты&nbsp;&mdash; что это?</li>
            
            <li class="program__item-point">Анализ салонов-конкурентов и&nbsp;выделение точек уникальности</li>
            
            <li class="program__item-point">Обоснование стоимости услуг салона красоты</li>
            
            <li class="program__item-point">Имиджевые и&nbsp;бизнес-показатели бренда. Как вести отчетность и&nbsp;понимать цифры</li>
            
            <li class="program__item-point">&laquo;Упаковка&raquo; салона красоты. Как фирменный стиль салона делает продажи? <br> Почему клиенты выбирают по&nbsp;обложке?</li>
            
            <li class="program__item-point">Выбор локации студии, дизайн-концепция пространства</li>
            
          </ul>
        </div>

      </div>
      
      <div class="program__item active">
        <!-- <div class="program__item-arrow arrow"></div> -->

        <div class="program__item-img">
          <img src="img/program/03.png" alt="icon" class="">
        </div>

        <div class="program__item-question">
          <div class="program__item-title">Документация, лицензии. Unit-экономика</div>
        </div>


        <div class="program__item-answer">
          <ul class="program__item-list">
            
            <li class="program__item-point">Ключевые правовые вопросы для запуска бьюти-бизнеса</li>
            
            <li class="program__item-point">Санитарные нормы для салонов</li>
            
            <li class="program__item-point">Работа с&nbsp;контрагентами в&nbsp;бьюти-индустрии</li>
            
            <li class="program__item-point">Необходимые лицензии для студии красоты</li>
            
            <li class="program__item-point">Формирование цены на&nbsp;ваши услуги</li>
            
          </ul>
        </div>

      </div>
      
      <div class="program__item active">
        <!-- <div class="program__item-arrow arrow"></div> -->

        <div class="program__item-img">
          <img src="img/program/04.png" alt="icon" class="">
        </div>

        <div class="program__item-question">
          <div class="program__item-title">Системный подход к бьюти бизнесу</div>
        </div>


        <div class="program__item-answer">
          <ul class="program__item-list">
            
            <li class="program__item-point">Управленческий учет и&nbsp;бюджет: контроль закупок</li>
            
            <li class="program__item-point">Бизнес-план как основа финансового здоровья салона красоты</li>
            
            <li class="program__item-point">Удобные налоговые схемы</li>
            
            <li class="program__item-point">Подбор, адаптация, мотивация персонала</li>
            
            <li class="program__item-point">Как не&nbsp;стать зависимыми от&nbsp;мастеров</li>
            
            <li class="program__item-point">Эффективные системы штрафов и&nbsp;поощрений</li>
            
          </ul>
        </div>

      </div>
      
      <div class="program__item active">
        <!-- <div class="program__item-arrow arrow"></div> -->

        <div class="program__item-img">
          <img src="img/program/05.png" alt="icon" class="">
        </div>

        <div class="program__item-question">
          <div class="program__item-title">Продажи, воронка и путь клиента в бьюти-индустрии</div>
        </div>


        <div class="program__item-answer">
          <ul class="program__item-list">
            
            <li class="program__item-point">Построение воронки продаж салона</li>
            
            <li class="program__item-point">Каналы продаж для бьюти-бизнеса</li>
            
            <li class="program__item-point">Эффективные продажи через администраторов</li>
            
            <li class="program__item-point">Как повысить средний чек студии?</li>
            
            <li class="program__item-point">Особенности построения клиентского сервиса в&nbsp;салоне красоты</li>
            
            <li class="program__item-point">Ключевые приемы клиентского сервиса для увеличения числа постоянных клиентов</li>
            
          </ul>
        </div>

      </div>
      
      <div class="program__item active">
        <!-- <div class="program__item-arrow arrow"></div> -->

        <div class="program__item-img">
          <img src="img/program/06.png" alt="icon" class="">
        </div>

        <div class="program__item-question">
          <div class="program__item-title">Маркетинг, PR и продвижение студии</div>
        </div>


        <div class="program__item-answer">
          <ul class="program__item-list">
            
            <li class="program__item-point">Таргетинг для привлечения целевой аудитории</li>
            
            <li class="program__item-point">E-mail маркетинг для удержания клиентов</li>
            
            <li class="program__item-point">Контекстная реклама студии и&nbsp;реклама в&nbsp;соцсетях</li>
            
            <li class="program__item-point">Рекламные креативы в&nbsp;бьюти-индустрии</li>
            
            <li class="program__item-point">Эффективные каналы продвижения 2021</li>
            
          </ul>
        </div>

      </div>
      

    </div>
  </div>
</section>
  <section class="format" id="format">
  <div class="container">
    <h2 class="section-title format__title">Формат обучения</h2>
    <div class="format__wrapper">
      <div class="format__item">
        <img src="img/format/pic_01.png" alt="icon" class="format__item-img">
        <div class="format__item-description">
          <h3 class="format__item-title">Всего 6 недель</h3>
          <p class="format__item-text">Уже через 1,5 месяца вы&nbsp;готовы открывать свой салон</p>
        </div>
      </div>
      <div class="format__item">
        <img src="img/format/pic_02.png" alt="icon" class="format__item-img">
        <div class="format__item-description">
          <h3 class="format__item-title">Максимум практики</h3>
          <p class="format__item-text">Успешные предприниматели поделятся знаниями, которые помогут вам открыть салон с&nbsp;минимальными рисками. Ничего лишнего</p>
        </div>
      </div>
      <div class="format__item">
        <img src="img/format/pic_03.png" alt="icon" class="format__item-img">
        <div class="format__item-description">
          <h3 class="format__item-title">Комфортный график</h3>
          <p class="format__item-text">Обучение в&nbsp;любое удобное для вас время без отрыва от&nbsp;текущей работы</p>
        </div>
      </div>
    </div>
  </div>
</section>
  <section class="get lazy" id="get">
  <div class="container">
    <h2 class="get__title">Что вы&nbsp;получите <br> по&nbsp;окончанию курсов:</h2>
    <ul class="get__list">
      <li class="get__point">Именной сертификат от Школы Бизнеса Синергия</li>
      <li class="get__point">Стратегия по&nbsp;открытию салона красоты с&nbsp;четким пониманием срока окупаемости</li>
      <li class="get__point">Навык и&nbsp;опыт в&nbsp;открытии и&nbsp;продвижении своего собственного салона</li>
    </ul>
  </div>
</section>
  <?php if($version != 'noprice') { ?>
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

  <?php } ?>
  

<section class="partners lazy" id="partners">
  <div class="container">
    <h2 class="section-title partners__title">Партнеры</h2>
    <div class="partners__wrapper">

      
      <div class="partners__item">
        <img src="img/partners/synergy.png" alt="Партнер - Корпорация Синергия">
      </div>
      
      <div class="partners__item">
        <img src="img/partners/redken.png" alt="Партнер - REDKEN">
      </div>
      
      <div class="partners__item">
        <img src="img/partners/authentica.png" alt="Партнер - AUTHENTICA">
      </div>
      
      <div class="partners__item">
        <img src="img/partners/loreal.png" alt="Партнер - LOREAL">
      </div>
      
      <div class="partners__item">
        <img src="img/partners/emi.png" alt="Партнер - EMI">
      </div>
      
      <div class="partners__item">
        <img src="img/partners/luxio.png" alt="Партнер - LUXIO">
      </div>
      

    </div>
  </div>
</section>
  <section class="contacts lazy" id="contacts">
  <div class="contacts__wrapper">

    <div class="contacts__info">
      <div class="container">
        <h2 class="section-title contacts__title">Контакты</h2>
        <div class="contacts__box">
          <a href="<?= $phone_link ?>" class="contacts__info-text"><?= $phone ?></a>
          <a href="mailto:<?= $mail ?>" class="contacts__info-text"><?= $mail ?></a>
          <a href="https://yandex.ru/maps/-/CCUya-Ej0B" target="_blank" class="contacts__info-text">г. Москва, Россия, 125315 <br> Ленинградский проспект, 80-Г</a>
        </div>
      </div>
    </div>

    <div class="contacts__img">
      <img src="img/contacts/map.png" alt="г. Москва, Россия, 125315, Ленинградский проспект, 80-Г">
    </div>

  </div>
</section>
  <section class="synergy lazy" id="synergy">
  <div class="container">
    <div class="synergy__wrapper">

      <div class="synergy__description">
        <h2 class="section-title synergy__title">Организатор</h2>
        <p class="synergy__description-text">Школа бизнеса &laquo;Синергия&raquo; была основана в&nbsp;1988 году и&nbsp;является первой бизнес-школой в&nbsp;России и&nbsp;СНГ. На&nbsp;базе школы проводится обучение по&nbsp;программам МВА и&nbsp;профессиональной переподготовки, семинары и&nbsp;тренинги ведущих российских и&nbsp;мировых экспертов.</p>
      </div>

      <div class="synergy__counter">
        <div class="synergy__counter-item">
          <div class="synergy__counter-figure">50 000</div>
          <div class="synergy__counter-text">Успешных выпускников</div>
        </div>
        <div class="synergy__counter-item">
          <div class="synergy__counter-figure">500+</div>
          <div class="synergy__counter-text">Профессиональных программ по развитию бизнеса</div>
        </div>
        <div class="synergy__counter-item">
          <div class="synergy__counter-figure">30</div>
          <div class="synergy__counter-text">Лет на рынке бизнес-образования</div>
        </div>
        <div class="synergy__counter-item">
          <div class="synergy__counter-figure">7</div>
          <div class="synergy__counter-text">Престижных аккредитаций АМВА</div>
        </div>
      </div>

      <div class="synergy__logo">
        <img src="img/synergy/synergy.png" alt="Организатор Синергия">
      </div>
    </div>

  </div>
</section>
  <section class="bottom lazy" id="bottom">
  <div class="container bottom__container">
    <div class="bottom__wrapper">
      <div class="bottom__item">
      </div>

      <div class="bottom__item">
      </div>

      <div class="bottom__item">
      </div>

      <div class="bottom__item">
      </div>

      <div class="bottom__item">
        <div class="bottom__item-description">
          <div class="main__item-date"><?= $date ?></div>
          <h1 class="bottom__item-title">&laquo;Как открыть <br> салон красоты?&raquo;</h1>
          <p class="bottom__item-subtitle">Онлайн-курс по запуску и развитию бизнеса в beauty-сфере. <br>Первый модуль бесплатно</p>
          <div class="bottom__item-text">
            <span>Получите пошаговый план по запуску бизнеса с окупаемостью в 1 год</span>
          </div>
          
<form action="<?= $action; ?>&form=reg" class="form ">
  <div class="form__title "></div>

  

  <div class="form__fields">
    
    
<div class="form__item ">
  
  <input name="name" type="text" value="" placeholder="Имя" class="form__input"  required>
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" value="" placeholder="Почта" class="form__input"  required>
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" value="" placeholder="Телефон" class="form__input"  required>
  
</div>

    

    

    <button class="button form__button form__button-fields " type="submit">Оставить заявку</button>
  </div>

  <div class="form__bottom">
    <label class="form__footer">
      <div class="form__footer_checkbox">
        <input type="checkbox" name="personalDataAgree" checked>
        <div class="form__footer_check_icon"></div>
      </div>
      <div class="form__footer_text">
        Я&nbsp;согласен на&nbsp;обработку персональных данных, получение рассылок, а&nbsp;также с&nbsp;<a href="#privacy" data-fancybox>политикой конфиденциальности</a>.
      </div>
    </label>
    <!-- <button class="button form__button " type="submit">Оставить заявку</button> -->
  </div>

</form>

        </div>
      </div>
    </div>
  </div>
</section>
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



    <div class="popups" hidden>
     
<div class="popup popup_reg" id="popup-reg">
  
<form action="<?= $action; ?>&form=reg" class="form ">
  <div class="form__title ">Оставьте заявку на участие в программе</div>

  

  <div class="form__fields">
    
    
<div class="form__item ">
  
  <input name="name" type="text" value="" placeholder="Имя" class="form__input"  required>
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" value="" placeholder="Почта" class="form__input"  required>
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" value="" placeholder="Телефон" class="form__input"  required>
  
</div>

    

    

    <button class="button form__button form__button-fields " type="submit">Оставить заявку</button>
  </div>

  <div class="form__bottom">
    <label class="form__footer">
      <div class="form__footer_checkbox">
        <input type="checkbox" name="personalDataAgree" checked>
        <div class="form__footer_check_icon"></div>
      </div>
      <div class="form__footer_text">
        Я&nbsp;согласен на&nbsp;обработку персональных данных, получение рассылок, а&nbsp;также с&nbsp;<a href="#privacy" data-fancybox>политикой конфиденциальности</a>.
      </div>
    </label>
    <!-- <button class="button form__button " type="submit">Оставить заявку</button> -->
  </div>

</form>

</div>

<div class="popup popup_installments" id="popup-installments">
  
<form action="<?= $action; ?>&form=installments" class="form ">
  <div class="form__title ">Оставьте заявку на участие в программе</div>

  

  <div class="form__fields">
    
    
<div class="form__item ">
  
  <input name="name" type="text" value="" placeholder="Имя" class="form__input"  required>
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" value="" placeholder="Почта" class="form__input"  required>
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" value="" placeholder="Телефон" class="form__input"  required>
  
</div>

    

    

    <button class="button form__button form__button-fields " type="submit">Оставить заявку</button>
  </div>

  <div class="form__bottom">
    <label class="form__footer">
      <div class="form__footer_checkbox">
        <input type="checkbox" name="personalDataAgree" checked>
        <div class="form__footer_check_icon"></div>
      </div>
      <div class="form__footer_text">
        Я&nbsp;согласен на&nbsp;обработку персональных данных, получение рассылок, а&nbsp;также с&nbsp;<a href="#privacy" data-fancybox>политикой конфиденциальности</a>.
      </div>
    </label>
    <!-- <button class="button form__button " type="submit">Оставить заявку</button> -->
  </div>

</form>

</div>

// payment
<div class="popup popup_reg" id="popup-pay">

    

  
<form action="<?= $action; ?>&form=pay" class="form ">
  <div class="form__title ">Заполните форму, чтобы зарегистрироваться</div>

  

  <div class="form__fields">
    
    
<div class="form__item ">
  
  <input name="name" type="text" value="" placeholder="Имя" class="form__input"  required>
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" value="" placeholder="Почта" class="form__input"  required>
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" value="" placeholder="Телефон" class="form__input"  required>
  
</div>

    

    
    
    
<div class="form__item d-none">
  
  <input name="product_id" type="hidden" value="97235007" placeholder="" class="form__input"  >
  
</div>

    
    
<div class="form__item d-none">
  
  <input name="unit" type="hidden" value="payments" placeholder="" class="form__input"  >
  
</div>

    
    
<div class="form__item d-none">
  
  <input name="type" type="hidden" value="ticketless" placeholder="" class="form__input"  >
  
</div>

    
    
<div class="form__item d-none">
  
  <input name="callbackSuccess" type="hidden" value="https://synergy.online/lp/beautystart/thanks/" placeholder="" class="form__input"  >
  
</div>

    
    
<div class="form__item d-none">
  
  <input name="new_tab" type="hidden" value="1" placeholder="" class="form__input"  >
  
</div>

    
    

    <button class="button form__button form__button-fields " type="submit">Купить</button>
  </div>

  <div class="form__bottom">
    <label class="form__footer">
      <div class="form__footer_checkbox">
        <input type="checkbox" name="personalDataAgree" checked>
        <div class="form__footer_check_icon"></div>
      </div>
      <div class="form__footer_text">
        Я&nbsp;согласен на&nbsp;обработку персональных данных, получение рассылок, а&nbsp;также с&nbsp;<a href="#privacy" data-fancybox>политикой конфиденциальности</a>.
      </div>
    </label>
    <!-- <button class="button form__button " type="submit">Купить</button> -->
  </div>

</form>

</div>

<div class="popup popup_reg" id="popup-pay-expert">

    

  
<form action="<?= $action; ?>&form=pay" class="form ">
  <div class="form__title ">Заполните форму, чтобы зарегистрироваться</div>

  

  <div class="form__fields">
    
    
<div class="form__item ">
  
  <input name="name" type="text" value="" placeholder="Имя" class="form__input"  required>
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" value="" placeholder="Почта" class="form__input"  required>
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" value="" placeholder="Телефон" class="form__input"  required>
  
</div>

    

    
    
    
<div class="form__item d-none">
  
  <input name="product_id" type="hidden" value="106119903" placeholder="" class="form__input"  >
  
</div>

    
    
<div class="form__item d-none">
  
  <input name="unit" type="hidden" value="payments" placeholder="" class="form__input"  >
  
</div>

    
    
<div class="form__item d-none">
  
  <input name="type" type="hidden" value="ticketless" placeholder="" class="form__input"  >
  
</div>

    
    
<div class="form__item d-none">
  
  <input name="callbackSuccess" type="hidden" value="https://synergy.online/lp/beautystart/thanks/" placeholder="" class="form__input"  >
  
</div>

    
    
<div class="form__item d-none">
  
  <input name="new_tab" type="hidden" value="1" placeholder="" class="form__input"  >
  
</div>

    
    

    <button class="button form__button form__button-fields " type="submit">Купить</button>
  </div>

  <div class="form__bottom">
    <label class="form__footer">
      <div class="form__footer_checkbox">
        <input type="checkbox" name="personalDataAgree" checked>
        <div class="form__footer_check_icon"></div>
      </div>
      <div class="form__footer_text">
        Я&nbsp;согласен на&nbsp;обработку персональных данных, получение рассылок, а&nbsp;также с&nbsp;<a href="#privacy" data-fancybox>политикой конфиденциальности</a>.
      </div>
    </label>
    <!-- <button class="button form__button " type="submit">Купить</button> -->
  </div>

</form>

</div>

<div class="popup popup_reg" id="popup-pay-business">

    

  
<form action="<?= $action; ?>&form=pay" class="form ">
  <div class="form__title ">Заполните форму, чтобы зарегистрироваться</div>

  

  <div class="form__fields">
    
    
<div class="form__item ">
  
  <input name="name" type="text" value="" placeholder="Имя" class="form__input"  required>
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="email" type="email" value="" placeholder="Почта" class="form__input"  required>
  
</div>

    

    
    
<div class="form__item ">
  
  <input name="phone" type="text" value="" placeholder="Телефон" class="form__input"  required>
  
</div>

    

    
    
    
<div class="form__item d-none">
  
  <input name="product_id" type="hidden" value="106119906" placeholder="" class="form__input"  >
  
</div>

    
    
<div class="form__item d-none">
  
  <input name="unit" type="hidden" value="payments" placeholder="" class="form__input"  >
  
</div>

    
    
<div class="form__item d-none">
  
  <input name="type" type="hidden" value="ticketless" placeholder="" class="form__input"  >
  
</div>

    
    
<div class="form__item d-none">
  
  <input name="callbackSuccess" type="hidden" value="https://synergy.online/lp/beautystart/thanks/" placeholder="" class="form__input"  >
  
</div>

    
    
<div class="form__item d-none">
  
  <input name="new_tab" type="hidden" value="1" placeholder="" class="form__input"  >
  
</div>

    
    

    <button class="button form__button form__button-fields " type="submit">Купить</button>
  </div>

  <div class="form__bottom">
    <label class="form__footer">
      <div class="form__footer_checkbox">
        <input type="checkbox" name="personalDataAgree" checked>
        <div class="form__footer_check_icon"></div>
      </div>
      <div class="form__footer_text">
        Я&nbsp;согласен на&nbsp;обработку персональных данных, получение рассылок, а&nbsp;также с&nbsp;<a href="#privacy" data-fancybox>политикой конфиденциальности</a>.
      </div>
    </label>
    <!-- <button class="button form__button " type="submit">Купить</button> -->
  </div>

</form>

</div>

   </div>

   <a href="//sydi.ru" hidden></a>
 </div>


  <script src="libs/jquery/jquery.min.js"></script>
  <script src="libs/fancybox/jquery.fancybox.min.js" defer></script>
  <!-- <script src="https://forma.tinkoff.ru/static/onlineScript.js" defer></script> -->

  <script src="js/script.js" defer></script>

  <script src="https://syn.su/js/lander.js?v=2" async></script>

</body>
</html>
