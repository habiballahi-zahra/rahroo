<?php

$usernameError = $passwordError = $phoneError = $emailError = "";
$name = $lastname = $username = $password = $phone = $email = "";
$data = array();
if ($_POST) {
    $data = $_POST['user'];
    $name = $data['name'];
    $lastname = $data['lastname'];

    if (empty($data["user_name"])) {
        $usernameError = "وارد کردن نام کاربری اجباری است";
    } else {
        $username = $data["user_name"];

    }
    if (empty($data["pass"])) {
        $passwordError = "وارد کردن رمزعبور اجباری است";
    } else {
        $password = $data['pass'];
    }

    if (empty($data["email"])) {
        $emailError = "وارد کردن ایمیل اجباری است";
    } else {
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL))
            $emailError = "فرمت وارد شده برای ایمیل صحیح نیست";
        else
            $email = $data["email"];
    }
    if (empty($data["phone"])) {
        $phoneError = "وارد کردن شماره تماس اجباری است";
    } else {
        if (!preg_match("/^[0]{1}[9]{1}\d{9}$/", $data['phone']))
            $phoneError = "فرمت شماره تلفن صحیح نیست";
        else
            $phone = $data['phone'];
    }
    if (($username != "root") && !empty($username) && !empty($email) && !empty($phone)) {
       $pic= uploader();
        insecr($data,$pic);
        header("location:welcom.php?user=$username");
    }
}
function insecr($data,$pic)
{
    $connect = mysqli_connect("localhost", "root", "", "car_gallery");
    $sql = "INSERT INTO `user`(name,Lastname,user_name,password,phone, email, pic) VALUES ('$data[name]','$data[lastname]','$data[user_name]','$data[pass]','$data[phone]','$data[email]','$pic')";
    mysqli_query($connect, $sql);

}

function uploader(){
    var_dump($_FILES);
    $pic_name=$_FILES['pic']['name'];
    $array=explode(".",$pic_name);
    $ext=end($array);
    $new_name=rand().".".$ext;
    $from=$_FILES['pic']['tmp_name'];
    $to="img/".$new_name;
    move_uploaded_file($from,$to) ;
    return $new_name;
}


