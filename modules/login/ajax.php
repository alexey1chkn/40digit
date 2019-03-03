<?php

include './classes/Auth.class.php';
include './classes/AjaxRequest.class.php';

if (!empty($_COOKIE['sid'])) {
    // check session id in cookies
    session_id($_COOKIE['sid']);
}
session_start();

class AuthorizationAjaxRequest extends AjaxRequest
{
    public $actions = array(
        "login" => "login",
        "logout" => "logout",
        "register" => "register",
    );

    public function login()
    {
        if ($_SERVER["REQUEST_METHOD"] !== "POST") {
            // Method Not Allowed
            http_response_code(405);
            header("Allow: POST");
            $this->setFieldError("main", "Method Not Allowed");
            return;
        }
        setcookie("sid", "");

        $username = $this->getRequestParam("username");
        $password = $this->getRequestParam("password");
        $remember = !!$this->getRequestParam("remember-me");

        if (empty($username)) {
            $this->setFieldError("username", "Введите логин");
            return;
        }

        if (empty($password)) {
            $this->setFieldError("password", "Введите пароль");
            return;
        }

        $user = new Auth\User();
        $auth_result = $user->authorize($username, $password, $remember);

        if (!$auth_result) {
            $this->setFieldError("password", "Неверный логин или пароль");
            return;
        }

        $this->status = "ok";
        $this->setResponse("redirect", ".");
        $this->message = sprintf("Рады видеть Вас, %s! Добро пожаловать.", $username);
    }

    public function logout()
    {
        if ($_SERVER["REQUEST_METHOD"] !== "POST") {
            // Method Not Allowed
            http_response_code(405);
            header("Allow: POST");
            $this->setFieldError("main", "Method Not Allowed");
            return;
        }

        setcookie("sid", "");

        $user = new Auth\User();
        $user->logout();

        $this->setResponse("redirect", ".");
        $this->status = "ok";
    }

    public function register()
    {
        if ($_SERVER["REQUEST_METHOD"] !== "POST") {
            // Method Not Allowed
            http_response_code(405);
            header("Allow: POST");
            $this->setFieldError("main", "Method Not Allowed");
            return;
        }

        setcookie("sid", "");

        $username = $this->getRequestParam("username");
        $password1 = $this->getRequestParam("password1");
        $password2 = $this->getRequestParam("password2");

        if (empty($username)) {
            $this->setFieldError("username", "Введите логин");
            return;
        }

        if (empty($password1)) {
            $this->setFieldError("password1", "Введите пароль");
            return;
        }

        if (empty($password2)) {
            $this->setFieldError("password2", "Повторите пароль");
            return;
        }

        if ($password1 !== $password2) {
            $this->setFieldError("password2", "К сожалению, пароли не совпадают");
            return;
        }

        $user = new Auth\User();

        try {
            $new_user_id = $user->create($username, $password1);
        } catch (\Exception $e) {
            $this->setFieldError("username", $e->getMessage());
            return;
        }
        $user->authorize($username, $password1);

        $this->message = sprintf("Добро пожаловать, %s! Спасибо за регистрацию.", $username);
        $this->setResponse("redirect", ".");
        $this->status = "ok";
    }
}

$ajaxRequest = new AuthorizationAjaxRequest($_REQUEST);
$ajaxRequest->showResponse();
