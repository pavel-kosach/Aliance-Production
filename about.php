<?php $page_title = 'О компании';?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $page_title ?> - Aliance Production</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Мобильное меню -->
   <div class="mobile-menu">
    <ul class="mobile-menu-nav">
      <li class="mobile-menu-nav-item">
        <a href="#main" class="mobile-menu-link">О компании</a>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="#" class="mobile-menu-link">Контрактное производство</a>
        <ul class="mobile-submenu">
          <li class="mobile-submenu-item">
            <a href="#" class="mobile-submenu-link">Автомобильная химия</a>
          </li>
          <li class="mobile-submenu-item">
            <a href="#" class="mobile-submenu-link">Бытовая химия</a></li>
          <li class="mobile-submenu-item">
            <a href="#" class="mobile-submenu-link">Дезинфицирующие средства</a>
          </li>
          <li class="mobile-submenu-item">
            <a href="#" class="mobile-submenu-link">Пищевые аэрозоли</a>
          </li>
          <li class="mobile-submenu-item">
            <a href="#" class="mobile-submenu-link">Косметическая продукция</a>
          </li>
          <li class="mobile-submenu-item">
            <a href="#" class="mobile-submenu-link">Краски аэрозольные</a>
          </li>
        </ul>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="#" class="mobile-menu-link">Собственные торговые марки</a>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="#" class="mobile-menu-link">Новости</a>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="#" class="mobile-menu-link">Контакты</a>
      </li>
    </ul>
    <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
    <div class="mobile-info">
      <svg class="phone-svg" width="24" height="24">
        <use href="img/sprites.svg#phone"></use>
      </svg>
      <address class="mobile-info-adress">г. Мосвка, Холодильный пер. 4к1с8</address>
    </div>
    <div class="mobile-info">
      <svg class="phone-svg" width="24" height="24">
        <use href="img/sprites.svg#phone"></use>
      </svg>
      <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">a.dragunov@tdaliance.ru</a>
    </div>
  </div>
  <!-- /Мобильное меню -->
  <nav class="navbar navbar-light">
    <a href="#" class="mobile-menu-toggle">
      <span class="mobile-menu-line"></span>
      <span class="mobile-menu-line"></span>
      <span class="mobile-menu-line"></span>
    </a>
    <a href="/" class="header-logo">
      <svg class="logo-svg logo-light">
        <use href="img/sprites.svg#logo-light"></use>
      </svg>  
      <svg class="logo-svg logo-dark">
        <use href="img/sprites.svg#logo"></use>
      </svg>        
    </a>
    <ul class="header-nav">
      <li class="header-nav-item">
        <a href="./about.php" class="header-nav-link">О компании</a>
      </li>
      <li class="header-nav-item">
        <a href="./contract-manufacturing.php" class="header-nav-link">Контрактное производство</a>
      </li>
      <li class="header-nav-item">
        <a href="./trade-marks.php" class="header-nav-link">Собственные торговые марки</a>
      </li>
      <li class="header-nav-item">
        <a href="./blog.php" class="header-nav-link">Новости</a>
      </li>
      <li class="header-nav-item">
        <a href="#" class="header-nav-link">Контакты</a>
      </li>
    </ul>
    <div class="header-phone">
      <svg class="phone-svg" width="24" height="24">
        <use href="img/sprites.svg#phone"></use>
      </svg>
      <a href="tel:+74996861014" class="header-phone-link">+7 (499) 686-10-14</a>
    </div>
    <!-- /.header-phone -->
    <button class="button navbar-button" data-toggle="modal">
      <svg class="button-icon" width="24" height="24">
        <use href="img/sprites.svg#phone"></use>
      </svg>
      <span class="button-text">Получить консультацию</span>      
    </button>
  </nav>
  <!-- /navbar -->
  <?php include_once('./template/advance-header.php');?>
  <section class="expert">
    <div class="container">
      <div class="expert-content">
        <div class="expert-img"><img src="./img/expert-logo.png" alt="#" class="expert-logo"></div>
        <div class="expert-description">
          <div class="seporator"></div>
          <h2 class="default-title expert-title">мы - эксперты в области производства химии</h2>
          <p class="expert-text">Разнообразный и богатый опыт говорит нам, что перспективное планирование однозначно фиксирует необходимость поставленных обществом задач! Есть над чем задуматься: ключевые особенности структуры проекта могут быть объединены в целые кластеры себе подобных. Интерактивные прототипы, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно. Значимость этих проблем настолько очевидна, что перспективное планирование играет важную роль в формировании системы массового участия.</p> 
        </div>
      </div>
    </div>
  </section>
  <section class="expert-slider-section">
    <div class="container">
        <!-- Slider main container -->
        <div class="swiper features-slider">
            <!-- Additional required wrapper -->
            <ul class="swiper-wrapper header-features">
              <!-- Slides -->
              <li class="swiper-slide header-features-item">
                <svg class="header-features-icon" width="21" height="28">
                  <use href="img/sprites.svg#time"></use>
                </svg> 
                <p class="header-features-text">Непрерывная работа c 2017 года</p>
              </li>
              <li class="swiper-slide header-features-item">
                <svg class="header-features-icon" width="29" height="29">
                  <use href="img/sprites.svg#docs"></use>
                </svg> 
                <p class="header-features-text">Вся продукция сертифицирована</p>
              </li>
              <li class="swiper-slide header-features-item">
                <svg class="header-features-icon" width="25" height="28">
                  <use href="img/sprites.svg#person"></use>
                </svg> 
                <p class="header-features-text">Контроль качества на всех этапах</p>
              </li>
              <li class="swiper-slide header-features-item">
                <svg class="header-features-icon" width="35" height="26">
                  <use href="img/sprites.svg#car"></use>
                </svg> 
                <p class="header-features-text">Возможны поставки по всей России</p>
              </li>
              <li class="swiper-slide header-features-item">
                <svg class="header-features-icon" width="32" height="28">
                  <use href="img/sprites.svg#speed"></use>
                </svg> 
                <p class="header-features-text">Оперативное производство</p>
              </li>
            </ul>
            <!-- navigation buttons -->
            <div class="slider-buttons about-slider-buttons">
              <div class="slider-button-prev">
                <svg class="white-arrows" width="36" height="24">
                  <use href="img/sprites.svg#arrow-prev"></use>
                </svg>
                <svg class="dark-arrows" width="36" height="24">
                  <use href="img/sprites.svg#arrow-prev-black"></use>
                </svg>
              </div>
              <div class="slider-button-next">
                <svg class="white-arrows" width="36" height="24">
                  <use href="img/sprites.svg#arrow-next"></use>
                </svg>
                <svg class="dark-arrows" width="36" height="24">
                  <use href="img/sprites.svg#arrow-next-black"></use>
                </svg>
              </div>
            </div>
          </div>
    </div>
  </section>
  <section class="our-production">
    <div class="container">
      <div class="our-production-wrapper">
        <div class="our-production-description">
          <div class="seporator"></div>
            <h2 class="default-title">Наше производство</h2>
            <p class="our-production-text">
            Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление обеспечивает широкому кругу (специалистов) участие в формировании глубокомысленных рассуждений. Но граница обучения кадров создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса кластеризации усилий.
            </p>
            <p class="our-production-text">
            Реализация намеченных плановых заданий, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для соответствующих условий активизации. Предварительные выводы неутешительны: экономическая повестка сегодняшнего дня требует анализа анализа существующих паттернов поведения.
            </p>
            <ul class="clients-list">
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                   <use href="img/sprites.svg#probirka"></use>
                </svg>
                Автомобильная химия
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                   <use href="img/sprites.svg#carwash"></use>
                </svg>
                Бытовая химия
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                   <use href="img/sprites.svg#fork"></use>
                </svg>
                Дезинфицирующие средства
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                   <use href="img/sprites.svg#paint"></use>
                </svg>
                Пищевые аэрозоли
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                   <use href="img/sprites.svg#hand"></use>
                </svg>
                Косметическая продукция
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                   <use href="img/sprites.svg#car-repair"></use>
                </svg>
                Краски аэрозольные
              </li>
            </ul>
        </div>
        <div class="our-production-img">
        <img src="./img/our-production.png" alt="#" class="our-production-picture">
      </div>
      </div>
    </div>
  </section>
    <?php include_once("./template/founder.php");?>
    <?php include_once("./template/about-blog.php");?>
    <?php include_once("./template/clients.php");?>
    <?php include_once ('./template/footer.php'); ?>
  
    <div class="modal">
      <div class="modal-dialog">
        <h2 class="modal-title">Есть вопросы?</h2>
        <!-- /.modal-title -->
        <a href="#" class="modal-close" data-toggle="modal">
          <svg class="close-icon" width="24" height="24">
            <use href="img/sprites.svg#modal-close"></use>
          </svg>
        </a>
        <!-- /.modal-close -->
        <p class="modal-text">
          Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
        </p>
        <form action="#" class="modal-form">
          <div class="input-group-wrapper input-group-vertical">
            <div class="input-group modal-input-group">
              <input id="modal-user-name" type="text" class="input modal-input" placeholder=" ">
              <label class="input-group-label modal-input-label" for="modal-user-name">Имя</label>
            </div>
            <!-- /.input-group -->
            <div class="input-group modal-input-group">
              <input id="modal-user-phone" type="tel" class="input modal-input" placeholder=" ">
              <label class="input-group-label modal-input-label" for="modal-user-phone">Номер телефона</label>
            </div>
            <!-- /.input-group -->
          </div>
          <div class="modal-form-footer">
            <button type="submit" class="button modal-form-button">Оставить заявку</button>
            <div class="notify">
              <svg class="notify-icon" width="12" height="12">
                <use href="img/sprites.svg#shield"></use>
              </svg>
              <p class="notify-text">
                Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!
              </p>
            </div>
          </div>
        </form>
        <!-- /.modal-form -->
        <!-- /.modal-text -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
  <script src="https://unpkg.com/imask"></script>
  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>