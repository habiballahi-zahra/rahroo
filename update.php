<?php
$id = $_GET['id'];
$table = $_GET['t'];
if ($table == 'car') {
    $sql = "UPDATE `car` SET  name='$_POST[name]',`color`='$_POST[attr]' WHERE ID=$id";
} elseif ($table == 'customer') {
    $sql = "UPDATE `customer` SET user_name='$_POST[name]',email='$_POST[attr]' WHERE ID=$id";
}

$connect = mysqli_connect("localhost", "root", "", "car_gallery");
$result = mysqli_query($connect, $sql);
header("location:manage.php?index=$table");

