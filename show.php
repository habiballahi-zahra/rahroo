<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table style=" text-align: center;" border="solid 1px"  cellpadding="5px" >
    <tr>
        <td> نام مشتری</td>
        <td>نام ماشین</td>
        <td>رنگ ماشین</td>
        <td>تاریخ</td>
    </tr>
    <?php
    $connect = mysqli_connect("localhost", "root", "", "car_gallery");
    $sql = "select * from shop";
    $result = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $sql = "select * from customer where ID=$row[userID]";
        $user = mysqli_query($connect, $sql);
        $user_info = mysqli_fetch_array($user);
        $sql = "select * from car where ID=$row[carID]";
        $car = mysqli_query($connect, $sql);
        $car_info = mysqli_fetch_array($car);
        echo "<tr>
        <td>$user_info[user_name]</td>
        <td>$car_info[name]</td>
        <td>$car_info[color]</td>
        <td>$row[date]</td>
    </tr>";
    }
    ?>
</table>
</body>
</html>