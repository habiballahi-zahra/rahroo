<?php

$usernameError = $passwordError = $phoneError = $emailError = "";
$name=$lastname=$username = $password = $phone = $email = "";

if ($_POST) {
    $name=$_POST['name'];
    $lastname=$_POST['lastname'];

    if (empty($_POST["user_name"])) {
        $usernameError = "وارد کردن نام کاربری اجباری است";
    } else {
        $username = $_POST["user_name"];

    }
    if (empty($_POST["pass"])) {
        $passwordError = "وارد کردن رمزعبور اجباری است";
    } else {
        $password = $_POST['pass'];
    }

    if (empty($_POST["email"])) {
        $emailError = "وارد کردن ایمیل اجباری است";
    } else {
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
            $emailError = "فرمت وارد شده برای ایمیل صحیح نیست";
        else
            $email = $_POST["email"];
    }
    if (empty($_POST["phone"])) {
        $phoneError = "وارد کردن شماره تماس اجباری است";
    } else {
        if (!preg_match("/^[0]{1}[9]{1}\d{9}$/", $_POST['phone']))
            $phoneError = "فرمت شماره تلفن صحیح نیست";
        else
            $phone = $_POST['phone'];
    }
    if (($username!="root") && !empty($username)&&!empty($email) &&!empty($phone))

        header("location:welcom.php?user=$username");
}

