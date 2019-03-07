<?php
if (!empty($_COOKIE['sid'])) {
    // check session id in cookies
    session_id($_COOKIE['sid']);
}

session_start();
require_once './modules/login/classes/Auth.class.php';

if(isset($_GET['theme']))
  setcookie("theme", $_GET['theme'], time() + 259200);
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
  <!-- Your custom styles (optional) -->
  <link href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/assets/css/main.css" rel="stylesheet">
  <link href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/assets/img/Hk9ETu_Rxp4.jpg" rel="shortcut icon" type="image/x-icon" />
</head>
<?php 
  if($_COOKIE['theme'] == 1 || $_GET['theme'] == 1) $dark_style = 'black'; else $dark_style = '';
  if($_COOKIE['theme'] == 1 && $_GET['theme'] == 2) $dark_style = '';
?>
<body class="<?php echo $dark_style ?>">
  <div class="page_content <?php echo $dark_style ?>" style="<?php echo $dark_style == 'black' ? 'background: url(assets/img/1112.png) repeat' : 'background: url(assets/img/2222.png) repeat'?>"></div>
  <div class="wrapper"> 
    <div class="change_theme">
      <div class="change_theme-colors">
        <div class="change_theme-black"><div class="change_theme-icon"></div><p>Тёмная тема</p></div>
        <div class="change_theme-white"><div class="change_theme-icon"></div><p>Светлая тема</p></div>
      </div>
      <h4>Сменить тему</h4>
    </div>
    
    <div class="top_bar">
      <div class="top_bar-logo">     
        <a href="/">
          <img src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/assets/img/logo2.png" alt="">
        </a>
      </div>
      <div class="top_bar-menu-btn">Меню</div>
      <nav class="top_bar-menu-main">
        <a href="/" class="active"><h4>Главная</h4></a>
        <a href=""><h4>Услуги</h4></a>
        <a href=""><h4>Партнёрам</h4></a>
        <a href=""><h4>FAQ</h4></a>
      </nav>
        <div class="top_bar-menu-profile">
          <!-- Если залогинен - имя и картинка, если нет - кнопка регистрация и вход -->
          <?php $login = 11; echo $login == 1 ? '<a href="" id="top_bar_profile">' : ''; ?>
          <?php
            $login_tb = '
                <h4>Алексей</h4>
                <div><img src="" alt=""></div>';
            $unlogin = '
            <div class="top_bar-menu-profile-login">
              <a href=""><h4>Войти</h4></a>
            </div>';
            echo $login == 1 ? $login_tb : $unlogin;
          ?>
          <?php echo $login == 1 ? '</a>' : ''; ?>
        </div>
      </div> 
      <div class="form-login_wrapper">
        <div class="form-login-blur">
        </div>
        <div class="form-login">
          <form method="post" class="form-signin ajax" action="<?php $_SERVER['DOCUMENT_ROOT']; ?>/modules/ajax.php">
            <button type="button" class="form-login_container_cancel"><p>Закрыть</p></button>
            <div class="form-login_container">
              <div class="main-error alert alert-error hide"></div>
              <h3 class="form-signin-heading">Вход в кабинет</h2>

              <input name="username" type="text" class="input-block-level" placeholder="Введите логин" required>
        
              <input name="password" type="password" class="input-block-level" placeholder="Введите пароль" required>
              <label class="checkbox">
                <input name="remember-me" class="remember_me" type="checkbox" value="remember-me" checked> Запомнить меня
              </label>
              <input type="hidden" name="act" value="login">          
              <button type="submit"><h4>Войти</h4></button>
              <a href=""><p>или</p><h4>Зарегистрироваться</h4></a>
            </div>
        
            <!-- <div class="container">
              <button type="button" class="cancelbtn">Cancel</button>
              <span class="psw">Forgot <a href="#">password?</a></span>
            </div> -->
          </form>
        </div>
      </div>