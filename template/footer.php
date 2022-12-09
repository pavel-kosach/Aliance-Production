<section class="cta" id="main">
      <div class="bg-grey section-cta">
        <img src="img/cta.png" alt="#" class="cta-image">
        <div class="cta-form-wrapper container">
          <form action="handler.php" method="POST" class="cta-form">
            <h2 class="default-title cta-form-title">Хотите сотрудничать?</h2>
            <p class="cta-form-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!</p>
            <div class="input-group-wrapper">
              <div class="input-group">
                <input id="user-name" name="username" type="text" class="input" placeholder=" ">
                <label class="input-group-label" for="user-name">Имя</label>
              </div>
              <!-- /.input-group -->
              <div class="input-group">
                <input id="user-phone" name="userphone" type="tel" class="input" placeholder=" ">
                <label class="input-group-label" for="user-phone">Номер телефона</label>
              </div>
              <!-- /.input-group -->
            </div>
            <div class="cta-form-footer">
              <button type="submit" class="button cta-form-button">Оставить заявку</button>
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
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="container">
        <div class="footer-top">
          <svg class="logo-svg footer-logo">
            <use href="img/sprites.svg#logo"></use>
          </svg>
          <a href="#" class="footer-phone">+7 (499) 686-10-14</a>
          <div class="footer-info">
            <svg class="phone-svg" width="24" height="24">
              <use href="img/sprites.svg#phone"></use>
            </svg>
            <address class="footer-info-adress">г. Мосвка, Холодильный пер. 4к1с8</address>
          </div>
          <div class="footer-info">
            <svg class="mail-svg" width="24" height="24">
              <use href="img/sprites.svg#mail"></use>
            </svg>
            <a href="mailto:a.dragunov@tdaliance.ru"  class="footer-info-email">a.dragunov@tdaliance.ru</a>
          </div>
          <div class="footer-social">
            <a href="#" class="footer-social-link">
              <svg class="footer-social-icon" width="24" height="24">
                <use href="img/sprites.svg#vk-logo"></use>
              </svg>
            </a>
            <a href="#" class="footer-social-link">
              <svg class="footer-social-icon" width="24" height="24">
                <use href="img/sprites.svg#inst-logo"></use>
              </svg>
            </a>
          </div>
        </div>
      </div>
      <hr class="footer-seporator">
      <div class="container">
        <div class="footer-bottom">
          <div class="footer-menu-wrapper">
            <h2 class="footer-menu-title">Контрактное производство</h2>
            <ul class="footer-menu-list footer-menu-columns-2">
              <li class="footer-menu-item">
                <a href="./automotive-chemicals.php" class="footer-menu-link">Автомобильная химия</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Бытовая химия</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Дезинфицирующие средства</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Пищевые аэрозоли</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Косметическая продукция</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Краски аэрозольные</a>
              </li>
            </ul>
          </div>
          <!-- /.footer-menu-wrapper -->
          <div class="footer-menu-wrapper">
            <h2 class="footer-menu-title">Собственные марки</h2>
            <ul class="footer-menu-list">
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Автохимия AG-Tech</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Автохимия AP</a>
              </li>
            </ul>
          </div>
          <!-- /.footer-menu-wrapper -->
          <div class="footer-menu-wrapper">
            <ul class="footer-menu-list">
              <li class="footer-menu-item">
                <a href="./about.php" class="footer-menu-link footer-menu-link-bold">О компании</a>
              </li>
              <li class="footer-menu-item">
                <a href="./blog.php" class="footer-menu-link footer-menu-link-bold">Новости</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link footer-menu-link-bold">Контакты</a>
              </li>
            </ul>
          </div>
          <!-- /.footer-menu-wrapper -->
        </div>
      </div>
      <hr class="footer-seporator">
      <div class="container">
        <div class="footer-wrapper">
          <div class="footer-legal">
            <p class="copyright">
              &#169; <?php echo date('Y'); ?> «Aliance Production». Все права защищены.
            </p>
            <a href="./policy.php" class="footer-policy">Политики конфиденциальности</a>
          </div>
          <!-- /.footer-legal -->
          <div class="footer-author">
            <span class="made-in">Сделано в</span>
            <svg width="52" height="11">
              <use href="img/sprites.svg#ruso"></use>
            </svg>
          </div>
        </div>
      </div>
    </footer>