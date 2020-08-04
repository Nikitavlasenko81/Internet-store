<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
<meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
<link href="css/main.css" rel="stylesheet"></head>
<link href="css/site.css" rel="stylesheet"></head>


<body>
<?php $this->beginBody() ?>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light ftco-navbar-light-2 bg-primary"
    id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">Samsung</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.html" class="nav-link">Главная</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">Популярные товары</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="Galaxy watch.html">Galaxy watch</a>
              <a class="dropdown-item" href="Galaxy Tab.html">Galaxy Tab S5e LTE</a>
              <a class="dropdown-item" href="Galaxy m20.html">Galaxy m20</a>
              <a class="dropdown-item" href="Galaxy A.html">Galaxy A</a>
              <a class="dropdown-item" href="Galaxy note 9.html">Galaxy note 9</a>
              <a class="dropdown-item" href="Galaxy S10 Plus.html">Galaxy S10+ Ceramic 1 TB</a>
              <a class="dropdown-item" href="Galaxy S10 Plus.html">Galaxy S10+ | S10 | S10e</a>
            </div>
          </li>

          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Категории
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <?= \app\components\MenuWidget::widget(['tpl' => 'menu']);?>
          </ul>
         </li>
          <li class="nav-item"><a href="About.html" class="nav-link">О Нас</a></li>
          <li class="nav-item"><a href="Contact.html" class="nav-link">Контакты</a></li>
          <li class="nav-item cta cta-colored"><a href="Cart.html" class="nav-link"><i
                class="fas fa-shopping-basket fa-lg"></i> <span class="badge badge-pill badge-dark">2</span></a></li>  
        </ul>
      </div>
    </div>
  </nav>
  <!-- конец nav -->
  <?= $content ?>
<!-- подвал -->
  <footer class="ftco-footer bg-light ftco-section">
    <div class="container">
      <div class="row mb-2">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Modist</h2>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
              <li class="ftco-animate wow fadeInUp"><a href="https://twitter.com"><i class="fab fa-twitter fa-3x"></i></span></a>
              </li>
              <li class="ftco-animate wow fadeInUp"><a href="https://www.facebook.com"><i class="fab fa-facebook-f fa-3x"></i></a>
              </li>
              <li class="ftco-animate wow fadeInUp"><a href="https://www.instagram.com"><i class="fab fa-instagram fa-3x"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-5">
            <h2 class="ftco-heading-2">Меню</h2>
            <ul class="list-unstyled">
              <li><a href="index.html" class="py-2 d-block">Магазин</a></li>
              <li><a href="About.html" class="py-2 d-block">О Нас</a></li>
              <li><a href="Contact.html" class="py-2 d-block">Контакты</a></li>
              <li><a href="#" class="py-2 d-block">Популярные</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Помощь</h2>
            <div class="d-flex">
              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                <li><button type="button" class="py-2 d-block btnHelp" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Информация о доставке</button></li>
                <li><button type="button" class="py-2 d-block btnHelp" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Возврат &amp; Обмнен</button></li>
                <li><button type="button" class="py-2 d-block btnHelp" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Темы &amp; Условия</button></li>
                <li><button type="button" class="py-2 d-block btnHelp" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Политика конфиденциальности</button></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Есть вопросы?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><i class="fas fa-map-marker-alt"></i></span><span class="text"> 203 Fake St. Mountain View, San
                    Francisco, California, USA</span></li>
                <li><a href="#"><i class="fas fa-phone"></i></span><span class="text"> +2 392 3929 210</span></a></li>
                <li><a href="#"><i class="fas fa-envelope"></i><span class="text"> info@yourdomain.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p>
            Samsung Shop &copy;<script>
              document.write(new Date().getFullYear());
            </script> All rights reserved | This project was done by Vlasenko Nikita
          </p>
        </div>
      </div>
    </div>
  </footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>