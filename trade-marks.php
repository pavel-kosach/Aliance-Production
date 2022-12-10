<?php $page_title = 'Собственные торговые марки';?>
<!DOCTYPE html>
<html lang="ru">
<?php include_once ('./template/header.php'); ?>
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
  <!-- navbar -->
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
  <section class="section trademark">
      <div class="container">
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