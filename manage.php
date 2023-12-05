<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./CSS/styles.css">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <script src="CSS/main.js"></script>
    <title>manage</title>
</head>
<body>
<table class="row">
    <?php
    $index = $_GET['index'];
    if ($index == 'car'):
        ?>

        <tr>
            <td class="show">نام</td>
            <td class="show">رنگ</td>
            <td class="show">ویرایش</td>
            <td class="show">حذف</td>
        </tr>
        <?php
        $connect = mysqli_connect("localhost", "root", "", "car_gallery");
        $sql = "select * from car";
        $result = mysqli_query($connect, $sql);
        while ($row = mysqli_fetch_array($result)) {
            echo "
    <tr>
            <td class='show'>$row[name]</td>
            <td class='show'>$row[color] </td>
            <td class='show'><a style='color: #567C09;' href='edit.php?id=$row[ID]&index=$index'>edit</a></td>
            <td class='show'><a style='color: #567C09;' href=delet.php?id=$row[ID]&index=$index'>delete</a></td>
        </tr>";
        }
    elseif ($index == 'customer'):
        ?>
        <tr>
            <td class="show">نام کاربری</td>
            <td class="show">آدرس ایمیل</td>
            <td class="show"> ویرایش</a></td>
            <td class="show">حذف </td>
        </tr>";
        <?php
        $connect = mysqli_connect("localhost", "root", "", "car_gallery");
        $sql = "select * from customer";
        $result = mysqli_query($connect, $sql);
        while ($row = mysqli_fetch_array($result)) {
            echo "
    <tr>
            <td class='show'>$row[user_name]</td>
            <td class='show'>$row[email] </td>
            <td class='show'><a style='color: #567C09;' href='edit.php?id=$row[ID]&index=$index'>edit</a></td>
            <td class='show'><a style='color: #567C09;' href='delet.php?id=$row[ID]&index=$index'>delete</a></td>
        </tr>";
        }
    endif;
    ?>
</table>


</body>
</html>

