<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./CSS/styles.css">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <script src="CSS/main.js"></script>
    <title>admin</title>
</head>
<body>
<div class="course_title" id="courses_mode"><?php auth(); ?></div>
<section class="teacher clearfix list">
<article class="list-allcard">
    <a href="manage.php?index=car">
    <div class="list-card">
        <img class="teacher-img clearfix" src="./images/car.png" alt="teacher-pic">
        <h4 class="teacher-name">مدیریت ماشین </h4>
    </div>
    </a>
    <a href="manage.php?index=customer">
    <div class="list-card">
        <img class="teacher-img" src="./images/user.png" alt="teacher-pic">
        <h4 class="teacher-name">مدیریت مشتری</h4>
    </div>
    </a>
</article>
</section>
</body>
</html>


<?php


function auth()
{

    $username = $_POST['user_name'];
    $password = $_POST['pass'];
    $connect = mysqli_connect("localhost", "root", "", "car_gallery");
    $sql = "select * from user where user_name='$username'";
    $result = mysqli_query($connect, $sql);
    $user = mysqli_fetch_array($result);

    if ($password == $user['password'])
        echo "welcom  " . $username;
    else
        header("location:login.php");
}
