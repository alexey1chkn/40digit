<?php require 'db.php';

if (!empty($_COOKIE['sid'])) {
    // check session id in cookies
    session_id($_COOKIE['sid']);
}

session_start();
require_once './modules/login/classes/Auth.class.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="theme-color" content="#171C27">
  <title>40digit - Ваш выбор</title>
  <!-- Font Awesome -->
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/assets/css/bootstrap-grid.min.css">
  <!-- Your custom styles (optional) -->
  <link href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/assets/css/main.css" rel="stylesheet">
  <link href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/assets/img/Hk9ETu_Rxp4.jpg" rel="shortcut icon" type="image/x-icon" />
</head>
<body>
  <div class="wrapper">
    <div class="container-fluid">
      <div class="top_bar">
        <div class="row justify-content-around">
          <div class="col-3 col-md-2 align-self-center">
            <div class="top_bar-logo">
              <div></div>       
              <a href="/">40digit</a>
            </div>
          </div>
          <div class="col-5 col-md-6">
            <a href="#" class="top_bar-menu-btn">Меню</a>
            <nav class="top_bar-menu-main">
              <a href="/" class="active">Главная</a>
              <a href="">Услуги</a>
              <a href="">Партнёрам</a>
              <a href="">FAQ</a>
            </nav>
          </div>
          <div class="col-3 col-md-3">
            <?php $login = 12; echo $login == 1 ? '<a href="">' : ''; ?>
              <div class="top_bar-menu-profile">
                <!-- Если залогинен - имя и картинка, если нет - кнопка регистрация и вход -->
                <?php
                  $login_tb = '
                    <div class="top_bar-menu-profile-name">
                      <span>Алексей</span>
                    </div>
                    <div class="top_bar-menu-profile-img">
                      <div></div>
                    </div>';
                  $unlogin = '
                  <div class="top_bar-menu-profile-login">
                    <a href="">Вход</a>
                  </div>
                  <div class="top_bar-menu-profile-sign_up">
                    <a href="">Регистрация</a>
                  </div>';
                  echo $login == 1 ? $login_tb : $unlogin;
                ?>
              </div>
            <?php echo $login == 1 ? '</a>' : ''; ?>
          </div>
        </div>
      </div> 
      <div class="form-login_wrapper">
        <div class="form-login-blur">
        </div>
        <div class="form-login">
          <form method="post" class="form-signin ajax" action="<?php $_SERVER['DOCUMENT_ROOT']; ?>/modules/ajax.php">
            <button type="button" class="form-login_container_cancel">Закрыть</button>
            <div class="form-login_container">
              <div class="main-error alert alert-error hide"></div>
              <h2 class="form-signin-heading">Please sign in</h2>

              <label for="login">Логин</label>
              <input name="username" type="text" class="input-block-level" placeholder="Логин" autofocus required>
        
              <label for="password">Пароль</label>
              <input name="password" type="password" class="input-block-level" placeholder="Введите пароль" required>
              <label class="checkbox">
                <input name="remember-me" type="checkbox" value="remember-me" checked> Запомнить меня
              </label>
              <input type="hidden" name="act" value="login">          
              <button type="submit">Войти</button>
              <a href="">или <span>Зарегистрироваться</span></a>
            </div>
        
            <!-- <div class="container">
              <button type="button" class="cancelbtn">Cancel</button>
              <span class="psw">Forgot <a href="#">password?</a></span>
            </div> -->
          </form>
        </div>
      </div>