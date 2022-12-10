<?php $page_title = 'Собственные торговые марки';?>
<?php include_once ('./template/header.php');?>
<body>
<?php include_once ('./template/menu.php');?>
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
<?php include_once ('./template/footer.php');?>
<?php include_once('./template/modals.php');?>
<?php include_once('./template/scripts.php');?>
</body>
</html>