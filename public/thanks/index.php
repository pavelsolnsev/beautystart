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
<body class="<?= $version ? 'version-' . $version : '' ?> <?= $partner ? 'partner-' . $partner : '' ?> page-thanks">
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

  <section class="thanks">
  <div class="container">
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
          <h1 class="main__item-title">Спасибо за заявку!</h1>
          <p class="main__item-subtitle">В ближайшее время наш менеджер свяжется с вами</p>
          <div class="main__item-box">
            <a href="<?=$BASE_HREF?>" class="main__item-box-button">На главную</a>
          </div>
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
