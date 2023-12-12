<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>راه رو</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <script src="CSS/main.js"></script>

</head>
<body>
<!--header start-->
<header class="header">
    <div class="menu " id="menu_text">
        <ul>
            <li><a class="menu_item" href="index.php">خانه</a></li>
            <li><a class="menu_item" href="#course">آموزش</a></li>
            <li><a class="menu_item" href="register.php">ثبت نام</a></li>
            <li><a class="menu_item" href="login.php">ورود</a></li>

    </div>
    <!--    dark mode switch    -->
    <div class="left_manu">
        <ul>
            <li> <div class="clock"><?php date_default_timezone_set("asia/Tehran");  echo date("h:i:sa");?></div></li>
            <li>    <label class="switch">
                    <input type="checkbox" id="checkbox" onclick="toggle()">
                    <span class="slider"></span>
                </label>
                <!--    dark mode switch    --></li>
        </ul>
        <!--  clock start  -->


        <!-- clock end   -->


    </div>
    <div class="banner">
        <h2>راه رو</h2>
        <h3 id="text">راه رو آکادمی آموزش زبان های برنامه نویسی است که با آموزش های مفید راه را برای شما هموار می کند و
            بهترین
            منابع آموزشی را در اختیار شما قرار می دهد تا بتوانید مسیر آموزش برنامه نویسی را طی کنید و در این راه موفق
            باشید</h3>
        <a class="btn btn_banner" id="btn_banner" href="#">شروع آموزش</a>
    </div>
</header>
<div class="divider"></div>
<!--header end-->

<!-- recommended course start -->
<div class="course_title" id="courses_mode">دوره های پیشنهادی</div>
<section class="courses clearfix" id="courses">
    <a href="https://www.w3schools.com/html/html_intro.asp">
        <article class="course clearfix">
            <span class="course_icon"><i class="bi bi-filetype-html"></i></span>
            <h4>HTML آموزش زبان</h4>
            <p> پروژه محور و کاربردی در زمینه برنامه نویسی وب را در اختیار علاقه مندان این حرفه قرار خواهد داد</p>
        </article>
    </a>

    <a href="https://www.w3schools.com/css/css_intro.asp">
        <article class="course clearfix">
            <span class="course_icon"><i class="bi bi-filetype-css"></i></span>
            <h4>CSS آموزش زبان</h4>
            <p> پروژه محور و کاربردی در زمینه برنامه نویسی وب را در اختیار علاقه مندان این حرفه قرار خواهد داد</p>
        </article>
    </a>

    <a href="https://www.w3schools.com/java/java_intro.asp">
        <article class="course clearfix">
            <span class="course_icon"> <i class="bi bi-filetype-java"></i> </span>
            <h4>Java آموزش زبان</h4>
            <p> پروژه محور و کاربردی در زمینه برنامه نویسی وب را در اختیار علاقه مندان این حرفه قرار خواهد داد</p>
        </article>
    </a>
    <a href="https://www.w3schools.com/php/php_intro.asp">
        <article class="course clearfix">
            <span class="course_icon"><i class="bi bi-filetype-php"></i> </span>
            <h4>PHP آموزش زبان</h4>
            <p> پروژه محور و کاربردی در زمینه برنامه نویسی وب را در اختیار علاقه مندان این حرفه قرار خواهد داد</p>
        </article>
    </a>
</section>
<!-- recommended course end -->


<!--intrduction teacher start-->
<section class="teacher clearfix">
    <article class="teacher-title ">
        <h3>معرفی مدرسین</h3>
        <p>در این آکادمی از بهترین اساتید جهت آموزش شما عزیزان دعوت به عمل آمده.هر یک از اساتید باتجربه و سابقه تدریس
            بالا بهترین کیفیت تدریس را به شما ارائه می دهند</p>
    </article>
    <article class="teacher-allcard">
        <div class="teacher-card">
            <img class="teacher-img" src="./images/teacher-1.png" alt="teacher-pic">
            <h4 class="teacher-name">استاد رحمتی</h4>
            <h4 class="teacher-course">مدرس زبان html,css</h4>
        </div>

        <div class="teacher-card">
            <img class="teacher-img" src="./images/teacher-2.png" alt="teacher-pic">
            <h4 class="teacher-name">استاد یعقوبی</h4>
            <h4 class="teacher-course">مدرس زبان های html,css,java</h4>
        </div>

        <div class="teacher-card">
            <img class="teacher-img" src="./images/teacher-3.png" alt="teacher-pic">
            <h4 class="teacher-name">استاد محمدیان</h4>
            <h4 class="teacher-course">مدرس زبان php,sql </h4>
        </div>
    </article>
</section>
<!--intrduction teacher end-->

<!-- contact us start-->
<section class="contact_us clearfix" id="contact_us">
    <div class="contact clearfix">
        <article class="contact_info">
            <div class="contact_item">
                <h4 class="contact_title">
                    آدرس <span class="contact_icon"> <i class="bi bi-geo-alt-fill"></i> </span>
                </h4>

                <h4 class="contact_text">
                    تهران، بزرگراه شهید تندگویان، میدان بهمن،
                    <br>
                    خیابان میثاق، دانشکده فنی و حرفه ای دخترانه دکتر شریعتی
                </h4>
            </div>

            <div class="contact_item">
                <h4 class="contact_title">
                    ایمیل <span class="contact_icon"> <i class="bi bi-envelope-at-fill"></i> </span>
                </h4>

                <h4 class="contact_text">
                    consol.habib@Gmail.com
                </h4>
            </div>

            <div class="contact_item">
                <h4 class="contact_title">
                    شماره تماس <span class="contact_icon"> <i class="bi bi-telephone-fill"></i> </span>
                </h4>

                <h4 class="contact_text">
                    09130319091
                </h4>
            </div>

        </article>

        <article class="contact_form" id="contact_form">
            <h3>تماس با ما</h3>


            <form>
                <div class="input_group">
                    <input class="contact_input" type="text" placeholder="نام" name="name">
                    <input class="contact_input" type="email" placeholder="ایمیل" name="email">
                    <textarea class="contact_input" placeholder="متن پیام" name="message" rows="5"></textarea>
                </div>
                <button class="btn btn_submit" type="submit">ارسال پیام</button>
            </form>

        </article>

    </div>
</section>

<!-- contact us end-->
<!-- footer start-->
<footer class="footer" id="footer">
    <div class="footer_div">
        <div class="social_icons">
            <a class="social_icon" href="#"> <i class="bi bi-whatsapp"></i></a>
            <a class="social_icon" href="#"> <i class="bi bi-instagram"></i></a>
            <a class="social_icon" href="#"> <i class="bi bi-telegram"></i></a>
        </div>
        <h4 class="footer_text">
            کلیه حقوق نزد راه رو محفوظ است و هرگونه کپی برداری از مطالب پیگرد قانونی دارد
        </h4>

    </div>

</footer>
<!--footer end-->
</body>
</html>