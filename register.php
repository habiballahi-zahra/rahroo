<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>ثبت نام</title>
    <link rel="stylesheet" href="./CSS/styles.css">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <script src="CSS/main.js"></script>
</head>
<body class="register_body">
<section class="register  clearfix">
    <div class="menu">
        <ul>
            <li><a class="menu_item" href="index.php">خانه</a></li>
            <li><a class="menu_item" href="index.php#course">آموزش</a></li>
            <li><a class="menu_item" href="register.html">ثبت نام</a></li>
        </ul>
    </div>
</section>
<?php  include_once 'form_validation.php';?>

<div>

    <article class="register_form">
        <h3>ثبت نام</h3>


        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="input_group">
                <input class="contact_input" type="text" placeholder="نام" name="name" id="name" value="<?=$name ?>">
                <input class="contact_input" type="text" placeholder="نام خانوادگی" name="lastname" id="lastname"  value="<?=$lastname ?>" >
                <input class="contact_input" type="text" placeholder="نام کاربری" name="user_name"value="<?=$username ?>">
                <span class="error">* <?php echo $usernameError;?></span>
                <input class="contact_input" type="password" placeholder="رمز عبور" name="pass">
                <span class="error">* <?php echo $passwordError;?></span>
                <input class="contact_input" type="text" placeholder="شماره تماس" name="phone"value="<?=$phone ?>">
                <span class="error">* <?php echo $phoneError;?></span>
                <input class="contact_input" type="text" placeholder="ایمیل" name="email" value="<?=$email ?>">
                <span class="error">* <?php echo $emailError;?></span>
                <input class="contact_input" type="file" placeholder="عکس" name="pic">
            </div>
            <button class="btn btn_submit" type="submit" onclick="register_ok()"> ثبت نام</button>
        </form>

    </article>


</div>

<!-- footer start-->
<footer class="footer">
    <div class="footer_div">
        <div class="social_icons">
            <a class="social_icon" href="#"> <i class="bi bi-whatsapp"></i></a>
            <a class="social_icon" href="#"> <i class="bi bi-instagram"></i></a>
            <a class="social_icon" href="https://t.me/ZaHi8118"> <i class="bi bi-telegram"></i></a>
        </div>
        <h4 class="footer_text">
            کلیه حقوق نزد راه رو محفوظ است و هرگونه کپی برداری از مطالب پیگرد قانونی دارد
        </h4>

    </div>

</footer>
<!--footer end-->
</body>
</html>