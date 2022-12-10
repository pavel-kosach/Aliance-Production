<?php $page_title = 'О компании';?>
<?php include_once ('./template/header.php');?>
<body>
<?php include_once ('./template/menu.php');?>
<?php include_once('./template/advance-header.php');?>
  <section class="expert">
    <div class="container">
      <div class="expert-content">
        <div class="expert-img">
          <picture>
          <source type="image/webp" srcset="img/expert-logo.webp">
          <source type="image/png" srcset="img/expert-logo.png">
          <img class="expert-logo" src="img/expert-logo.png" alt="Контрактное производство автомобильной химии">
          </picture>
        </div>
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
  <?php include_once('./template/our-production-block.php');?>
  <!-- <section class="our-production">
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
          <picture>
          <source type="image/webp" srcset="img/our-production.webp">
          <source type="image/jpg" srcset="img/our-production.jpg">
          <img class="our-production-picture" src="img/our-production.jpg" alt="our-production">
          </picture>
      </div>
      </div>
    </div>
  </section> -->
  <?php include_once("./template/founder.php");?>
  <?php include_once("./template/about-blog.php");?>
  <?php include_once("./template/clients.php");?>
  <?php include_once ('./template/footer.php');?>
  <?php include_once('./template/modals.php');?>
  <?php include_once('./template/scripts.php');?>
  </body>
</html>