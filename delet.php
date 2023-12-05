<?php
$id = $_GET['id'];
$table = $_GET['index'];
$connect = mysqli_connect("localhost", "root", "", "car_gallery");
$sql = "DELETE FROM $table WHERE ID=$id";
$result = mysqli_query($connect, $sql);
header("location:manage.php?index=$table");