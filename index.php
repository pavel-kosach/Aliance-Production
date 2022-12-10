<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aliance Production</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="front-page">
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
  <!-- navbar -->
  <nav class="navbar">
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
  <!-- header -->
    <header class="header header-image">
      <div class="container">
        <div class="header-content">
          <div class="seporator"></div>
          <h1 class="header-title">Комплексное обеспечение товарами и расходными материалами бизнеса</h1>
          <p class="header-text">Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: высококачественный прототип будущего проекта напрямую зависит от анализа существующих паттернов поведения.</p>
          <button class="button" data-toggle="modal" data-target="#feedback-modal">Подробнее о компании</button>
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
            <div class="slider-buttons">
              <div class="slider-button-prev">
                <svg width="36" height="24">
                  <use href="img/sprites.svg#arrow-prev"></use>
                </svg>
              </div>
              <div class="slider-button-next">
                <svg width="36" height="24">
                  <use href="img/sprites.svg#arrow-next"></use>
                </svg>
              </div>
            </div>
          </div>
        </div>
        <!-- /.header-content -->  
      </div>
      <!-- /.container -->
    </header>
  <!-- /header -->
    <div class="section work-plan">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="default-title">Схема работы</h2>
        <!-- Slider main container -->
        <div class="swiper steps-slider">
          <!-- Additional required wrapper -->
          <ol class="swiper-wrapper work-plan-list">
            <!-- Slides -->
            <li class="swiper-slide work-plan-item">
              <span class="work-plan-item-number">01</span>
              <h3 class="work-plan-item-title">Знакомство</h3>
              <p class="work-plan-item-text">Безусловно, сплочённость команды профессионалов позволяет  оценить значение форм воздействия.</p>
              <a href="#" class="button-link">Оставить заявку</a>
            </li>
              <li class="swiper-slide work-plan-item">
              <span class="work-plan-item-number">02</span>
              <h3 class="work-plan-item-title">Заключение <br> договора</h3>
              <p class="work-plan-item-text">Лишь интерактивные прототипы призваны к ответу.</p>
            </li>
            <li class="swiper-slide work-plan-item">
              <span class="work-plan-item-number">03</span>
              <h3 class="work-plan-item-title">Производство</h3>
              <p class="work-plan-item-text">А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на независимые элементы.</p>
            </li>
            <li class="swiper-slide work-plan-item">
              <span class="work-plan-item-number">04</span>
              <h3 class="work-plan-item-title">Доставка</h3>
              <p class="work-plan-item-text">В частности, экономическая повестка сегодняшнего дня говорит о возможностях приоритизации разума над эмоциями.</p>
            </li>
          </ol>
          <!-- If we need navigation buttons -->
          <div class="steps-buttons primary-buttons-wrapper">
            <div class="steps-button-prev primary-button-prev">
              <svg width="36" height="24">
                <use href="img/sprites.svg#arrow-prev"></use>
              </svg>
            </div>
            <div class="steps-button-next primary-button-next">
              <svg width="36" height="24">
                <use href="img/sprites.svg#arrow-next"></use>
              </svg>
            </div>
          </div>
          <!-- /.steps-buttons -->
        </div>
      </div>
    </div>
    <?php include_once("./template/production-block.php")?>
    <section class="section trademark">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="default-title">Cобственные торговые марки</h2>
        <div class="trademark-cards">
          <div class="trademark-card">
            <svg class="trade-mark-logo">
               <use href="img/sprites.svg#mark-1"></use>
            </svg>
            <h3 class="trademark-card-title">Автохимия AG-Tech</h3>
            <p class="trademark-text">Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт предпосылки для поставленных обществом задач.</p>
          </div>
          <div class="trademark-card">
            <svg class="trade-mark-logo">
                <use href="img/sprites.svg#mark-2-grey"></use>
            </svg>
            <h3 class="trademark-card-title">Автохимия AP</h3>
            <p class="trademark-text">Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт предпосылки для поставленных обществом задач.</p>
          </div>
        </div>
        <!-- /.trademark-cards -->
      </div>
    </section>
    <!-- /.trademark -->
    <?php include_once("./template/founder.php");?>
    <?php include_once("./template/clients.php");?>
    <section class="section blog">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="default-title">Блог экспертов в области производства</h2>
        <!-- Slider main container -->
        <div class="swiper blog-slider">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <a href="#" class="swiper-slide blog-card">
                            <picture>
              <source type="image/webp" srcset="img/blog-med.webp">
              <source type="image/jpeg" srcset="img/blog-med.jpg">
              <img src="img/blog-med.jpg" alt="#" class="blog-card-img">
              </picture>
              <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
              <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
            </a>
            <a href="#" class="swiper-slide blog-card">
                            <picture>
              <source type="image/webp" srcset="img/blog-metal.webp">
              <source type="image/jpeg" srcset="img/blog-metal.jpg">
              <img src="img/blog-metal.jpg" alt="#" class="blog-card-img">
              </picture>
              <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
              <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
            </a>
            <a href="#" class="swiper-slide blog-card">
              <picture>
              <source type="image/webp" srcset="img/blog-med.webp">
              <source type="image/jpeg" srcset="img/blog-med.jpg">
              <img src="img/blog-med.jpg" alt="#" class="blog-card-img">
              </picture>
              <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
              <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
            </a>
          </div>
          <div class="blog-slider-footer">
            <a href="#" class="button-link">Весь блог</a>
          <!-- If we need navigation buttons -->
          <div class="blog-buttons primary-buttons-wrapper">
            <div class="blog-button-prev primary-button-prev">
              <svg width="36" height="24">
                <use href="img/sprites.svg#arrow-prev"></use>
              </svg>
            </div>
            <div class="blog-button-next primary-button-next">
              <svg width="36" height="24">
                <use href="img/sprites.svg#arrow-next"></use>
              </svg>
            </div>
          </div>
          <!-- /.blog-buttons -->
          </div>
          <!-- /.blog-slider-footer -->
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section blog -->
    <?php include_once ('./template/footer.php'); ?>
    <div class="modal" id="feedback-modal">
      <div class="modal-dialog">
        <h2 class="modal-title">Есть вопросы?</h2>
        <!-- /.modal-title -->
        <a href="#" class="modal-close" data-toggle="modal" data-target="#feedback-modal">
          <svg class="close-icon" width="24" height="24">
            <use href="img/sprites.svg#modal-close"></use>
          </svg>
        </a>
        <!-- /.modal-close -->
        <p class="modal-text">
          Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
        </p>
        <form action="handler.php" method="POST" class="modal-form">
          <div class="input-group-wrapper input-group-vertical">
            <div class="input-group modal-input-group">
              <input id="modal-user-name" type="text" class="input modal-input" placeholder=" " name="username">
              <label class="input-group-label modal-input-label" for="modal-user-name">Имя</label>
            </div>
            <!-- /.input-group -->
            <div class="input-group modal-input-group">
              <input id="modal-user-phone" type="tel" class="input modal-input" placeholder=" " name="userphone">
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
    <div class="modal" id="alert-modal">
      <div class="modal-dialog">
        <h2 class="modal-title">Спасибо</h2>
        <!-- /.modal-title -->
        <a href="#" class="modal-close" data-toggle="modal" data-target="#alert-modal">
          <svg class="close-icon" width="24" height="24">
            <use href="img/sprites.svg#modal-close"></use>
          </svg>
        </a>
        <!-- /.modal-close -->
        <p class="modal-text">
          Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
        </p>
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